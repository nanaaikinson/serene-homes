import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../views/auth/Index.vue";
import Layout from "../Layout.vue";
// import PropertyIndex from "../views/property/Index.vue";
// import PropertyAdd from "../views/property/Add.vue";
// import PropertyEdit from "../views/property/Edit.vue";

Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home
  },
  {
    path: "/",
    component: Layout,
    children: [
      {
        path: "dashboard",
        name: "Dashboard",
        component: () => import("@/views/dashboard/Index.vue")
      },
      {
        path: "properties",
        name: "Properties",
        component: () => import("@/views/property/Index.vue")
      },
      {
        path: "property",
        name: "PropertyAdd",
        component: () => import("@/views/property/Add.vue")
      },
      {
        path: "property/:mask",
        name: "PropertyEdit",
        component: () => import("@/views/property/Edit.vue")
      }
    ]
  }
];

const router = new VueRouter({
  mode: "history",
  base:
    process.env.NODE_ENV === "production" ? "/admin/" : process.env.BASE_URL,
  routes
});

export default router;
