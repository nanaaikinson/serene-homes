<template>
  <tiny-slider :mouse-drag="true" :loop="false" items="1" gutter="0">
    <div v-for="(slider, i) in  images" :key="i">
      <img :src="slider" alt />
    </div>
  </tiny-slider>
</template>

<script>
import "tiny-slider/src/tiny-slider.scss";
import VueTinySlider from "vue-tiny-slider";

export default {
  name: "PropertySlider",
  components: {
    "tiny-slider": VueTinySlider
  },
  data() {
    return {
      images: [
        require("@img/property-1.jpg"),
        require("@img/property-2.jpg"),
        require("@img/property-3.jpg")
      ]
    };
  }
};
</script>