import { tns } from "tiny-slider/src/tiny-slider";
import GLightbox from "glightbox";
import "glightbox/dist/css/glightbox.min.css";

document.addEventListener("DOMContentLoaded", function(e) {
  const propertySlider = tns({
    container: "#property-slider",
    // mode: "gallery",
    //nav: false,
    items: 1,
    navAsThumbnails: true,
    //mouseDrag: true,
    slideBy: "page",
    swipeAngle: false,
    controlsContainer: "#property-slider-controls",
    navContainer: "#property-slider-thumbnails"
  });

  const lightbox = GLightbox({
    selector: ".glightbox",
    touchNavigation: true
  });
});
