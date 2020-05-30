import feather from "feather-icons";
const contactForm = document.querySelector("#contactForm");
const contactHeader = document.querySelector("#contactHeader");
const sliderContactBtn = document.querySelector("#sliderContactBtn");
const contactSection = document.querySelector(".site-contact");

document.addEventListener("DOMContentLoaded", function(e) {
  feather.replace();

  contactHeader.onclick = function(e) {
    contactSection.scrollIntoView({
      behavior: "smooth"
    });
  };

  sliderContactBtn.onclick = function(e) {
    contactSection.scrollIntoView({
      behavior: "smooth"
    });
  };

  contactForm.addEventListener("submit", function(e) {
    e.preventDefault();
  });
});
