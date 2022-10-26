<?php
class Dbh {
    protected function connect(){
        try {
            $username = "root";
            $dbh = new PDO("mysql:host=localhost;dbname=location_voiture;charset=utf8mb4",  $username, "" );
            return $dbh;
        } catch (PDOException $e) {
            print "Erreur!:" . $e->getMessage() . "<br>";
            die();
        }
    }
}
?>