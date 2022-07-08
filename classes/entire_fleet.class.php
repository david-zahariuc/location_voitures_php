<?php
class EntireFleet extends Dbh {
    protected static $automobileList = array();

    protected function getCars () {
        $stmt = $this->connect()->prepare('SELECT class, make, model, doors_nb, places_nb, fuel, transmission, price, photos FROM automobiles;');


        if(!$stmt->execute()) {
            $stmt=null;
            header("location: ../flotte.php?error=stmt_error");
            exit();
        }
        
        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../flotte.php?
            error=no_cars_found");
            exit();
        }
        self::$automobileList = $stmt->fetchAll(PDO::FETCH_CLASS, 'ShowFleet');
        
        $stmt = null;

    }
}
?>
