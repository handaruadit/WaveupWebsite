const form = document.getElementById('form');
const firstname_input = document.getElementById('firstname-input');
const lastname_input = document.getElementById('lastname-input');
const email_input = document.getElementById('email-input');
const password_input = document.getElementById('password-input');
const repeat_password_input = document.getElementById('repeat-password-input');
const error_message = document.getElementById('error-message');


form.addEventListener('submit', (e) => {
    
    error_message.innerText = "";
    document.querySelectorAll('.incorrect').forEach(el => el.classList.remove('incorrect'));

   
    let errors = [];

    
    errors = getSignupFormErrors(
        firstname_input.value,
        lastname_input.value,
        email_input.value,
        password_input.value,
        repeat_password_input.value
    );

    
    if (errors.length > 0) {
        e.preventDefault(); // cegah submit
        error_message.innerText = errors.join(". "); // tampilkan error
        error_message.style.color = "red";
    }
});

// Fungsi validasi signup
function getSignupFormErrors(firstname, lastname, email, password, repeatPassword) {
    let errors = [];

    if (firstname === '' || firstname == null) {
        errors.push('First name is required!')
        firstname_input.parentElement.classList.add('incorrect')
    }

    if (lastname === '' || lastname == null) {
        errors.push('Last name is required!')
        lastname_input.parentElement.classList.add('incorrect')
    }

    if (email === '' || email == null) {
        errors.push('Email is required!')
        email_input.parentElement.classList.add('incorrect')
    } 
    else if (!isValidEmail(email)) {
        errors.push('Email format is invalid!')
        email_input.parentElement.classList.add('incorrect')
    }

    if (password === '' || password == null) {
        errors.push('Password is required!')
        password_input.parentElement.classList.add('incorrect')
    } 
    else if (password.length < 6) {
        errors.push('Password must be at least 6 characters!')
        password_input.parentElement.classList.add('incorrect')
    }

    if (repeatPassword === '' || repeatPassword == null) {
        errors.push('Please re-type your password!')
        repeat_password_input.parentElement.classList.add('incorrect')
    } 
    else if (password !== repeatPassword) {
        errors.push('Passwords do not match!')
        repeat_password_input.parentElement.classList.add('incorrect')
    }

    if (password !==repeatPassword){
        errors.push('Password Does Not Match Repeated Password!!')
        password_input.parentElement.classList.add('Incorrect')
        repeat_password_input.parentElement.classList.add('Incorrect')
    }
    return errors;
}

// Fungsi bantu untuk cek format email
function isValidEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}
  
const allInputs = [firstname_input, lastname_input, email_input, password_input, repeat_password_input]

allInputs.forEach(input => {
    input.addEventListener('input', ()  => {
        if(input.parentElement.classList.contains('incorrect')){
            input.parentElement.classList.remove('incorrect')
            error_message.innerText = ''
        } 
    })
})