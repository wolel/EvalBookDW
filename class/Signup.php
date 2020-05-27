<?php


class Signup
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


//todo ============================================VERIFY SIGNUP

    public function signin_Check()
    {
        $username = $_POST['uid'];
        $email = $_POST['mail'];
        $password = $_POST['psw'];
        $role = $_POST['role'];
        $passwordRepeate = $_POST['psw-repeat'];

        $sql = ("SELECT uidUsers FROM users WHERE uidUsers=?");

        if (!$stmt = $this->mysqli->prepare($sql)) {
            header("Location:../signup.php?error=sql_signin_prepare_error");      // verify if a connection is made
            exit();

        } else {
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($found);
            $stmt->fetch();
            $stmt->close();
            if ($found) {
                header("Location:../signup.php?error=usertaken&email=" . $email);
                exit();
            } else {
                $sql = "INSERT INTO users (uidUsers, emailUsers, pswUsers, dateUsers, role) VALUE(?,?,?,?,?)";

                if (!$stmt = $this->mysqli->prepare($sql)) {
                    header("Location:../signup.php?error=sql_signin_insert_error");      // verify if  connection to datbase is made
                    exit();
                } else {
                    $ashedPsw = password_hash($password, PASSWORD_DEFAULT);
                    //"sssis"
                    $stmt->bind_param( "sssis", $username, $email, $ashedPsw, $dateUsers, $role);
                    $stmt->execute();
                    header("Location:http://localhost:63342/projetDW/home.php?signup=success");
                    exit();
                }

            }

        }


    }
}
