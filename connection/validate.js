const form = document.getElementById('register')
const email = document.getElementById('email')
const password = document.getElementById('password')
const conpassword = document.getElementById('conpassword')
const error = document.getElementById('error')
const error2 = document.getElementById('error2')

form.addEventListener('submit', (e) => {

    if (password.value.length < 6) {
        error.innerText = 'Pass must be at least 6 characters'
        e.preventDefault()
    } else if (password.value == '123456') {
        error.innerText = 'Very Common Password'
        e.preventDefault()
    } else if (password.value === "password" || password.value === "Password") {
        error.innerText = 'Pass can not be Password or password'
        e.preventDefault()
    } else if (conpassword.value != password.value) {
        error2.innerText = 'Pasword did not match'
        e.preventDefault()
    }
})