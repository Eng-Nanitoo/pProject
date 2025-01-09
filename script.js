const revealElements = document.querySelectorAll("[data-reveal]");
const revealElementOnScroll = function () {
    for (let i = 0, len = revealElements.length; i < len; i++) {

        const isElementInsideWindow = revealElements[i].getBoundingClientRect().top < window.innerHeight / 1.1;

        if (isElementInsideWindow) {
            revealElements[i].classList.add("revealed");
        }

        else{
            revealElements[i].classList.remove("revealed");

        }
    }
}

window.addEventListener("scroll", revealElementOnScroll);

window.addEventListener("load", revealElementOnScroll);
window.onload(myVar = setTimeout(pop, 2000));
function pop(){
    let myDiv = document.getElementById('model');
    let myPDiv = document.getElementById('p_model');
    let myMain = document.getElementById('main');
    let myFooter = document.getElementById('foot');
    myDiv.style.display = 'none';
    myPDiv.style.display = 'none';
    myMain.style.display = 'block';
    myFooter.style.display = 'block';
    clearTimeout(myVar);
}
