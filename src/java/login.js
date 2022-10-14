document.querySelectorAll('input').forEach((item) => {
    item.addEventListener("focus", function () {
        item.previousElementSibling.className = 'label-selected';
    })
    item.addEventListener("blur", function () {
        console.log(item.value);
        if (item.value === '') {
            item.previousElementSibling.className = '';
        }
    })
})

document.getElementById("registerLink").addEventListener("click", function () {
    if (window.innerWidth < 800) {
        document.getElementById("signUp").style.display = 'block';
        document.getElementById("login").style.display = 'none';
    }
    else {
        if(window.innerWidth==1115){
            document.getElementById("overlay").style.transform = 'translate(470px, -25px)';
        }
        else
        document.getElementById("overlay").style.transform = 'translate(550px, -25px)';
    }
})
document.getElementById("loginLink").addEventListener("click", function () {
    if (window.innerWidth < 600) {
        document.getElementById("login").style.display = 'block';
        document.getElementById("signUp").style.display = 'none';
    }
    else {
        document.getElementById("overlay").style.transform = 'translate(0px , -25px)';
    }
})
const loader=document.querySelector('.load');
const main=document.querySelector('.main');
function inIt(){
    setTimeout(()=>{
        loader.style.display ='none';
        main.style.display ='flex';
        setTimeout(()=>(main.style.opacity=1),50);
    },2000);
}
inIt();
// function changeImage(){
//     setTimeout(()=>{
//         document.getElementById('overlay').innerHTML=' <img src="img/Home.png" class="im" alt="">'
//     },4000);
// }
// changeImage();
document.getElementById("lin").addEventListener("click", function () {
       window.open("index.html");

})

const pass= document.getElementById('password2');
 const toggle=document.getElementById('toggle2');
document.getElementById('toggle2').addEventListener('click',showHide);
function showHide() {
if(pass.type=='password'){
    pass.setAttribute('type','text');
   toggle.classList.add('hide');

}
else {
    pass.setAttribute('type','password');
    toggle.classList.remove('hide')
}

}


