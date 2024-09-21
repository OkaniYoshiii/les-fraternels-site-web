<?php 

namespace App;

use App\Entities\Mod;
use PDO;

class Database {
    private PDO|null $pdo;

    public function __construct(string $host, string $dbName, string $username, string $password) {
        $this->pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbName . ';',$username, $password);  
    }

    public function queryMods() : array {
        $query = 'SELECT mods.name, mods.description, mods.uri, mods.release_date, authors.name AS author, thumbnails.filename AS thumbnail_name, GROUP_CONCAT(tags.name) AS tags, mods.is_used FROM `mods_tags`
        JOIN tags ON mods_tags.tag_id = tags.id
        JOIN mods ON mods_tags.mod_id = mods.id
        LEFT JOIN thumbnails ON thumbnail_id = thumbnails.id
        JOIN authors ON author_id = authors.id
        GROUP BY mods.name;';
        $statement = $this->pdo->query($query);
        $mods = [];
        while ($mod = $statement->fetchObject(Mod::class)) {
            $mods[] = $mod;
        }

        $statement = null;

        return $mods;
    }

    public function queryFilteredMods(string $filter, bool $asObjects = true) : array
    {
        if($this->unrecognizedURLParameters()) {
            $GLOBALS['errors'][] = 'Les filtres renseignées ne sont pas corrects. Affichage de l\'ensemble des Mods';
        }

        $queryFilter = $queryFilter2 = '';

        $filter = (isset($_GET['activated-mods'])) ? $_GET['activated-mods'] : $filter;

        switch ($filter) {
            case 'all':
                $queryFilter = '';
                break;
            case 'activated':
                $queryFilter = 'WHERE mods.is_used = 1 ';
                break;
            case 'deactivated':
                $queryFilter = 'WHERE mods.is_used = 0 ';
                break;
            default :
                $queryFilter = '';    
        }


        if(isset($_GET['tags']) && $_GET['tags'] !== 'all') {
            $queryFilter2 = 'HAVING INSTR(tags, :tag); ';
        }

        $query = 'SELECT mods.id, mods.name, mods.description, mods.uri, mods.release_date, authors.name AS author, thumbnails.filename AS thumbnail_name, GROUP_CONCAT(tags.name) AS tags, mods.is_used FROM `mods_tags`
                    JOIN tags ON mods_tags.tag_id = tags.id
                    JOIN mods ON mods_tags.mod_id = mods.id
                    LEFT JOIN thumbnails ON thumbnail_id = thumbnails.id
                    JOIN authors ON author_id = authors.id ' . 
                    $queryFilter . 'GROUP BY mods.name ' . $queryFilter2 . ';';        
        
        if(isset($_GET['tags']) && $_GET['tags'] !== 'all') {
            $statement = $this->pdo->prepare($query);
            $statement->bindParam(':tag',$_GET['tags'],PDO::PARAM_STR);
            $statement->execute();
        } else {
            $statement = $this->pdo->query($query);
        }

        $mods = [];
        if($asObjects) {
            while ($mod = $statement->fetchObject(Mod::class)) {
                $mods[] = $mod;
            }
        } else {
            $mods = $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        $statement = null;

        return $mods;
    }

    private function unrecognizedURLParameters() {
        return ((isset($_GET['activated-mods']) && isset($_GET['tags'])) && (empty($_GET['activated-mods']) || empty($_GET['tags'])));
    }

    public function queryTags() : array {
        $query = 'SELECT tags.name FROM tags;';
        $statement = $this->pdo->query($query);
        $tags = $statement->fetchAll(PDO::FETCH_COLUMN);

        $statement = null;

        return $tags;
    }

    public function getModByUri(string $uri) : Mod {
        $query = 'SELECT mods.name, authors.name AS author, GROUP_CONCAT(tags.name) AS tags, mods.release_date, mods.description, thumbnails.filename AS thumbnail_name FROM mods_tags
        JOIN tags ON mods_tags.tag_id = tags.id
        JOIN mods ON mods_tags.mod_id = mods.id
        LEFT JOIN thumbnails ON thumbnail_id = thumbnails.id
        JOIN authors ON author_id = authors.id
        WHERE mods.uri = :uri
        GROUP BY mods.id;';

        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':uri',$uri);
        $statement->execute();

        $mod = $statement->fetchObject(Mod::class);

        return $mod;
    }

    public function closeConnection() {
        $this->pdo = null;
    }

    public function queryPrimaryModsByReleaseDate() {
        $query = 'SELECT mods.name, mods.description, mods.uri, mods.release_date, authors.name AS author, thumbnails.filename AS thumbnail_name, GROUP_CONCAT(tags.name) AS tags, mods.is_used FROM `mods_tags`
        JOIN tags ON mods_tags.tag_id = tags.id
        JOIN mods ON mods_tags.mod_id = mods.id
        LEFT JOIN thumbnails ON thumbnail_id = thumbnails.id
        JOIN authors ON author_id = authors.id
        WHERE mods.is_used = 1 AND mods.is_main_mod = 1
        GROUP BY mods.name
        ORDER BY release_date
        LIMIT 3;';
        $statement = $this->pdo->query($query);
        $mods = [];
        while ($mod = $statement->fetchObject(Mod::class)) {
            $mods[] = $mod;
        }

        $statement = null;

        return $mods;
    }
}