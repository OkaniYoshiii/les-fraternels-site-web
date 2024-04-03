<?php 

require_once ENTITIES_DIR . '/Mod.php';

class Database {
    private PDO|null $pdo;

    public function __construct(string $host, string $dbName, string $username, string $password) {
        $this->verifyIdentifiers($username, $password);
        $this->pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbName . ';',$username, $password);      
    }

    private function verifyIdentifiers(string $username, string $password)  {
        if (DEVMODE) return;
        if(empty($username) || empty($password) || $username = 'root' || $username = 'admin' || strlen($password) < 10) {
            throw new Exception('Identifiants de connexion à la base de données non sécurisés. Echec de la connexion');
        }
    }

    public function getMods() : array {
        $query = 'SELECT mods.name, mods.description, mods.uri, mods.release_date, authors.name AS author, thumbnails.filename AS thumbnail_name, GROUP_CONCAT(tags.name) AS tags, mods.is_used FROM `mods_tags`
        JOIN tags ON mods_tags.tag_id = tags.id
        JOIN mods ON mods_tags.mod_id = mods.id
        LEFT JOIN thumbnails ON thumbnail_id = thumbnails.id
        JOIN authors ON author_id = authors.id
        GROUP BY mods.name;';
        $statement = $this->pdo->query($query);
        $mods = [];
        while ($mod = $statement->fetchObject('Mod')) {
            $mods[] = $mod;
        }

        $this->pdo = null;
        $statement = null;

        return $mods;
    }

    public function closeConnection() {
        // A implémenter pour couper la connection à la db
    }
}