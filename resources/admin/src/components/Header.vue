<template>
  <div class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
      <div class="container">
        <router-link class="navbar-brand" :to="{name: 'Dashboard'}">Serene Homes</router-link>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <router-link class="nav-link" :to="{name: 'Dashboard'}">Dashboard</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" :to="{name: 'Properties'}">Properties</router-link>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
import VueFeather from "vue-feather";
export default {
  name: "Header",
  components: { feather: VueFeather }
};
</script>