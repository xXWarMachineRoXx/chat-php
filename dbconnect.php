<?php

class Connection{
    protected $conn_file;
    protected $conn_str;
    protected $servername;
    protected $username;
    protected $password;
    protected $dbname;

    // initialize connection
    protected function __construct() {
        $this->conn_file = file_get_contents("conn.json");
        $this->conn_str=json_decode($this->conn_file,true);
        $this->servername = $this->conn_str['host'];
        $this->username = $this->conn_str['user'];
        $this->password = $this->conn_str['pass'];
        $this->dbname = $this->conn_str['db'];
    }
    // Create connection
    protected  function connect()
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          else{
              return $conn;
          }
    }
}