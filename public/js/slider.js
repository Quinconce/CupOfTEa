function Slider(){

    let visible = document.querySelector(".visible");
    let visible2 = visible.nextElementSibling;
    if(visible2 === null) {
       visible2 = visible.parentElement.firstElementChild;
    }
    visible.classList.add("block");
    visible.classList.remove("visible");    

    visible2.classList.remove("block");
    visible2.classList.add("visible");
}

setInterval(Slider, 2000);