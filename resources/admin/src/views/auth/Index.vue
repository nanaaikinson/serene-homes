<template>
  <div class="auth-wrapper">
    <div class="box">
      <div class="card-body">
        <div class="formMsg"></div>

        <form @submit.prevent="login">
          <div class="form-group">
            <label for="email">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              class="form-control"
              v-model.trim="form.email"
              required
            />
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              class="form-control"
              v-model.trim="form.password"
              required
            />
          </div>

          <div class="form-group">
            <router-link to="/">I forgot my password</router-link>
          </div>

          <div class="form-group">
            <button class="btn btn-dark px-5" id="loginBtn">Log in</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Login",
  data() {
    return {
      form: {
        email: "",
        password: ""
      }
    };
  },
  methods: {
    login(e) {
      const btn = document.querySelector("#loginBtn");
      const formMsg = document.querySelector(".formMsg");

      formMsg.innerHTML = "";
      Helpers.AddLoading(btn);

      Axios.post("/api/auth/login", this.form)
        .then(response => {
          Helpers.RemoveLoading(btn);
          const res = response.data;
          //TODO: Add data to state
          localStorage.setItem("serene_token", res.data.token);

          this.$router.replace({ name: "Dashboard" });
        })
        .catch(err => {
          Helpers.RemoveLoading(btn);
          const { status, data } = err.response;
          let errorBag = "";

          if (status === 400) {
            data.errors.forEach(el => {
              errorBag += `<span class="d-block">${el}</span>`;
            });
          } else {
            errorBag = data.message;
          }

          formMsg.innerHTML = `<div class="alert alert-danger">${errorBag}</div>`;
          setTimeout(() => {
            formMsg.innerHTML = "";
          }, 2000);
        });
    }
  }
};
</script>
