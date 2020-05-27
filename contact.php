<?php include 'header_&_footer/header.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/contact.css">

</head>
<body>


<div class="container">
    <h1 id="titre_contact">Formulaire de contact</h1>
    <div class="starter_template">

    <?php if(array_key_exists('errors', $_SESSION)): ?>
           <div class="alert alert-danger">
               <?= implode('<br>', $_SESSION['errors']); ?>
           </div>
        <?php endif; ?>

        <?php if(array_key_exists('success', $_SESSION)): ?>
            <div class="alert alert-success">
                message sent!
            </div>
        <?php endif; ?>

        <form action="post_contact.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputName">Your name:</label>
                        <input type="text" name="name" id="inputName" class="form-control" <?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : '';?>">
                    </div>
                </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputEmail">Your email:</label>
                            <input type="email" name="email" id="inputEmail" class="form-control" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '';?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="inputMessage">Your message:</label>
                            <textarea name="message" id="inputMessage" class="form-control"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : '';?></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
           </div>
        </form>
        <?php var_dump($_SESSION['inputs']['name']) ?>
    </div>
</div>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);
//var_dump($_SESSION); ?>

</body>
</html>
