<?php

class db {

	protected $db;
  
	function __construct() {
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "sneat";
    
    // Create connection
    $this->db = new mysqli($servername, $username, $password, $db);
    
    // Check connection
    if ($this->db->connect_errno) {
      die("Connection failed: " . $conn->connect_errno);
    }
    // echo "Connected successfully";
  }
  
}

?>