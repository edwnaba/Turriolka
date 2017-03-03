<?php

error_reporting(1);
include_once 'Data.php';

class LoginData extends Data {

    public function isUser($id, $pass) {
        if ($id === "admin@gmail.com" && $pass === "admin") {
            return "3";
        } else {
            return "1";
        }
    }

}
