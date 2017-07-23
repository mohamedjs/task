<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author ahmedgroup
 */
class User {
    public $username;
    public $password;
    
    public function User(){}

    public function set_username($usern){
        $this->username=$usern;
    }
    public function set_password($pass){
        $this->password=$pass;
    }
    public function get_username(){
        return $this->username;
    }
    public function get_pass(){
        return $this->password;
    }
    
    public function print_($input){
    echo $input;
    }
}
