/*------------------------percussions----------*/

$(document).ready(function () {
$('#open_img_a1').click(function () {
$('.container1').show();
$('#btnPrevNext').show();
$('.container2,.container21,.container3,.container31').hide();
$('#backgrTitreDjeme').hide();
$('#backgrDjembe').hide();
})
});
/*------------------------percussions africaines----------*/
$(document).ready(function () {
    $('.a2').click(function () {
        $('.container,.container2, .container21').show();
        $('#btnPrevNext').hide();
        $('.container1,.container31, .container3, .containerGuit').hide();
        $('#backgrTitreDjeme').hide();
        $('#backgrDjembe').hide();
    })
});

/*------------------------instruments à cordes----------*/
$(document).ready(function () {
    $('.a3').click(function () {
        $('.container,.container3, .container31,.containerGuit').show();
        $('#btnPrevNext').hide();
        $('.container1,.container2, .container21').hide();
        $('#backgrTitreDjeme').hide();
        $('#backgrDjembe').hide();


    })
});





/*===========================MODAL===================================PERCUSSIONS AFRICAINES*/

var modal = document.getElementById("myModal_djembe");


// I insert image inside the modal - I use its "alt" text as a caption-->
var img = document.getElementById("djem1");
var img2 = document.getElementById("djem2");
var img3 = document.getElementById("djem3");
var img4 = document.getElementById("djem4");
var img5 = document.getElementById("djem5");
var img6 = document.getElementById("djem6");



var modalImg = document.getElementById("djem1Modal");
var captionText = document.getElementById("caption");
//----------------------------
var modaltext = document.getElementById("modalText");
var modalTitle = document.getElementById("modalTitle");
//----------------------------
var modalTitle2 = document.getElementById("modalTitle2");
var modaltext2 = document.getElementById("modalText2");
//----------------------------
var modalTitle3 = document.getElementById("modalTitle3");
var modaltext3 = document.getElementById("modalText3");
//----------------------------
var modalTitle4 = document.getElementById("modalTitle4");
var modaltext4 = document.getElementById("modalText4");
//----------------------------
var modalTitle5 = document.getElementById("modalTitle5");
var modaltext5 = document.getElementById("modalText5");
//----------------------------
var modalTitle6 = document.getElementById("modalTitle6");
var modaltext6= document.getElementById("modalText6");



var span = document.getElementById("close"); // I Get the <span> element that closes the modal------------>
span.onclick = function () {    // Close the modal when click on "x"------------>
    modal.style.display = "none";
    modalImg.src.style.display = "none";
};


/*===========================Modal images 1=========================*/

    img.onclick = function ()
    {
    modal.style.display = "block";
    modalImg.src ="img/jembre/djembe_africain_1.jpg";
    captionText.innerHTML = this.alt;
    modaltext.style.display = "block";
    modalTitle.style.display = "block";
    modalTitle.style.css= "z-index:999";

    /*---hide---*/
    modaltext2.style.display = "none";
    modalTitle2.style.display = "none";
    modaltext3.style.display = "none";
    modalTitle3.style.display = "none";
    modaltext4.style.display = "none";
    modalTitle4.style.display = "none";
    modaltext5.style.display = "none";
    modalTitle5.style.display = "none";
    modalTitle6.style.display = 'none';
    modaltext6.style.display = "none";
};

/*======================Modal images 2=========================================*/

img2.onclick = function ()
{
    modal.style.display = "block";
    modalImg.src ="img/jembre/djembe_africain_2.jpg";
    captionText.innerHTML = this.alt;
    modaltext2.style.display = "block";
    modalTitle2.style.display = "block";

    /*---hide---*/
    modalTitle.style.display = 'none';
    modaltext.style.display = "none";
    modaltext3.style.display = "none";
    modalTitle3.style.display = "none";
    modaltext4.style.display = "none";
    modalTitle4.style.display = "none";
    modaltext5.style.display = "none";
    modalTitle5.style.display = "none";
    modalTitle6.style.display = 'none';
    modaltext6.style.display = "none";
};
/*======================Modal images 3=========================================*/

img3.onclick = function ()
{
    modal.style.display = "block";
    modalImg.src ="img/jembre/djembe_africain_3.jpg";
    modaltext3.style.display = "block";
    modalTitle3.style.display = "block";

    /*---hide---*/
    modalTitle.style.display = 'none';
    modaltext.style.display = "none";
    modaltext2.style.display = "none";
    modalTitle2.style.display = "none";
    modaltext4.style.display = "none";
    modalTitle4.style.display = "none";
    modaltext5.style.display = "none";
    modalTitle5.style.display = "none";
    modalTitle6.style.display = 'none';
    modaltext6.style.display = "none";

};
/*======================Modal images 4=========================================*/

img4.onclick = function ()
{
    modal.style.display = "block";
    modalImg.src ="img/jembre/djembe_africain_4.jpg";
    modaltext4.style.display = "block";
    modalTitle4.style.display = "block";

    /*---hide---*/
    modalTitle.style.display = 'none';
    modaltext.style.display = "none";
    modaltext2.style.display = "none";
    modalTitle2.style.display = "none";
    modaltext3.style.display = "none";
    modalTitle3.style.display = "none";
    modaltext5.style.display = "none";
    modalTitle5.style.display = "none";
    modaltext6.style.display = "none";
    modalTitle6.style.display = "none";

};
/*======================Modal images 5=========================================*/


