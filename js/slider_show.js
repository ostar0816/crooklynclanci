$(document).ready(function(){
    showDivs(slideIndex);
});

let slideIndex = 1;
let pauseSlide = false;
let timerId;
function plusDivs(n) {
    showDivs(slideIndex += n);
}

function nextDiv() {
    if (pauseSlide) return;
    
    showDivs(slideIndex += 1);
}

function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    let i;
    let x = document.getElementsByClassName("figure");
    let dots = document.getElementsByClassName("page-indicator");
    if (!x || !dots) return;
    
    if (n > x.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.opacity = "0";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex-1].style.opacity = "1";
    dots[slideIndex-1].className += " w3-white";

    if (!pauseSlide) {
        if (timerId) {
            clearTimeout(timerId);
        }
        timerId = setTimeout(nextDiv, 5000);
    } else {
        clearTimeout(timerId);
        timerId = null;
    }
}

function setPause(pause) {
    pauseSlide = pause;
    if (!pauseSlide) {
        nextDiv();
    }
}

function onAdClick(url) {
    window.open(url, '_blank');
}
