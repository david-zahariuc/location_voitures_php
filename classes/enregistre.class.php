<?php
class Signup extends Dbh{

    protected function setUser($firstName, $lastName, $password, $email) {
        $stmt = $this->connect()->prepare('INSERT INTO users (first_name,last_name,user_pwd,user_email) VALUES (?,?,?,?);');

        //$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($firstName, $lastName, $password, $email))) {
            $stmt=null;
           header("location: ../compte.php?error=insertvalueserror");
            exit();
        }
        $stmt = null;
    }
    


    protected function checkUser($email) {
        $stmt = $this->connect()->prepare('SELECT user_id FROM users WHERE user_email = ?;');
      //separete de data from the querry
      if(!$stmt->execute(array($email))) {
        $stmt = null;
        header("location: ../compte.php?error=thisstmtfailed");
        exit();
        }
        //$resultCheck;
        
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;

        }
       return $resultCheck;
        
    }
    
  

}
?>