<?php


class getID
{

    public static function getuserID(){
        session_start();
        $id = $_SESSION['userId'];
        //echo $id;
    }
}
getID::getuserID();
