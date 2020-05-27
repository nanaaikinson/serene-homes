<template>
  <div>
    <Header />

    <div class="container py-4">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import Header from "@/components/Header";
export default {
  name: "Layout",
  components: { Header },
  created() {
    document.body.style.paddingTop = "80px";
    document.body.style.backgroundColor = "#f9fbfd";
    // document.body.style.fontWeight = "300";
  }
};
</script>
