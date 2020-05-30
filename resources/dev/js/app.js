import feather from "feather-icons";
import Swal from "sweetalert2";

const contactForm = document.querySelector("#contactForm");
const contactHeader = document.querySelector("#contactHeader");
const sliderContactBtn = document.querySelector("#sliderContactBtn");
const contactSection = document.querySelector(".site-contact");
const navbartoggler = document.querySelector(".navbar-toggler");
const sidenav = document.querySelector(".sidenav");
const sidenavOverlay = document.querySelector(".sidenav-overlay");
const sidebarNavItems = document.querySelectorAll(".sidenav-item");
const mainNavItems = document.querySelectorAll(".site-navigation .nav-item");
const propertyBoxes = document.querySelectorAll(".property-box");

document.addEventListener("DOMContentLoaded", function(e) {
  feather.replace();

  contactForm.addEventListener("submit", function(e) {
    e.preventDefault();
    const btn = document.querySelector("#contactFormBtn");

    btn.classList.add("is-loading", "is-loading-sm");
    btn.setAttribute("disabled", "");

    const formData = {
      name: contactForm.elements.contactName.value,
      email: contactForm.elements.contactEmail.value,
      message: contactForm.elements.contactMessage.value
    };

    fetch("/api/contact", {
      method: "POST",
      body: JSON.stringify(formData),
      credentials: "same-origin",
      headers: {
        "Content-Type": "application/json"
      }
    })
      .then(response => response.json())
      .then(res => {
        contactForm.reset();
        btn.classList.remove("is-loading", "is-loading-sm");
        btn.removeAttribute("disabled");

        Swal.fire(res.data.heading, res.data.sub, "success");
      })
      .catch(err => console.log(err));
  });

  contactHeader.onclick = function(e) {
    contactSection.scrollIntoView({
      behavior: "smooth"
    });
  };

  if (sliderContactBtn) {
    sliderContactBtn.onclick = function(e) {
      contactSection.scrollIntoView({
        behavior: "smooth"
      });
    };
  }

  navbartoggler.onclick = function(e) {
    sidenav.classList.add("sidenav-show");
    sidenavOverlay.classList.add("sidenav-overlay-show");
  };

  sidenavOverlay.onclick = function(e) {
    sidenav.classList.remove("sidenav-show");
    sidenavOverlay.classList.remove("sidenav-overlay-show");
  };

  for (let i = 0; i < sidebarNavItems.length; i++) {
    sidebarNavItems[i].onclick = function(e) {
      const href = this.dataset.href;
      if (href.includes("#about")) {
        window.location.href = BASE_URL + "/#about";
        return;
      }
      if (href.includes("#contact")) {
        return;
      }
      window.location.href = href;
    };
  }

  for (let i = 0; i < mainNavItems.length; i++) {
    mainNavItems[i].onclick = function(e) {
      const href = this.dataset.href;
      if (href.includes("#about")) {
        window.location.href = BASE_URL + "/#about";
        return;
      }
      if (href.includes("#contact")) {
        return;
      }
      window.location.href = href;
    };
  }

  if (propertyBoxes) {
    for (let i = 0; i < propertyBoxes.length; i++) {
      propertyBoxes[i].onclick = function(e) {
        const href = this.dataset.href;
        window.location.href = href;
      };
    }
  }
});
