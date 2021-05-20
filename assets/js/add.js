// variables \/
let inscri = document.getElementById("sign");
let home = document.getElementById("accueil");
let connection = document.getElementById("connect");
let bMenu = document.getElementById("menu");
let bUser = document.getElementById("user");


// les function \/
function redirect() {
    document.location.href= "inscription.php";
}

function retour() {
    document.location.href= "index.php";
}

function connect() {
    document.location.href= "connect.php";
}

function menu() {
    document.location.href= "menu.php";
}

function user() {
    document.location.href= "user.php";
}



// partie event \/
inscri.addEventListener('click',redirect);
home.addEventListener('click',retour);
connection.addEventListener('click',connect);
bMenu.addEventListener('click',menu);
bUser.addEventListener('click',user);