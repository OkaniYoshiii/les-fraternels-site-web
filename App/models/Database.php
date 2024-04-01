<?php 

require_once ENTITIES_DIR . '/Mod.php';

class Database {
    private PDO $pdo;

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
        var_dump($this->pdo);
        $query = 'SELECT * FROM mods';
        $statement = $this->pdo->query($query);
        // $mods = $statement->fetchObject('Mod');
        $mods = [];
        while ($mod = $statement->fetchObject('Mod')) {
            $mods[] = $mod;
        }

        return $mods;
    }

    public function closeConnection() {
        // A implémenter pour couper la connection à la db
    }
}