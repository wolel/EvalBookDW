/**
 * e.preventDefault() ===>   La méthode indique de l 'interface Event indique à l'agent utilisateur que si l'événement n'est pas traité explicitement, son action par défaut ne doit pas être prise en compte comme elle le serait normalement.
                             The preventDefault() method cancels the event if it is cancelable, meaning that the default action that belongs to the event will not occur.
                             For example, this can be useful when:
                             Clicking on a "Submit" button, prevent it from submitting a form
                             Clicking on a link, prevent the link from following the URL

 * contentType ====> option to false is used for multipart/form-data forms that pass files. When one sets the contentType option to false , it forces jQuery not to add a Content-Type header, otherwise, the boundary string will be missing from it.
 *
 * using $ajax()method for send data to php also check the success data or error in data sending.
 */

    $('#form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url:"insert_user_upload.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
               $("#preview").fadeOut();
                $('#err').fadeOut();
            },
            success:function (data) {

                if (data === 'invalid'){
                    //invalid file format.
                    $("#err").html("Invalid File!..").fadeIn();
                }
                else{
                  //view upload file.
                  $('#preview').html(data).fadeIn();
                }
            },
            error: function (e) {
                $('#err').html(e).fadeIn();
            }
        });
    });
