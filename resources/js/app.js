require("./bootstrap");

const blackHole = document.querySelectorAll(".blackhole");
blackHole.forEach((singleForm) => {
  singleForm.addEventListener("submit", function (event) {
    event.preventDefault(); //acchiappo l'invio del form
    userConfirm = window.confirm(
      `Are You Sure To Delate ${this.getAttribute("car-numero-telaio")}`
    );
    if (userConfirm) {
      this.submit();
    }
  });
});
