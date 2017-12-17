<?php

namespace utility;

class password
{
    static function setPassword($password) {

        $password = password_hash($password, PASSWORD_DEFAULT);


        return $password;

    }

    static function checkPassword($LoginPassword) {

        return password_verify($LoginPassword, self::$password);

    }
  


}