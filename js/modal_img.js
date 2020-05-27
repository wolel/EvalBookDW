/*var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
 var img = document.getElementById("myImg");
var modalImage = document.getElementById("img01");
var modalContTxt = document.getElementById("txt-content");
var captionText = document.getElementById("caption");

img.onclick = function () {
    modal.style.display = "block";
    modalImage.src = this.src;
    modalContTxt.style.display = "block";
    captionText.innerHTML = this.alt;
}
var close = document.getElementsByClassName("close")[0];
// When the user clicks on <span> (x), close the modal
close.onclick = function () {
modal.style.display = 'none';
}*/


    var btn = document.getElementById('btnShowProduct');
    var content = document.getElementById('open_content');
    var productEmail = document.getElementById('productEmail');
    var close = document.getElementsByClassName('close')[0];
    var imgC = document.getElementById("imgContainer ");

    btn.onclick = function () {

    content.style.width = "100%";
    productEmail.style.display = 'block';
    close.style.display = 'block';
    img.style.width = '100%';
    imgC.style.height = '100%';

    }
    close.onclick = function () {
    content.style.width = "330px";
    close.style.display = 'none';
    }
