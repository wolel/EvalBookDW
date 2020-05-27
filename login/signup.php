<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>


<body class="bg-light">
<main>
        <div class="wrapper-main">
            <section class="section-default">
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p class="signuperror">Fill in all fields!..</p>';
                    } elseif ($_GET['error'] == 'invaliduid') {
                        echo '<p class="signuperror">Invalid username</p>';
                    } elseif ($_GET['error'] == 'invalidmail') {
                        echo '<p class="signuperror">Invalid email</p>';
                    } elseif ($_GET['error'] == 'passwordcheck') {
                        echo '<p class="signuperror">Password don\'t match !..</p>';
                    }elseif ($_GET['error'] == 'usertaken') {
                        echo '<p class="signuperror">User taken!..</p>';
                    }elseif ($_GET['error']== 'emptyrole'){
                        echo '<p class="signuperror">Select your role please !..</p>';
                    }
                }elseif (isset($_GET['signup']) == 'success'){
                    echo '<p class="signupsuccess">Signup Success!..</p>';
                }
                ?>


                <div class="row justify-content-center">

                    <div class="col-lg-3 bg-light mt-2"  style="border-radius: 10px;padding: 20px 50px">
                        <h1 class="text-center p-2 ">Signup</h1>
                        <form class="form-signup form-group" action="include/signup.inc.php" method="POST">
                            <input  type="text"     name="uid"        placeholder="Username" class="form-control rounded-3" value="<?= isset($_GET['uid']) ? $_GET['uid'] : '';?>">
                            <input  type="text"     name="mail"       placeholder="E-mail" class="form-control rounded"     value="<?= isset($_GET['email']) ? $_GET['email'] : '';?>">
                            <input  type="password" name="psw"        placeholder="Password" class="form-control">
                            <input  type="password" name="psw-repeat" placeholder="Repeat password"class="form-control">


                            <label for="role">Choose Role:</label>
                            <select id='role' name="role" class="form-control rounded-3">
                                <option>--select--</option>
                                <option name="visitor" id="visitor">Visitor</option>
                                <option name="seller"  id="seller" value="seller">Seller</option>
                            </select>

                            <button type="submit"   name="signup-submit" class="col-lg-12 btn btn-primary" style="margin-top: 20px">Signup</button>
                        </form>

                        <a href="http://localhost:63342/projetDW/home.php">Back to HomePage</a>

                    </div>
                </div>
            </section>
        </div>
    </main>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);
?>

</body>
</html>
