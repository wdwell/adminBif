document.addEventListener("DOMContentLoaded", function () {
  const jsEnableModal = document.querySelectorAll(".jsEnableModal");
  const modalAutentificationBlur = document.querySelector(
    ".modalAutentificationBlur"
  );
  const modalAutentificationExit = document.querySelector(
    ".modalAutentificationExit"
  );
  const modalAutentification = document.querySelector(".modalAutentification");
  jsEnableModal.forEach((element) => {
    element.addEventListener("click", () => {
      modalAutentificationBlur.style.display = "block";
      modalAutentification.style.display = "block";
    });
  });
  modalAutentificationBlur.addEventListener("click", () => {
    modalAutentificationBlur.style.display = "none";
    modalAutentification.style.display = "none";
  });
  modalAutentificationExit.addEventListener("click", () => {
    modalAutentificationBlur.style.display = "none";
    modalAutentification.style.display = "none";
  });

  //проверка валидности email, пароля
  const emailInput = document.getElementById("emailInput");
  const emailError = document.getElementById("emailError");
  const passwordInput = document.getElementById("passwordInput");
  const passwordError = document.getElementById("passwordError");
  const submitButton = document.getElementById("submitButton");

  submitButton.addEventListener("click", validateForm);
  emailInput.addEventListener("click", hideEmailError);
  passwordInput.addEventListener("click", hidePasswordError);

  function validateForm() {
    const email = emailInput.value;
    const password = passwordInput.value;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]+$/;
    const passwordLength = password.length;

    if (emailPattern.test(email)) {
      emailError.style.opacity = "0";
    } else {
      emailError.style.opacity = "1";
    }

    if (passwordPattern.test(password) && passwordLength >= 6) {
      passwordError.style.opacity = "0";
    } else {
      passwordError.style.opacity = "1";
    }
  }

  function hideEmailError() {
    emailError.style.opacity = "0";
  }

  function hidePasswordError() {
    passwordError.style.opacity = "0";
  }
});
