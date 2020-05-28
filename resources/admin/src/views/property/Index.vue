<template>
  <div class="card">
    <div class="card-body">
      <div class="mb-4">
        <router-link :to="{name: 'PropertyAdd'}" class="btn btn-primary px-4">New Property</router-link>
      </div>

      <div>
        <b-table
          bordered
          :items="properties"
          :fields="table.columns"
          :responsive="true"
          :per-page="table.perPage"
          :filter="table.filter"
          :current-page="table.currentPage"
          show-empty
          :busy="table.loading"
        >
          <template v-slot:table-busy>
            <div class="text-center text-danger my-2">
              <b-spinner class="align-middle mr-2"></b-spinner>
              <strong>Loading...</strong>
            </div>
          </template>

          <template v-slot:cell(cover_photo)="data">
            <img :src="data.item.cover_photo" alt height="70" />
          </template>

          <template v-slot:cell(actions)="data">
            <router-link
              :to="'/property/' + data.item.mask"
              class="btn btn-primary btn-sm mr-2"
            >Edit</router-link>

            <button class="btn btn-danger btn-sm" @click="deleteData(data.item.id, $event)">Delete</button>
          </template>
        </b-table>

        <b-pagination
          align="right"
          v-model="table.currentPage"
          :total-rows="totalRows"
          :per-page="table.perPage"
          aria-controls="my-table"
        ></b-pagination>
      </div>
    </div>
  </div>
</template>

<script>
import { BTable, BPagination, BSpinner } from "bootstrap-vue";
import "bootstrap-vue/dist/bootstrap-vue.css";

export default {
  name: "PropertyIndex",
  components: {
    "b-table": BTable,
    "b-pagination": BPagination,
    "b-spinner": BSpinner
  },
  data() {
    return {
      properties: [],
      table: {
        columns: [
          { label: "Cover Photo", key: "cover_photo" },
          { label: "Title", key: "title", sortable: true },
          { label: "Created At", key: "created_at", sortable: true },
          { label: "Actions", key: "actions" }
        ],
        perPage: 10,
        currentPage: 1,
        pageOptions: [10, 20, 50, 100],
        filter: "",
        loading: true
      }
    };
  },
  computed: {
    totalRows() {
      return this.properties.length;
    }
  },
  methods: {
    async fetchData() {
      const response = await Axios.get("/api/properties");
      const res = await response.data;

      this.table.loading = false;
      this.properties = res.data;
    },

    deleteData(id, e) {}
  },

  created() {
    this.fetchData();
  }
};
</script>
