<?php

class Session_helpers{

    public function __construct(){
        session_start(); 
    }
    function isLoggedIn(){
        if(isset($_SESSION['email'])){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
