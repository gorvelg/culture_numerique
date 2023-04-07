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
