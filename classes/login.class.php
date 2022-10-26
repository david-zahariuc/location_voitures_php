<?php
class Login extends Dbh {

    protected function getUser($email, $password) {
        $stmt = $this->connect()->prepare('SELECT user_pwd FROM users WHERE user_email = ?;');

        //$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($email))) {
            $stmt=null;
            header("location: ../compte.php?error=stmtserror");
            exit();
        }
        
        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../compte.php?error=usernotfound");
            exit();
        }

        $pwd = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //$checkPwd = password_verify($password,$pwd[0]["user_pwd"]);
        if($password !== $pwd[0]["user_pwd"]) {
            $stmt = null;
            header("location: ../compte.php?error=wrongpassword");
            exit();

        } elseif($password === $pwd[0]["user_pwd"]) {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE user_email = ? AND user_pwd = ?;');

            if(!$stmt->execute(array($email, $password))) {
                $stmt=null;
                header("location: ../compte.php?error=stmterror");
                exit();
            }
            if($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../compte.php?error=usernotfound");
                exit();
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION["fn_user"] = $user[0]["first_name"];
            $_SESSION["ln_user"] = $user[0]["last_name"];



        }


        $stmt = null;

    }
}
?>
