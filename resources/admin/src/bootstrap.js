import Axios from "axios";
import Helpers from "./helpers";
import Swal from "sweetalert2";

const token = localStorage.getItem("serene_token") || null;
if (token) Axios.defaults.headers.common.Authorization = "Bearer " + token;

window.Axios = Axios;
window.Helpers = Helpers;
window.Swal = Swal;
