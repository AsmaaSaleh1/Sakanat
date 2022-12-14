const inputs = document.querySelectorAll(".input-field");
const toggle_btn = document.querySelectorAll(".tog");
const main = document.querySelector("main");
const bullets = document.querySelectorAll(".bullets span");
const images = document.querySelectorAll(".image");

inputs.forEach((inp) => {
    inp.addEventListener("focus", () => {
        inp.classList.add("active");
    });
    inp.addEventListener("blur", () => {
        if (inp.value != "") return;
        inp.classList.remove("active");
    });
});

toggle_btn.forEach((btn) => {
    btn.addEventListener("click", () => {
        main.classList.toggle("sign-up-mode");
    });
});

function moveSlider() {
    let index = this.dataset.value;

    let currentImage = document.querySelector(`.img-${index}`);
    images.forEach((img) => img.classList.remove("show"));
    currentImage.classList.add("show");

    const textSlider = document.querySelector(".text-group");
    textSlider.style.transform = `translateY(${-(index - 1) * 2.2}rem)`;

    bullets.forEach((bull) => bull.classList.remove("active"));
    this.classList.add("active");
}

bullets.forEach((bullet) => {
    bullet.addEventListener("click", moveSlider);
});
const pass= document.getElementById('password2');
const toggle=document.getElementById('toggle2');
document.getElementById('toggle2').addEventListener('click',showHide);
function showHide() {
    if(pass.type=='password'){
        pass.setAttribute('type','text');
        toggle.classList.add('hide');
        toggle.innerHTML='<i class="fa fa-eye-slash"style="left: 0;bottom: 0" aria-hidden="true"></i>'

    }
    else {
        pass.setAttribute('type','password');
        toggle.classList.remove('hide')
        toggle.innerHTML='<i class="fa fa-eye"style="left: 0;bottom: 0" aria-hidden="true"></i>';
    }

}

const loader=document.querySelector('.load');
const main2=document.querySelector('.main');
function inIt(){
    setTimeout(()=>{
        loader.style.display ='none';
        main.style.display ='flex';
        setTimeout(()=>(main.style.opacity=1),5000);
    },10000);
}
inIt();

let valueDisplays = document.querySelectorAll(".num");
let interval = 40000;

valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function () {
        startValue += 1;
        valueDisplay.textContent = startValue;
        if (startValue == endValue) {
            clearInterval(counter);
        }
    }, duration);
});

/*For contact button*/
