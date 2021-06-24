<?php

class config
{
    private $host = "";
    private $dbname = "";
    private $port = "";
    private $user = "";
    private $pass = "";

    public function __construct ($host, $dbname, $port, $user, $pass) {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->port = $port;
        $this->user = $user;
        $this->pass = $pass;
    }


    //functions for connecting to database
    private function dbh () {
        $dbh = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';port='.$this->port, $this->user, $this->pass);
        return $dbh;
    }

    public function checkConnectionToDatabase () {
        try {
            $this->dbh();
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    function insertMessages($name,$email,$tel, $subject, $text)
    {
        $qeury = "INSERT INTO Messages (name, email, tel, subject,text)
                  VALUES ('$name','$email','$tel','$subject','$text')";

        $this->dbh()->query($qeury);
    }

}