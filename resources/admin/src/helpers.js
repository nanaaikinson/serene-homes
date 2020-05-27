export default {
  AddLoading(el) {
    el.classList.add("is-loading", "is-loading-sm");
    el.setAttribute("disabled", "");
  },
  RemoveLoading(el) {
    el.classList.remove("is-loading", "is-loading-sm");
    el.removeAttribute("disabled");
  }
};
