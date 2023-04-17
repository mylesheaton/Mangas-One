<?php

define('DB_HOST', '10.160.32.77');
define('DB_USER', 'myles');
define('DB_PASSWORD', 'myles');
define('DB_NAME', 'mangas_one');
define('DB_DSN', 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';port=3306;charset=UTF8');



try {
            $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
          // $bdd = new PDO('mysql:host=localhost;dbname=mangas_one', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
           // $dbh->execute("set names utf8"); // pour forcer UTF8 sur la réponse serveur
} catch (Exception $e) {
            die('Erreur : pas de connexion à la base' . $e->getmessage());
};

?>