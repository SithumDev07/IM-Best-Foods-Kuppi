// //* Animations
// const signup = document.querySelector('#signup')

// const main = document.querySelector('main')
// const preloader = document.querySelector('.product-preload')
// const signUpForm = document.querySelector('.login-form')
// const preloaderGreen = document.querySelector('.product-preload-green')

// //* Button
// const signupOriginal = document.querySelector('.signup-original')
// const buttonAfterContent = document.querySelector('.back-content')

// signup.addEventListener('click', () => {

//     //* Section
//     main.classList.toggle('beforeLoadLeft')
//     main.classList.toggle('afterLoad')
    
//     preloader.classList.toggle('beforeLoad');
//     preloader.classList.toggle('afterLoad')

//     signUpForm.classList.toggle('beforeLoad')
//     signUpForm.classList.toggle('afterLoad')

//     preloaderGreen.classList.toggle('beforeLoad')
//     preloaderGreen.classList.toggle('afterLoad')

//     //* Button
//     signupOriginal.classList.toggle('button-beforeLoad')
//     signupOriginal.classList.toggle('button-afterLoad')

//     buttonAfterContent.classList.toggle('button-beforeLoad')
//     buttonAfterContent.classList.toggle('button-afterLoad')

// })

$(document).ready(function() {

    const classToggler = (element) => {
        $(element).toggleClass('beforeLoad')
        $(element).toggleClass('afterLoad')
    }
    
    const classTogglerButton = (element) => {
        $(element).toggleClass('button-beforeLoad')
        $(element).toggleClass('button-afterLoad')
    }
    
    $('#signup').click(function() {
        classToggler($('main'))
        classToggler($('.product-preload'))
        classToggler($('.product-preload-green'))
        classToggler($('.login-form'))
        
        classTogglerButton($('.signup-original'))
        classTogglerButton($('.back-content'))
    })

})

