
function changeIconHeart() {
    var icon = document.getElementById("heart");
    if (icon.classList.contains("far")) {
      icon.classList.remove("far");
      icon.classList.add("fas");
    } else {
      icon.classList.remove("fas");
      icon.classList.add("far");
    }
  }
  
function changeIconSmiley() {
    var icon = document.getElementById("smiley");
    if (icon.classList.contains("far")) {
      icon.classList.remove("far");
      icon.classList.add("fas");
    } else {
      icon.classList.remove("fas");
      icon.classList.add("far");
    }
  }
  
function changeIconTommelopp() {
    var icon = document.getElementById("tommelopp");
    if (icon.classList.contains("far")) {
      icon.classList.remove("far");
      icon.classList.add("fas");
    } else {
      icon.classList.remove("fas");
      icon.classList.add("far");
    }
  }
  
function changeIconTommelned() {
    var icon = document.getElementById("tommelned");
    if (icon.classList.contains("far")) {
      icon.classList.remove("far");
      icon.classList.add("fas");
    } else {
      icon.classList.remove("fas");
      icon.classList.add("far");
    }
  }

let heart = 0;
let smiley = 0;
let tommelopp = 0;
let tommelned = 0;

function countClicks1(){
    heart++;
    document.getElementById('heart').innerHTML = heart;
}
