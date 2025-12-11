const form = document.querySelector(".form")
const inputEmail = document.getElementById("email")
const inputPassword = document.getElementById("password")

form.addEventListener("submit", (event) => {
  event.preventDefault()

  const savedEmail = localStorage.getItem("userEmail")
  const savedPassword = localStorage.getItem("userPassword")

  if (inputEmail.value.trim() === savedEmail && inputPassword.value === savedPassword) {
    alert("Inicio de sesión exitoso")
    window.location.href = "dashboard.html" // o la página a la que quieras entrar
  } else {
    alert("Correo o contraseña incorrectos")
  }
})
