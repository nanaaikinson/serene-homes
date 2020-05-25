let mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

// mix.browserSync("lusaka.test");

mix.webpackConfig({
  resolve: {
    alias: {
      "@": path.resolve(__dirname, "resources"),
      "@js": path.resolve(__dirname, "resources/dev/js"),
      "@img": path.resolve(__dirname, "resources/dev/img"),
      "@components": path.resolve(__dirname, "resources/dev/components")
    }
  }
});

mix
  .copy(
    "node_modules/tiny-slider/dist/tiny-slider.css",
    "public/css/tiny-slider.css"
  )
  .copyDirectory("resources/dev/img", "public/img")
  .js("resources/dev/js/app.js", "public/js/app.js")
  .js("resources/dev/js/home.js", "public/js/home.js")
  .js("resources/dev/js/property.js", "public/js/property.js")
  .sass("resources/dev/sass/app.scss", "public/css/app.css")
  .setPublicPath("public");
