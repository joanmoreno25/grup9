// Mostrar la contraseña en los formularios de sesión y registro
const togglePassword1 = document.getElementById("togglePassword1");
const passwordField1 = document.getElementById("passwd");

togglePassword1.addEventListener("click", function(e) {
e.preventDefault(); // Evitar que el enlace recargue la página

if (passwordField1.type === "password") {
    passwordField1.type = "text";
    togglePassword1.innerHTML = '<img src="imagenes/ocultar.png" alt="icono mostrar" class="pe-2">Ocultar'; // Cambiar texto y el icono
} else {
    passwordField1.type = "password";
    togglePassword1.innerHTML = '<img src="imagenes/ocultar.png" alt="icono ocultar" class="pe-2">Mostrar'; // Cambiar texto y el icono
}
});

// Mostrar/ocultar la contraseña repetida
const togglePassword2 = document.getElementById("togglePassword2");
const passwordField2 = document.getElementById("repetir_passwd");

togglePassword2.addEventListener("click", function(e) {
e.preventDefault(); // Evitar que el enlace recargue la página

if (passwordField2.type === "password") {
    passwordField2.type = "text";
    togglePassword2.innerHTML = '<img src="imagenes/ocultar.png" alt="icono mostrar" class="pe-2">Ocultar'; // Cambiar texto y el icono
} else {
    passwordField2.type = "password";
    togglePassword2.innerHTML = '<img src="imagenes/ocultar.png" alt="icono ocultar" class="pe-2">Mostrar'; // Cambiar texto y el icono
}
});
