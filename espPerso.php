<?php require 'header_&_footer/header.php';?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>

        <!---------------------scriptAjax_addProduct for uploading image(POST) ----------------------->
        <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
        <script type="text/javascript" src="js/espPerso_addProduct.js"></script>
        <!------------------------------------------------------------------------------------>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/espPerso.css">

    </head>

    <body>

        <?php
        /*
        * verify the 'role' session: if is not a 'seller'=>go back to index page. Otherwise, start the session.
        * why do that?:To stop opening the page to evil user that may want to access into this page typing the name in the browser
        */
        ?>
        <?php  if ($_SESSION['role'] != 'seller'):  header("location:index.php");?>
        <?php
        /**
        * On récupère les publications du membre seller
        * When the user interacts with this form, the file is uploaded to the temporary folder and
        * all the information about the file is stored in the multidimensional array known as $_FILES
        */

        $img = $_FILES['image']["name"]; //stores the original filename from the client
        $tmp = $_FILES["image"]["tmp_name"]; //store the name of designated temporary file
        $errorimg = $_FILES["image"]["error"];//stores any error code resulting from the transfer

        //check the error in the uploaded file
        if ($errorimg > 0):
        die('<div class= "alert alert-danger" role="alert">An error occurred while uploading the file</div>');
        endif?>
        <!-- Check that the file is under the set file size limit:
        File size is measured in bytes. So, if the file size is set at 500kb, then the file size should be less than 500000.-->

        <?php if ($tmp['size'] > 500000):
        die('<div class="alert alert-danger" role="alert">File is too bigg</div>'); endif ?>

        <?php else: ?>

        <h1 id="titre-espPerso">Espace Personnel</h1>

        <div class="containerAll">
            <div class="container">

                <!--------------------see all products container----------------------->
                <div class="title_container">
                    <h1 id="allproduct_title"><img src="img/logo.png" width="50px"/>Voir tout vos produits: </h1>
                </div>

                <div class="row1">
                    <div class="tb-addedProducts">
                        <table class="table table-striped" id="user">
                            <thead>
                            <tr>
                                <th style ="display: none">id</th>
                                <th>Date</th>
                                <th>Titre</th>
                                <th>Ville</th>
                                <th>Prix</th>
                                <th>Description</th>
                                <th>Image</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- All the rows from database will be placed here -->
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            <!--------------------add products container form----------------------->
            <div class="container2">

                <div class="title_container">
                    <h1 id="addproduct_title"> Ajouter un produit: </h1>
                </div>

                <div class="row2">
                    <div class="formAddProduct">
                        <form id="form" action="insert_user_upload.php" method="post" enctype="multipart/form-data">

                            <div style="display: none;">
                                <input type="hidden" id="iduser" name="iduser" value="<?php echo $_SESSION['userId'] ?>" required> <!--récupère l'id de la session-->
                            </div>

                            <div>
                                <label for="title">Titre</label>
                                <input type="text" id="title" name="title" placeholder="Notez le titre de l'annonce" required>
                            </div>

                            <div>
                                <label for="title">Ville</label>
                                <input type="text" id="city" name="city" placeholder="Notez votre ville" required>
                            </div>

                            <div>
                                <label for="price">Prix</label>
                                <input type="text" id="price" name="price" placeholder="Notez le prix" required>
                            </div>

                            <div>
                                <label for="description">Description</label>
                                <textarea name="description" id="description" cols="30" rows="5" placeholder="Ecrire une description du produit" required></textarea>
                            </div>

                            <div class="upload-btn-wrapper">

                                <input id="uploadImage" type="file" accept="image/*" name="image">

                                <div class="imgPreview" id="preview">
                                    <img src="img/file.jpg" class="image-preview__image" style="width: 100%">
                                </div>

                                <input type="submit" class="btn btnAdd" value="Ajouter"><br>
                                <div id="err"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

    <!-------------------------------------------------------------------------------------------->

        <script type="text/javascript" src="js/preview-img.js"></script> <!-- this script show the image preview before submit-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/DataTables/datatables.min.js"></script>
        <script src="js/jQuery/bootstable.js"></script>
    <!-------------------------------------------------------------------------------------------->

        <script>
         /**
          *  Tuto: https://marcautran.developpez.com/tutoriels/javascript/json/
          *  ce script récupère le JSON de la page 'get_user_Products'
          *  get and show content in table
          */

           $.ajax({
                url : 'get_user_Products.php',
                type : 'GET',
                dataType : 'JSON',
                data: 'id=<?php echo $_SESSION['userId']?>', // récupère l'id de la session
                success : function(response){
                    $.each(response, function(idx, col){

                        $("#user" ).append(
                            '<tr>' +
                            '<td style ="display: none">'+  col.id + '</td>' +
                            '<td>' + col.date + '</td><td>' + col.title +'</td>' +
                            '<td>'+ col.city +'</td><td>' + col.price + '</td>' +
                            '<td>'+ col.description + '</td>' +
                            '<td><img width="150" src="upload/'+ col.image +'"></td>' +
                            '<td><a href="delete_user_upload.php?idProduct='+col.id+'"><i class="fas fa-trash-alt"></i></a></td>' + // the delete button
                            '</tr>'
                        );
                    });
                },
                complete: function(){
                    /*$('#user').SetEditable({
                        columnsEd:"2,3,4,5", // it starts with 0
                        onEdit: function(a) {
                            row = a.children();
                            date = row[2].innerHTML;
                            title = row[3].innerHTML;
                            city = row[4].innerHTML;
                            description = row[3].innerHTML;
                        },
                        onDelete: function() {},
                        onBeforeDelete: function() {},
                        onAdd: function() {}
                    });*/
                    $("#user").DataTable();
                },
                error: function(response){
                   console.log(response);
                },
           });
       </script>

    </body>
</html>
