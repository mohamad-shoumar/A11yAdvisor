const mix = require("laravel-mix");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");

mix.browserSync({ proxy: "http://127.0.0.1:8000" });
mix.postCss("/public/css/app.css", "public/css").webpackConfig({
  plugins: [
    new BrowserSyncPlugin({
      open: false,
    }),
  ],
});
