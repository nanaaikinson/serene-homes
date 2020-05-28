<template>
  <div class="card">
    <div class="card-body">
      <div>
        <router-link :to="{name: 'PropertyAdd'}" class="btn btn-primary px-4">New Property</router-link>
      </div>

      <div>
        <b-table></b-table>
      </div>
    </div>
  </div>
</template>

<script>
import { BTable } from "bootstrap-vue";

export default {
  name: "PropertyIndex",
  components: {
    "b-table": BTable
  },
  data() {
    return {
      properties: [],
      table: {
        columns: [],
        perPage: 10,
        currentPage: 1,
        pageOptions: [10, 20, 50, 100],
        filter: "",
        loading: true
      }
    };
  },
  methods: {
    fetchData() {}
  }
};
</script>
