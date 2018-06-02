<?php

class ViewUser extends User {

    public function showAllUsers(){
        $users = $this->getAllUsers();
        foreach ($users as $user){
            echo "Username is: ".$user['uid']."<br>";
            echo "Password is: ".$user["pwd"];
        }
    }

}

?>