img5.onclick = function ()
{
    modal.style.display = "block";
    modalImg.src ="img/jembre/djembe_africain_5.jpg";
    modaltext5.style.display = "block";
    modalTitle5.style.display = "block";

    /*---hide---*/
    modalTitle.style.display = 'none';
    modaltext.style.display = "none";
    modaltext2.style.display = "none";
    modalTitle2.style.display = "none";
    modaltext3.style.display = "none";
    modalTitle3.style.display = "none";
    modaltext4.style.display = "none";
    modalTitle4.style.display = "none";
    modaltext6.style.display = "none";
    modalTitle6.style.display = "none";

};
/*======================Modal images 6=========================================*/

img6.onclick = function ()
{
    modal.style.display = "block";
    modalImg.src ="img/jembre/djembe_africain_6.jpg";
    captionText.innerHTML = this.alt;
    modaltext6.style.display = "block";
    modalTitle6.style.display = "block";

    /*---hide---*/
    modalTitle.style.display = 'none';
    modaltext.style.display = "none";
    modaltext2.style.display = "none";
    modalTitle2.style.display = "none";
    modaltext3.style.display = "none";
    modalTitle3.style.display = "none";
    modaltext4.style.display = "none";
    modalTitle4.style.display = "none";
    modaltext5.style.display = "none";
    modalTitle5.style.display = "none";
};






/*===========================MODAL===================================INSTRUMENTS A CORDES*/

var modalG = document.getElementById("myModal_guitare");

var imgG = document.getElementById("guit1");
var imgG2 = document.getElementById("guit2");
var imgG3 = document.getElementById("guit3");
var imgG4 = document.getElementById("guit4");
var imgG5 = document.getElementById("guit5");
var imgG6 = document.getElementById("guit6");


var modalGImg = document.getElementById("guit1Modal");

var modalGTitle = document.getElementById("modalGTitle");
var modalGText = document.getElementById("modalGText");
var modalGText2 = document.getElementById("modalGText2");
var modalGTitle2 = document.getElementById("modalGTitle2");
var modalGText3 = document.getElementById("modalGText3");
var modalGTitle3 = document.getElementById("modalGTitle3");
var modalGText4 = document.getElementById("modalGText4");
var modalGTitle4 = document.getElementById("modalGTitle4");
var modalGText5 = document.getElementById("modalGText5");
var modalGTitle5 = document.getElementById("modalGTitle5");
var modalGText6 = document.getElementById("modalGText6");
var modalGTitle6 = document.getElementById("modalGTitle6");

var span2 = document.getElementById("close2"); // I Get the <span> element that closes the modal------------>
span2.onclick = function () {    // Close the modal when click on "x"------------>
    modalG.style.display = "none";
    modalGImg.src.style.display = "none";
};

/*======================Modal G images 1=========================================*/

imgG.onclick = function () {
    modalG.style.display = "block";
    modalGImg.src ="img/guitare/afrika_saz_korthals.jpg";
    captionText.innerHTML = this.alt;
    modalGText.style.display = "block";
    modalGTitle.style.display = "block";
    /*$('#modalGText,#modalGTitle,#guit1Modal').css('z-index', '1000');*/


    /*---hide---*/
    modal.style.display = "none";
    modalGTitle2.style.display = 'none';
    modalGText2.style.display = "none";
    modalGTitle3.style.display = 'none';
    modalGText3.style.display = "none";
    modalGTitle3.style.display = 'none';
    modalGText3.style.display = "none";
    modalGTitle4.style.display = 'none';
    modalGText4.style.display = "none";
    modalGTitle5.style.display = 'none';
    modalGText5.style.display = "none";
    modalGTitle6.style.display = 'none';
    modalGText6.style.display = "none";



};
/*======================Modal G images 2=========================================*/

imgG2.onclick = function () {
    modalG.style.display = "block";
    modalImg.src ="img/guitare/kora_chromatique.jpg";
    captionText.innerHTML = this.alt;
    modalGText2.style.display = "block";
    modalGTitle2.style.display = "block";

    /*---hide---*/
    modal.style.display = "none";
    modalGTitle.style.display = 'none';
    modalGText.style.display = "none";
    modalGTitle3.style.display = 'none';
    modalGText3.style.display = "none";
    modalGTitle3.style.display = 'none';
    modalGText3.style.display = "none";
    modalGTitle4.style.display = 'none';
    modalGText4.style.display = "none";
    modalGTitle5.style.display = 'none';
    modalGText5.style.display = "none";
    modalGTitle6.style.display = 'none';
    modalGText6.style.display = "none";

};

/*======================Modal G images 3=========================================*/

imgG3.onclick = function () {
    modalG.style.display = "block";
    modalImg.src ="img/guitare/kora_chromatique.jpg";
    captionText.innerHTML = this.alt;
    modalGText3.style.display = "block";
    modalGTitle3.style.display = "block";

    /*---hide---*/
    modal.style.display = "none";
    modalGTitle.style.display = 'none';
    modalGText.style.display = "none";
    modalGTitle3.style.display = 'none';
    modalGText3.style.display = "none";
    modalGTitle3.style.display = 'none';
    modalGText3.style.display = "none";
    modalGTitle4.style.display = 'none';
    modalGText4.style.display = "none";
    modalGTitle5.style.display = 'none';
    modalGText5.style.display = "none";
    modalGTitle6.style.display = 'none';
    modalGText6.style.display = "none";

};