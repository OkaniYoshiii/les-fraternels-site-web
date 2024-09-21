<?php

/* 
    MODELE POUR LE FICHIER 'config.local.php' :

    Permet de renseigner les informations liées à l'environnement sur lequel pvous vous trouvez. 
    Exemple : informations sur la base de données, nom de domaine etc ...

    Ce fichier étant un template, il vous faudra remplir les informations mentionnées ci-dessus puis
    renommer/copier le fichier en 'config.local.php' car c'est ce fichier là qui sera ensuite utilisé par l'application
*/

// Nom de domaine avec slash de fin (ex: http://localhost/public/ ou  https://wikipedia.org/)
define('SITE_URL', 'http://localhost/public/');

// Database credentials
define('DB_HOST', 'localhost');
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PWD', '');