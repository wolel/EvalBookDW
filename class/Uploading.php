<?php
class Uploading
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

    /**-----------------------------------------------------------------------
     * Function that insert the uploading content from page 'product.php'<< add product >>
     * only the seller may access to this page
     * it insert the content + image
     *
     * @param $id_product
     * insert image from USER form
     * If image is not inserted properly, dlet all info from database
    -------------------------------------------------------------------------- */

    function insertUserUpload($id_product){

        $valid_extentions = array('jpeg', 'jpg', 'png');
        $path = 'upload/'; // the upload directory

        if ($_FILES["image"]){
            $img = $_FILES["image"]['name'];
            $tmp = $_FILES["image"]['tmp_name'];

            // get uploaded file's extension
            $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

            // can upload same image using rand function (1000000 bytes = 1 Mb)
            $final_image = rand(1000, 1000000).$img;

            if (array($ext, $valid_extentions)){
                $path = $path.strtolower($final_image);

                if (move_uploaded_file($tmp, $path)){
                    echo "<img class='imgSize' src='$path' />";
                    $insert = $this->mysqli->query("INSERT INTO image (`image`, `img_product`) VALUES ('" . $final_image . "', $id_product)");

                    if (!$insert) {
                        $this->mysqli->query("DELETE FROM products WHERE id = $id_product");
                        echo "err insert img";
                    }
                    echo "<h1>INSERT WITH SUCCESS!</h1>";
                }
            }
        }else{
            echo 'invalid or empty. No photo uploaded';
        }
        $this->mysqli->close();
    }

    /* -------------------------------*/
    // FIXME => JSON return too many 'information' / 'products !

    function getUserUpload($id)
    {

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        //if empty get only users product
        $query = ("SELECT users.uidUsers, users.emailUsers, products.title, 
                    products.price, products.city,products.description, products.date, products.id,image.image  
                    FROM users JOIN products ON users.idUsers = product_userID JOIN image ON products.id = img_product 
                    WHERE users.idUsers = $id ORDER BY products.date");

        $response = array();
        $result = $this->mysqli->query($query);
        while ($row1 = $result->fetch_assoc()){
           $response[] = $row1;
        }
        header('Content-Type: application/json');
        echo json_encode($response, JSON_PRETTY_PRINT);
        //return $this->mysqli->insert_id;
    }





/* -------------------------------*/

    /**
     * @param $id
     * @throws Exception
     * Delete a task based on a specified task id
     * @return bool true on success or false on failure
     */
    function deleteUserUpload($idUser, $idProduct){
        $sql = "DELETE FROM `products` WHERE id=? AND product_userID=?";
        $request = $this->mysqli->prepare($sql);
        $request->bind_param("dd", $idProduct, $idUser);
        $result = $request->execute();

        if(!$result){
            throw new Exception('Cannot delete upload');
        }
        return $result;
    }
/*----------------------------------------*/

    /*function getUserUploadimage($id){
        $res = $this->mysqli->query("SELECT * FROM `users`INNER JOIN products INNER JOIN image AND product_userID = $id AND products.id = img_product AND idUsers= $id ORDER BY date ASC");

        while ($info = $res->fetch_assoc()) {
            echo "<h2 class='name'>".utf8_encode($info['uidUsers'])."</h2>";
            echo "<span><img class='getimg' src='" . $res->fetch_assoc()["image"] . "'></span>";

        }
    }
*/



}
