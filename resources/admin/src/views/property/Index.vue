<template>
  <div class="card">
    <div class="card-body">
      <div>
        <router-link :to="{name: 'PropertyAdd'}" class="btn btn-primary px-4">New Property</router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PropertyIndex"
};
</script>
