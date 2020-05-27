<?php
class db
{
    public $dbObject;

    public function  __construct()
    {

    $this->dbObject = new mysqli("localhost",'root','','mydb');
        if ($this->dbObject->connect_error){
            echo '<h1>Connection to MySQL failed</h1>'.$this->dbObject->connect_error;
        }else{
            $this->dbObject->select_db('mydb');
            $this->dbObject->set_charset("utf8");
            //echo 'OK';
            //echo '<p id="dbconnectmsg">&#9829</p>';
        }

    }

}
/*
 * connection to Webhost:
 * ------------------------
class db( ͡° ͜ʖ ͡°)
{
    public $dbObject;
    public function __construct()
    {
        $this->dbObject = new mysqli("localhost", 'id13074159_wolel','12345', 'id13074159_blog_eval');
        if ($this->dbObject->connect_error){
            echo ' Connection to mysqli failed'.$this->dbObject->connect_error;
        }else{
            $this->dbObject->select_db('id13074159_blog_eval');
            echo " Connection to mysqli OK &#9829";
        }
    }
}
*/
