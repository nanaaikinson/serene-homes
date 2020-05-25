import feather from "feather-icons";
const contactForm = document.querySelector("#contactForm");

document.addEventListener("DOMContentLoaded", function(e) {
  feather.replace();

  contactForm.addEventListener("submit", function(e) {
    e.preventDefault();
  });
});
