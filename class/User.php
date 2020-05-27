<?php

class user
{
    /**
     * @var mysqli
     */
    private $mysqli;
    public $msg ='';


    /**
     * user constructor
     * @param db $db
     */
    public function __construct(db $db)
    {
        $this->mysqli = $db->dbObject;
    }


//============================================GET USER INFOS=====//
    public function getUser()
    {
        $res = $this->mysqli->query("SELECT * FROM users");

            while ($row = $res->fetch_assoc()) {
               echo $row['uidUsers'].'<br>';
            }
    }

    /*function getUserUpload($id)
    {
        $query = ("SELECT * FROM `users`INNER JOIN products INNER JOIN images WHERE product_userID = $id AND products.id = img_product AND idUsers= $id ORDER BY date ASC");
        $response = array();
        $result = mysqli_query($this->mysqli, $query);

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $response[] = $row;
        }

        header('Content-Type: application/json');
        echo json_encode($response, JSON_PRETTY_PRINT);

    }*/

    //todo ============================================VIEW USER INFOS
/*
    public function showUser()
    {
        $this->getUser();
        foreach ($datas as $data) {
            echo "Username : " . $data['uidUsers'] . ' ' . "email :" . $data['emailUsers'] . '<br>';

        }
    }
*/


    /*public function getArticles(){
        $res = $this->mysqli->query("SELECT id, title FROM articles_users ORDER BY id DESC ");

        if ($res == true) {
            while ($info = $res->fetch_assoc()) {
               $id = $_GET['id'];

                echo "<ul><il>(id: " . $info['id'] . ' )'.utf8_encode($info['title']) . ' ' . "</il></ul>";
                echo "<a href='articlesBlog.php?id=".$info["id"]."'>Read article...</a>";
            }
        }else{
            header("Location: ../blog/home.php?error=selectid&title=error");
            echo "<p>An error occured, please try again</p>";
            exit();
        }
    }*/

    /**
     * @param $id
     * Get back 1 single article whit is ID
     **/
    /*public function getArticle($id){
        $res = $this->mysqli->query("SELECT * FROM products WHERE products.id =?");

        if ($res == true) {
            while ($info = $res->fetch_assoc()) {
                echo "<ul><il>" . utf8_encode($info['content'])."</il></ul>";
                }

        }else{
            header("Location: ../blog/home.php?error=notitleselected");
            echo "<p>An error occured, please try again</p>";
            exit();
        }
    }*/
    /*---------------------------------*/
    public function getAllProducts(){
        $products = array();
        $res = $this->mysqli->query("SELECT * FROM products LEFT JOIN image ON image.img_product = products.id");
        while($row = $res->fetch_assoc()){
            $products[] = $row;
        }
        return $products;

        /*$result = array(
            'title' => $products['title'] ,
            'description' => $products['description'] ,
            'price' => $products['price'],
            'image' => $products['image'],
            'utilisateur' => $products['uidUsers']
        );
        return $result;*/

    }

    /**
     * Return the product user id to be displayed
     *
     * @param $productUserId
     * @return string
     */
    public function getProductUsername($productUserId)
    {
        $res = $this->mysqli->query("SELECT uidUsers FROM users WHERE idUsers=$productUserId");
        return $res->fetch_row()[0];
    }
    public function getProductEmail($productUserId)
    {
        $res = $this->mysqli->query("SELECT emailUsers FROM users WHERE idUsers=$productUserId");
        return $res->fetch_row()[0];
    }
    public function getProduct($id){
        // récupérer le produit
        $res = $this->mysqli->query("select * from products where id= $id");
        $info = $res->fetch_array(MYSQLI_ASSOC);


        // dans $info on peut avoir product_userID qui est relatif à l'utilisateur qui a crée le produit
        $userid = $info['product_userID'];

        // on récupère son nom grace à uidUsers depuis la table users
        $res_user = $this->mysqli->query("select uidUsers from users where idUsers= $userid LIMIT 1");
        $user = $res_user->fetch_array(MYSQLI_ASSOC);

        // on récupère l'image du produit de la table image.
        $res_img = $this->mysqli->query("select * from image where img_product= $id LIMIT 1");
        $image = $res_img->fetch_array(MYSQLI_ASSOC);

        // on utilise les 3 tableau $info , $image et $user pour regrouper les résultats dans une seule table $result
        $result = array(
            'title' => $info['title'] ,
            'description' => $info['description'] ,
            'price' => $info['price'],
            'image' => $image['image'],
            'utilisateur' => $user['uidUsers']
             );
        return $result;
    }

/*------ la bonne------*/

    public function addProduct($iduser, $title, $price, $description, $city){
        /*$q = "INSERT INTO `products`(`title`, `price`, `description` , `product_userID`) VALUES ('".$title."','".$price."','".$description."',$iduser)";*/
        $res = $this->mysqli->query("INSERT INTO `products`(`title`, `price`, `description` ,`city`, `product_userID`) VALUES ('".$title."','".$price."','".$description."','".$city."',$iduser)");

        return $this->mysqli->insert_id;
    }

    public function deleteProduct($iduser, $title, $price, $description, $city){
        /*$q = "INSERT INTO `products`(`title`, `price`, `description` , `product_userID`) VALUES ('".$title."','".$price."','".$description."',$iduser)";*/
        $res = $this->mysqli->query("DELETE FROM `products`(`title`, `price`, `description` ,`city`, `product_userID`) VALUES ('".$title."','".$price."','".$description."','".$city."',$iduser)");

        return $this->mysqli->insert_id;
    }

//todo ===============================================ADMIN space============ if needed//

    public function dropTable($tableName)
    {
        $drop = $this->mysqli->query("DROP TABLE $tableName");
    }

    public function createTable($tableName, $col1, $col2, $col3, $col4)
    {
        $create = $this->mysqli->query("CREATE TABLE $tableName (id INT PRIMARY KEY NOT NULL,$col1 VARCHAR(100), $col2 VARCHAR(100),$col3 VARCHAR(255), $col4 DATE,");

    }

//===============================================USER space============//
    /*public function submit()
    {
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $date = date('Y-m_d');
        $msg = '';

        $sql = $this->mysqli->query("INSERT INTO comment_articles_users( name, comment) VALUES ('$name','$comment')");

        if ($sql = true) {
            $lastID = $this->mysqli->insert_id;
            header("Location:comPage.php?success=posted&id=$lastID&name=$name&date=$date");
            exit();
        } else {
            header("Location:comPage.php?error=sql_submit_error");
            exit();
        }



    }*/


}
