<?php
class commentFunct
{
    /**
     * @var mysqli
     */
    private $mysqli;


    /**
     * user constructor
     * @param db $db
     */
    public function __construct(db $db)
    {
        $this->mysqli = $db->dbObject;
    }

    /**
     * This function INSERT commentFunct and name INTO the database
     */
    public function submit()
    {
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $date = date('Y-m_d');
        $msg = '';

        $sql = $this->mysqli->query("INSERT INTO `comment_articles_users`( `name`, `comment`) VALUES ('$name','$comment')");
        if ($sql == true) {
            $lastID = $this->mysqli->insert_id;
            header("Location:index2.php?success=posted&id=$lastID&name=$name&date=$date");
        } else {
            header("Location:index2.php?error=sqlerror");

        }//$this->mysqli->close();
    }

    /**
     * This function GET comments and names FROM the database
     */

    public function getComments()
    {
        $sql = $this->mysqli->query("SELECT * FROM comment_articles_users ORDER BY id DESC");
        if ($sql == true) {
            header("Location:../index2.php?success=getpostWithSuccess");
            while ($info = $sql->fetch_assoc()) {
                echo "<ul><li>" . utf8_encode($info['name']) . utf8_encode($info['commentFunct']) . utf8_encode($info['cur_date']) . "</li></ul>";
            }
        }$this->mysqli->close();
    }

    /**
     * @param $id
     * This function GET comments and names FROM the database whith an 'id'


    function get($id)
    {

    $sql = $this->mysqli->query("SELECT $id FROM comment_articles_users ORDER BY id DESC limit 1");
    if ($sql == true) {
    while ($info = $sql->fetch_assoc()) {
    echo "<span class='front-italic'>Posted by : " . utf8_encode($info[$id]) . "</span>";
    }
    }else{
    echo 'error';
    }
    //$this->mysqli->close();
    }
     */










}
