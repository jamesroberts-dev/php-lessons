<?php

class User extends DBHandler {

    public function getAllUsers(){
        // Using PDO
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()){
            $uid = $row['uid'];
            return $uid;
        }

        // Using mysqli
        /*$sql = "SELECT * FROM users";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if ($numRows > 0){
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }*/
    }

    // Using prepared statements for security
    public function getUserWithCountCheck() {
        $id = 1;
        $uid = "james";
        $sql = "SELECT * FROM users WHERE id=? AND uid=?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id, $uid]);

        if ($stmt->rowCount()){
            while ($row = $stmt->fetch()){
                return $row['uid'];
            }
        }

    }

}

?>