var Menu = document.getElementById("Menu");
var MnTop = document.getElementById("MnTop");
var MnBottom = document.getElementById("MnBottom");
var MnTbContainer = document.getElementById("MnTbContainer");
var menuMobDiv = document.getElementById("menuMobDiv");



function menuBtn(){
    MnTop.classList.toggle("moveT");
    MnBottom.classList.toggle("moveB");
    menuMobDiv.classList.toggle("menuMobDivClik");
}

MnTbContainer.addEventListener("click" , menuBtn);



