
// Afficher le choix des deux langues 
let d1 = document.querySelector("#translate");
let p1 = document.querySelector("#choice");

d1.addEventListener("click", () => {
    p1.style.opacity = "1";
    p1.style.transition = "all 0.4s ease";   
    
    setTimeout(function() {
        p1.style.opacity = "0";
        p1.style.transition = "all 1s ease";
        }, 3500);
})



var n = 45; 
var cpt = 0; 
var duree = 2; 
var delta = Math.ceil((duree * 550) / n); 
var node =  document.querySelector(".int_php span"); 
 
function countdown() {
  node.innerHTML = ++cpt;
  if( cpt < n ) { 
     setTimeout(countdown, delta);
  }
}
 
setTimeout(countdown, delta);


var nAe = 25; 
var cptAe = 0; 
var dureeAe = 2; 
var deltaAe = Math.ceil((dureeAe * 650) / nAe); 
var nodeAe =  document.querySelector(".int_ae span"); 
 
function countdownAe() {
  nodeAe.innerHTML = ++cptAe;
  if( cptAe < nAe ) { 
     setTimeout(countdownAe, deltaAe);
  }
}
 
setTimeout(countdownAe, deltaAe);


var nF = 50; 
var cptF = 0; 
var dureeF = 2; 
var deltaF = Math.ceil((dureeF * 555) / nF); 
var nodeF =  document.querySelector(".int_figma span"); 
 
function countdownF() {
  nodeF.innerHTML = ++cptF;
  if( cptF < nF ) { 
     setTimeout(countdownF, deltaF);
  }
}
 
setTimeout(countdownF, deltaF);
