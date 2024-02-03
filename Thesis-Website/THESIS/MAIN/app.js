let intro = document.querySelector('.intro');
let logo = document.querySelector('.logo-header');
let logoSpan = document.querySelectorAll('.logo');

// transition
var formBx2 = document.querySelector('.formBx');
var container = document.querySelector('.container');

setTimeout(function() {
    formBx2.classList.add('show');
    container.classList.add('show');
},  750);

// intro animation
window.addEventListener('DOMContentLoaded', () => {

    setTimeout(() => {

        logoSpan.forEach((span, idx) => {

            setTimeout(() => {
                span.classList.add('active');
            }, (idx + 1) * 400)

        });

        setTimeout(() => {
            logoSpan.forEach((span, idx) => {

                setTimeout(() => {
                    span.classList.remove('active');
                    span.classList.add('fade');
                }, (idx + 1) * 50)

            })
        }, 2000);

        setTimeout(() => {
            intro.style.top = '-100vh';
        }, 2300)

    })
});
// login slide
const signupBtn = document.querySelector('.signupBtn');
const signinBtn = document.querySelector('.signinBtn');
const formBx1 = document.querySelector('.formBx');
const body =  document.querySelector('body');

signupBtn.onclick = function() {
    formBx1.classList.add('active');
    body.classList.add('active');
}
signinBtn.onclick = function() {
    formBx1.classList.remove('active');
    body.classList.remove('active');
}
