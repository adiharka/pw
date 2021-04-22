const email = document.getElementById('email')
const username = document.getElementById('username')
const password = document.getElementById('password')
const form = document.getElementById('form')
const formBoxElement = document.getElementById('formBox-BoxMenu')

form.addEventListener('submit', (e) => {
  let messages = []

  if (password.value.length <= 8) {
    messages.push('Password must be longer than 8 characters')
  }

  if (password.value.length >= 20) {
    messages.push('Password must be less than 20 characters')
  }

  if (messages.length > 0) {
    e.preventDefault()
    formBoxElement.innerText = messages.join(', ')
  }
})