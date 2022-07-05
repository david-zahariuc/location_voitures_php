<?php
class Dbh {
    protected function connect(){
        try {
            $username = "root";
            $password = "6AF90D8A3E";
            $dbh = new PDO("mysql:host=localhost;dbname=location_voiture;charset=utf8mb4",  $username, $password );
            return $dbh;
        } catch (PDOException $e) {
            print "Erreur!:" . $e->getMessage() . "<br>";
            die();
        }
    }
}
?>