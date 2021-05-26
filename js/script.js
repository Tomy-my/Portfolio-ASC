
// Afficher le choix des deux langues 
let d1 = document.querySelector("#translate");
let p1 = document.querySelector("#choice");

d1.addEventListener("click", () => {
  p1.style.opacity = "1";
  p1.style.transition = "all 0.4s ease";

  setTimeout(function () {
    p1.style.opacity = "0";
    p1.style.transition = "all 1s ease";
  }, 3500);
})




let pressing = document.querySelector(".mail");
let changement = document.querySelector("button.email")

pressing.addEventListener("click", function(){
  pressing.style.transition = "all 0.4s ease";
  changement.style.transition = "all 0.4s ease";
  changement.style.borderRadius = "0px";
  changement.textContent = "tomy.vdtlj@gmail.com";
  
  setTimeout(function (){
    changement.style.transition = "all 0.4s ease";
    changement.style.borderRadius = "14px";
    changement.textContent = "Press here for show my Email";
  }, 3500);
})





//%
var n = 45;
var cpt = 0;
var duree = 2;
var delta = Math.ceil((duree * 550) / n);
var node = document.querySelector(".int_php span");

function countdown() {
  node.innerHTML = ++cpt;
  if (cpt < n) {
    setTimeout(countdown, delta);
  }
}

setTimeout(countdown, delta);


var nAe = 25;
var cptAe = 0;
var dureeAe = 2;
var deltaAe = Math.ceil((dureeAe * 650) / nAe);
var nodeAe = document.querySelector(".int_ae span");

function countdownAe() {
  nodeAe.innerHTML = ++cptAe;
  if (cptAe < nAe) {
    setTimeout(countdownAe, deltaAe);
  }
}

setTimeout(countdownAe, deltaAe);


var nF = 50;
var cptF = 0;
var dureeF = 2;
var deltaF = Math.ceil((dureeF * 555) / nF);
var nodeF = document.querySelector(".int_figma span");

function countdownF() {
  nodeF.innerHTML = ++cptF;
  if (cptF < nF) {
    setTimeout(countdownF, deltaF);
  }
}

setTimeout(countdownF, deltaF);










let circle = document.querySelector('.circle');
let circleInner = document.querySelector('.circle-inner');
let cloud = document.querySelector('.cloud');
let arrow = document.querySelector('.matrix');
let whiteArrow = document.querySelector('.matrix-white');
let whiteTick = document.querySelector('.white-tick');
let reset = document.querySelector('.reset');

reset.addEventListener('click', () => {
  resetButton();
})

document.querySelector('.arrow-container').addEventListener('click', () => {
  start();
})

function start() {
  arrow.classList.add('send-black-arrow');
  whiteArrow.classList.add('send-white-arrow')
  whiteTick.classList.add('white-tick-ani')
  circle.classList.add('complete-circle');
  circleInner.classList.add('complete-circle-fill');
  cloud.classList.add('animate-cloud');
  reset.classList.add('reset-live');
}

function resetButton() {
  arrow.classList.remove('send-black-arrow');
  whiteArrow.classList.remove('send-white-arrow')
  whiteTick.classList.remove('white-tick-ani')
  circle.classList.remove('complete-circle');
  circleInner.classList.remove('complete-circle-fill');
  reset.classList.remove('reset-live');
  cloud.classList.remove('animate-cloud');

}


