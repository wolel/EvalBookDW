<?php
include '../header_&_footer/header.php';
//$userName = $_SESSION['userUid'];


    if (isset($_POST['submit'])) {
        $msg = null;
        if (empty($_POST['name']) || empty($_POST['comment'])) {
            header("Location: comPage.php?error=emptyfields");
        } else {
            include '../class/db.php';
            include '../class/User.php';
            $name = $_POST['name'];
            $comment = $_POST['comment'];

            $db = new db;
            $action = new User($db);
            $action->submit();
            //$action->get('cur_date');
            //$this->mysqli->close();
        }
        /*if (!empty($_POST['comment'])) {
            $getcomment = $action->get('comment');
            $_POST['comment'];
        }*/
    }


    //var_dump($name);

    $msg = null;
    if ($_GET['success'] == 'posted'){
        $msg  ="<div class='alert alert-success'>Posted Successfully!</div>";
    }elseif($_GET['error'] == 'sqlerror'){
        $msg = "<div class='alert alert-danger'>Failed to Post<div>";
    }elseif ($_GET['error'] == 'emptyfields') {
        $msg = "<div class='alert alert-danger'>Oups, empty fields!..<div>";
    }elseif ($_GET['name'] == 'posted'){

    }

    if (isset($_POST['name'])){
        $name = utf8_encode($_POST['name']);
    }

    if (isset($_POST['comment'])){
        $comment = utf8_encode($_POST['comment']);
    }
    //the name of the user that alwready have a session started

    ?>
    <!DOCTYPE html>
    <html lang="en" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Comment system</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/aa71811ed5.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/style_comment2.css">
    </head>
    <!--body class="bg-light or bg-dark"-->
    <body class="body" >

    <div class="container "ng-app >
        <!------------------------------------------------ROW 1--------->
        <div class="row justify-content-center">
            <div class="col-lg-5 bg-light rounded mt-2">

                <h4 class="text-center p-2">write your comment</h4>

                <!------------------------------------------------FORM--------->

                <form action="" method="post" class="p-2">
                    <div class="form-group">
                        <input type="text" ng-model="title" name="name" class="form-control rounded" autofocus placeholder="Enter title"
                               autocomplete="off" >
                    </div>

                    <!-------------------------------------------------------->

                    <div class="form-group">
                        <textarea name="comment" ng-model="comment" class="form-control rounded-0" placeholder="Write your comment here" ><?php echo $comment;?></textarea>
                    </div>

                    <input type="submit" name="submit" class=" btn btn-primary rounded " value="Post comment">

                    <h5 class="float-right text-success p-2"><?php echo $msg ;?></h5>
                </form>
            </div>
        </div>
        <!------------------------------------------------ROW 2--------->
        <div class="row justify-content-center">
            <div class="col-lg-5 rounded bg-light p-3">

                <!-------Title of comment-------------->
                <span class="front-italic">{{"Title : " + title | uppercase}}</span>

                <!--load comments from database--->
                <div>Comment : {{comment | lowercase}}</div>
                <div class="card mb-2 border-secondary">

                    <div class="card-header bg-secondary py-1 text-light">
                        <span class="front-italic">{{"Posted by : " + name}}<?php echo $_SESSION['userUid'];?></span>
                        <span class="front-italic float-right">On : <?php echo ($_GET['date']);?></span>
                    </div>

                    <div class="card-body py-2">
                        <p class="card-text"></p>
                    </div>

                </div>
            </div>
        </div>
        <p><a href="http://localhost:63342/Eval_Blog_PHP/home.php">Back to HomePage</a></p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    </body>
    </html>

    <?php
    //todo: open session : do not let user opend this page in browser
    //todo: require fields (input)
    //
    /*
    unset($_SESSION['input']);
    unset($_SESSION['errors']);
    unset($_SESSION['success']);
    */
    ?>
