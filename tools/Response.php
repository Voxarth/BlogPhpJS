<?php

class Response {
    public $success ;
    public $message ;

    function __construct($success,$message){
       $this->message =$message;
       $this->success =$success;
    }
     
}