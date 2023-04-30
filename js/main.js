function burgerMenu(){
    const menu = document.querySelector('#menu')
    const burger = document.querySelector('.burger')

    burger.addEventListener('click', () => {
        burger.classList.toggle('active')
    })
}


const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnAccount = document.querySelector('.account');
const iconClose = document.querySelector('.bebra');
const dopMenu = document.querySelector('.dop-ul')
const btnMenu = document.querySelector('#btn-menu')

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
})

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
})

btnAccount.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
})

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
})

btnMenu.addEventListener('click', () => {
    dopMenu.classList.add('active');
})

setInterval(function(){
    dopMenu.classList.remove('active');
}, 6000);



const searchBtn = document.querySelector('.search-btn');
const cancelBtn = document.querySelector('.cancel-btn');
const searchBox = document.querySelector('.search-box');
const searchInput = document.querySelector('.inp');
const headerMenu = document.querySelector('.ul-menu')


searchBtn.onclick = () => {
    searchBox.classList.add('active');
    searchInput.classList.add('active');
    headerMenu.classList.add('nonactive');
    cancelBtn.classList.add('active');
}

cancelBtn.onclick = () => {
    cancelBtn.classList.remove('active');
    searchBox.classList.remove('active');
    searchInput.classList.remove('active');
    headerMenu.classList.remove('nonactive');
}

