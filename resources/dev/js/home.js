import { tns } from "tiny-slider/src/tiny-slider";

document.addEventListener("DOMContentLoaded", function(e) {
  tns({
    container: "#slider-container",
    items: 1,
    nav: false,
    //mode: "gallery",
    autoplay: true,
    controls: false,
    mouseDrag: true,
    slideBy: "page",
    swipeAngle: false,
    //controlsContainer: "#slider-controls-container",
    autoplayPosition: "bottom",
    autoplayButtonOutput: false,
    lazyload: true
  });
});
