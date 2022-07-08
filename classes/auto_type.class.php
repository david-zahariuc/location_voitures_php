<?php
class AutoType extends Dbh {
    public function getFields() {
        $stmt = $this->connect()->prepare('SELECT class FROM automobiles;');
        if(!$stmt->execute(array())) {
            $stmt=null;
            //header("location: ../index.php?error=stmtserror");
            exit();
        }

        $types = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach($types as $value) {
            echo '<option name="'.$value['class'].'">'.$value['class'].'</option>';
        }


    }
}

?>