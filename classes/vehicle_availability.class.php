<?php

class VehicleAvailability extends Dbh
{
    protected static $list = array();

    public function checkAvailability($vehicleType, $tripStart, $tripEnd)
    {

        $this->vehicleType = $vehicleType;
        $this->tripStart = $tripStart;
        $this->tripEnd = $tripEnd;

        if ($this->vehicleType === "Toutes") {
            $stmt = $this->connect()->prepare("SELECT automobiles.id_auto, automobiles.class, automobiles.make, automobiles.model, automobiles.doors_nb, 
        automobiles.places_nb, automobiles.fuel, automobiles.transmission, automobiles.price, automobiles.photos
        FROM automobiles
        LEFT JOIN reservations
        ON automobiles.id_auto = reservations.id_auto
        WHERE 
        NOT EXISTS (
        SELECT reservations.id_res
        WHERE ? BETWEEN reservations.start_date AND reservations.end_date
        OR
        ?  BETWEEN reservations.start_date AND reservations.end_date);");


            if (!$stmt->execute(array(
                $this->tripStart,
                $this->tripEnd
            ))) {
                var_dump($stmt);

                $stmt = null;
                header("location: ../index.php?error=stmt_error");
                exit();
            }
        } else {
            $stmt = $this->connect()->prepare("SELECT automobiles.id_auto, automobiles.class, automobiles.make, automobiles.model, automobiles.doors_nb, 
        automobiles.places_nb, automobiles.fuel, automobiles.transmission, automobiles.price, automobiles.photos
        FROM automobiles
        LEFT JOIN reservations
        ON automobiles.id_auto = reservations.id_auto
        WHERE automobiles.class = ?
        AND
        NOT EXISTS (
        SELECT reservations.id_res
        WHERE ? BETWEEN reservations.start_date AND reservations.end_date
        OR
        ?  BETWEEN reservations.start_date AND reservations.end_date);");


            if (!$stmt->execute(array(
                $this->vehicleType,
                $this->tripStart,
                $this->tripEnd
            ))) {
                var_dump($stmt);

                $stmt = null;
                header("location: ../index.php?error=stmt_error");
                exit();
            }
        };


        if ($stmt->rowCount() == 0) {
            $stmt = null;
            //header("location: ../index.php?
            //error=no_cars_found");
            exit();
        }

        self::$list = $stmt->fetchAll(PDO::FETCH_CLASS, 'AvailabilityQuery');
        $stmt = null;
    }
}
