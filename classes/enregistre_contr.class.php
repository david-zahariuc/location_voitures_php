
<?php

class SignupContr extends Signup{
    private $firstName;
    private $lastName;
    private $password;
    //private $passwordRepeat;
    private $email;

    public function __construct($firstName, $lastName, $password, $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->password = $password;
        //$this->passwordRepeat = $passwordRepeat;
        $this->email = $email;
    }
    public function signupUser()
    {
        if($this->emptyInput() == false) {
            header("location: ../compte.php?error=emptyinput");
        exit();
        }
        if($this->userExists() == false) {
            header("location: ../compte.php?error=emailtaken");
        exit();
        }

        $this->setUser($this->firstName, $this->lastName, $this->password, $this->email);
    }

    private function emptyInput() 
    {   
        //$result;
        if(empty($this->firstName ||  $this->lastName ||   $this->password || $this->passwordRepeat ||  $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result; 
    }

    //errors handlers
    private function userExists() {
        //$result;
        if(!$this->checkUser($this->email)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

}
?>