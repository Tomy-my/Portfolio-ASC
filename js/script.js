
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