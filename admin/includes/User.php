<?php

class User
{
    public function find_all_users(){
        global $database;
        $result = $database->query("SELECT * FROM users");
        return $result;
    }
}