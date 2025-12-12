const modal = document.getElementById("modalRecuperar");
const btnForgot = document.getElementById("forgotBtn");
const btnEnviar = document.getElementById("enviarRecuperacion");
const btnCerrar = document.getElementById("cerrarModal");
const inputCorreoRec = document.getElementById("correoRecuperar");

btnForgot.addEventListener("click", () => {
    modal.classList.remove("hidden");
});

btnCerrar.addEventListener("click", () => {
    modal.classList.add("hidden");
});

btnEnviar.addEventListener("click", () => {
    const savedEmail = localStorage.getItem("userEmail");

    if (!inputCorreoRec.value.includes("@")) {
        alert("Ingresa un correo válido.");
        return;
    }

    if (inputCorreoRec.value.trim() !== savedEmail) {
        alert("Este correo no está registrado.");
        return;
    }

    alert("Hemos enviado un enlace de recuperación a tu correo.");
    modal.classList.add("hidden");
    inputCorreoRec.value = "";
});
