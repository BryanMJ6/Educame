
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");

    emailInput.addEventListener("input", function () {
      if (emailInput.value.trim() === "") {
        emailInput.classList.remove("is-valid");
        emailInput.classList.add("is-invalid");
        document.querySelector(".error-message").style.display = "block";
        document.querySelector(".success-message").style.display = "none";
      } else {
        emailInput.classList.remove("is-invalid");
        emailInput.classList.add("is-valid");
        document.querySelector(".error-message").style.display = "none";
        document.querySelector(".success-message").style.display = "block";
      }
    });

    passwordInput.addEventListener("input", function () {
      if (passwordInput.value.trim() === "") {
        passwordInput.classList.remove("is-valid");
        passwordInput.classList.add("is-invalid");
      } else {
        passwordInput.classList.remove("is-invalid");
        passwordInput.classList.add("is-valid");
      }
    });

    form.addEventListener("submit", function (event) {
      let valid = true;

      // Validación del campo de correo electrónico
      if (emailInput.value.trim() === "") {
        valid = false;
        emailInput.classList.remove("is-valid");
        emailInput.classList.add("is-invalid");
        document.querySelector(".error-message").style.display = "block";
        document.querySelector(".success-message").style.display = "none";
      } else {
        emailInput.classList.remove("is-invalid");
        emailInput.classList.add("is-valid");
        document.querySelector(".error-message").style.display = "none";
        document.querySelector(".success-message").style.display = "block";
      }

      // Validación del campo de contraseña
      if (passwordInput.value.trim() === "") {
        valid = false;
        passwordInput.classList.remove("is-valid");
        passwordInput.classList.add("is-invalid");
      } else {
        passwordInput.classList.remove("is-invalid");
        passwordInput.classList.add("is-valid");
      }

      if (!valid) {
        event.preventDefault(); // Evita que el formulario se envíe si hay errores
      }
    });
  });
