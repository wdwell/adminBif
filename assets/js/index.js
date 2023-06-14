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
});
