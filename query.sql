
        SELECT automobiles.id_auto, automobiles.class, automobiles.make, automobiles.model, automobiles.doors_nb, 
automobiles.places_nb, automobiles.fuel, automobiles.transmission, automobiles.price, automobiles.photos
        FROM automobiles
        LEFT JOIN reservations
        ON automobiles.id_auto = reservations.id_auto
        WHERE 
        NOT EXISTS (
        SELECT reservations.id_res
        WHERE "2022-10-01"  BETWEEN reservations.start_date AND reservations.end_date
        OR
        "2022-10-18"  BETWEEN reservations.start_date AND reservations.end_date);