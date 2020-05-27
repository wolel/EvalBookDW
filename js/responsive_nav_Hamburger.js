function dropdownBtn() {
    var x = document.getElementById("myDropDown");
    if (x.className === "dropdown") {
        x.className += " responsive";
    }else{
        x.className = "dropdown";
    }
}

function hamburgerDrop() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


