// Menu déroulant
const collapsibles = document.querySelectorAll(".collapsible");

collapsibles.forEach((item) => {
  item.addEventListener("click", function () {
    this.classList.toggle("active");
    const content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
      this.querySelector("::after").innerHTML = "+";
    } else {
      content.style.display = "block";
      this.querySelector("::after").innerHTML = "-";
    }
  });
});
// navbar-mobile
// Je sélectionne et je stocke
// l'icône burger
const icone = document.querySelector(".navbar-mobile i");
console.log(icone);
// la DIV modal
const modal = document.querySelector(".modal");
console.log(modal);

icone.addEventListener("click", function () {
  console.log("icone cliquée");
  modal.classList.toggle("change-modal");
  icone.classList.toggle("fa-times");
});
