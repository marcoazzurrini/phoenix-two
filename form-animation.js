const aboutBox = document.getElementById('about-box');
const formBox = document.querySelector('.form-box');
const formBtn = document.getElementById('form-btn');
const contactBtn = document.getElementById('contact-btn');

formBtn.addEventListener('click', switchToForm);
contactBtn.addEventListener('click', switchToContact);

function switchToForm() {
    formBox.classList.add('show');
    aboutBox.classList.add('hide');
}

function switchToContact() {
    formBox.classList.remove('show');

    setTimeout(() => {
        aboutBox.classList.remove('hide');
    }, 600);
}