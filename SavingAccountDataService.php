<?php

require_once 'Autoloader.php';

class SavingAccountDataService {

    private $conn;
    function __construct($conn) {

        $this->conn = $conn;
    }

    function getBalance() {
        $sql = "SELECT BALANCE FROM savings";
        $result = $this->conn->query($sql);

        if ($result->num_rows == 0) {
            return -1;
        } else {
            $row = $result->fetch_assoc();
            $balance = $row['BALANCE'];
            return $balance;
        }


    }
    
    function updateBalance($balance) {
        
        $sql = "UPDATE savings SET BALANCE=$balance";
        $result = $this->conn->query($sql);
        
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }
}

?>