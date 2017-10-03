<?php

//author: qCazelles

abstract class User extends SqlElement {

    public $id;
    public $name;            //String
    public $password;        //String - sha 512 - 128 char
    public $role;			 //String
    public $mail;			 //String
    
    public function login() {
    	
    }
    
    public function unlog() {
    	
    }


}