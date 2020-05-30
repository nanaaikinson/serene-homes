module.exports = {
  devServer: {
    proxy: "http://localhost:8000"
  },
  outputDir: "../../public/assets/admin",

  publicPath:
    process.env.NODE_ENV === "production" ? "/assets/admin/" : "/admin",

  // modify the location of the generated HTML file.
  indexPath:
    process.env.NODE_ENV === "production"
      ? "../../../resources/views/pages/admin.blade.php"
      : "index.html"
};
