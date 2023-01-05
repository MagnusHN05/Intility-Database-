
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

const heart = document.getElementById("heart");
const countheart = document.getElementById('heart');
let count1 = 0; 

heart.addEventListener('click', function(){
  count1 +=1;
  countheart.innerHTML = count1;
})

const smiley = document.getElementById("smiley");
const countsmiley = document.getElementById('smiley');
let count2 = 0; 

smiley.addEventListener('click', function(){
  count2 +=1;
  countsmiley.innerHTML = count2;
})

const tommelopp = document.getElementById("tommelopp");
const counttommelopp = document.getElementById('tommelopp');
let count3 = 0; 

tommelopp.addEventListener('click', function(){
  count3 +=1;
  counttommelopp.innerHTML = count3;
})

const tommelned = document.getElementById("tommelned");
const counttommelned = document.getElementById('tommelned');
let count4 = 0; 

tommelned.addEventListener('click', function(){
  count4 +=1;
  counttommelned.innerHTML = count4;
})

  /*
let heart = 0;
let smiley = 0;
let tommelopp = 0;
let tommelned = 0;

function countClicks1(){
    heart++;
    document.getElementById('heart').innerHTML = heart;
}
*/
