var products = {};
var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", 'get_user_Products.php', true);
xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState === 4 && xmlhttp.status === 200){
        products = JSON.parse(xmlhttp.responseText);
    }
};
xmlhttp.send(null);
