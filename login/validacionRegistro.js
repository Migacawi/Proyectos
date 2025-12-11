const form = document.querySelector(".form")

const inputName = document.getElementById("nombre")       
const inputEmail = document.getElementById("email")
const inputPassword = document.getElementById("password")
const inputPassword2 = document.getElementById("password2")   

form.addEventListener("submit", (event) => {
  event.preventDefault()

  const regularExpressions = {
    regName: /^[A-Za-zÁÉÍÓÚáéíóúÑñ]+(?:\s[A-Za-zÁÉÍÓÚáéíóúÑñ]+)*$/,
    regEmail: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/,
    regPassword: /^(?=.*[A-Z])[A-Za-z0-9]{8,}$/
  }

  
  if (!regularExpressions.regName.test(inputName.value.trim())) {
    alert("El nombre no es válido")
    return
  }


  if (!regularExpressions.regEmail.test(inputEmail.value.trim())) {
    alert("El correo electrónico no es válido")
    return
  }

  
  if (!regularExpressions.regPassword.test(inputPassword.value)) {
    alert("La contraseña debe tener al menos 8 caracteres, mayúscula, minúscula, número.")
    return
  }

  
  if (inputPassword.value !== inputPassword2.value) {
    alert("Las contraseñas no coinciden")
    return
  }

  alert("Registro completado exitosamente")

localStorage.setItem("userEmail", inputEmail.value.trim())
  localStorage.setItem("userPassword", inputPassword.value)
  window.location.href = "login.html"

})
