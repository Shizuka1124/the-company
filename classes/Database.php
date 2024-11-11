<?php

class Database{
    // Define properties
    // Public - can be accessed anywhere
    // private - can only be accessed inside the class
    // protected - similar to private but can be accessed by the child classes
    private $server_name = "localhost";
    private $username = "root";
    private $password = "Mimtet910";
    private $db_name = "the_company";
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);

        if($this->conn->connect_error){
            die('Unable to connect to the datavase: '.$this->conn->connect_error);
        }
    }
}
?>