<?php


class login
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




//todo ============================================VERIFY LOGIN =====//

    public function login_Check()
    {
        $mailuid = $_POST['mailuid'];
        $password = $_POST['psw'];

        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
        //$stmt = $this->mysqli->stmt_init();

        if (!$stmt = $this->mysqli->prepare($sql)) {
            header("Location:../../home.php?error=sql_login_prepare_error");      // verify if  connection to datbase is made
            exit();
        } else {
            $stmt->bind_param("ss", $mailuid, $mailuid);
            $stmt->execute();
            //$stmt->store_result();
            //$stmt->bind_result($mailuid);
            $result = $stmt->get_result();
            $stmt->close();
            if ($row = $result->fetch_assoc()) {
                $pswCheck = password_verify($password, $row['pswUsers']);

                if ($pswCheck === false) {
                    header("Location:../../home.php?error=wroongpassword");
                    exit();

                } elseif ($pswCheck === true) {
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                    $_SESSION['role'] = $row['role'];

                    header("Location:../../home.php?login=success");      // verify if  connection to datbase is made
                    exit();
                } else {
                    header("Location:../../home.php?error=errorsession");
                    exit();
                }

            } else {
                header("Location:../../home.php?error=nouser");      // if not, go automatically to index.php
                exit();

            }

        }

    }
}
