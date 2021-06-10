const mix = require("laravel-mix");
const clean = require("clean-webpack-plugin");
const tailwindcss = require("tailwindcss");
const glob = require("glob-all");
const purgecss = require("purgecss-webpack-plugin");
const whitelistPath = require('./build/whitelist');

// const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;

/* ==========================================================================
Config
========================================================================== */
const config = {
  siteUrl: "localhost",
  proxyUrl: "https://bbp.local/",
  port: 4444,
  openOnStart: true,
  // pathToLocalSSLCert: "bbp.local.crt",
  // pathToLocalSSLKey: "bbp.local.key",
  filesToWatch: [
    "resources/views/**/*.php",
    "resources/views/**/**/*.twig",
    "resources/assets/scss/**/**/**/*.scss",
    "resources/assets/js/**/*.js",
    "resources/assets/images/*",
    "resources/assets/js/components/**/*.vue",
    "build/tailwind.config.js"
  ]
};

/* ==========================================================================
Purge CSS Extractors
========================================================================== */
class TailwindExtractor {
  static extract(content) {
    return content.match(/[A-z0-9-:\/]+/g) || [];
  }
}

/* ==========================================================================
Create Hash for compiled assets to help with cache
========================================================================== */
function makeid(length) {
  var result = "";
  var characters = "0123456789";
  var charactersLength = characters.length;
  for (var i = 0; i < length; i++) {
    result += characters.charAt(Math.floor(Math.random() * charactersLength));
  }
  return result;
}

/* ==========================================================================
Laravel Mix Config
========================================================================== */
mix
  // handle JS files
  .setPublicPath("static")
  .js("resources/assets/js/main.js", "static/js/scripts." + makeid(8) + ".min.js")
  .disableNotifications()

  // Sass files and Tailwind CSS Config
  .sass(
    "resources/assets/scss/main.scss",
    "static/css/styles." + makeid(8) + ".min.css"
  )
  .sass(
    "resources/assets/scss/login.scss",
    "static/css/login." + makeid(8) + ".min.css"
  )
  .sass(
    "resources/assets/scss/admin.scss",
    "static/css/admin." + makeid(8) + ".min.css"
  )

  .disableNotifications()
  .options({
    processCssUrls: false,
    postCss: [tailwindcss("build/tailwind.config.js")],
    autoprefixer: {
      options: {
        browsers: ["last 10 versions"]
      }
    }
  })

  // Move images to static directory
  .copyDirectory("resources/assets/images", "static/images")

  // Move fonts to static directory
  .copyDirectory("resources/assets/fonts/*", "static/fonts")

  // BrowserSync
  .browserSync({
    proxy: config.proxyUrl,
    host: config.siteUrl,
    open: config.openOnStart,
    port: config.port,
    // https: {
    //   key: config.pathToLocalSSLKey,
    //   cert: config.pathToLocalSSLCert
    // },
    files: config.filesToWatch
  });

/* ==========================================================================
If in Production
========================================================================== */
if (!mix.inProduction()) {
  mix
    .webpackConfig({
      devtool: "source-map",
      plugins: [
        new clean(["static"])
      ]
    })
    .sourceMaps();
}

/* ==========================================================================
If not in production
========================================================================== */
if (mix.inProduction()) {
  mix.options({
    uglify: {
      uglifyOptions: {
        mangle: true,

        compress: {
          warnings: false, // Suppress uglification warnings
          pure_getters: true,
          conditionals: true,
          unused: true,
          comparisons: true,
          sequences: true,
          dead_code: true,
          evaluate: true,
          if_return: true,
          join_vars: true
        },

        output: {
          comments: false
        },

        exclude: [/\.min\.js$/gi] // skip pre-minified libs
      }
    }
  });

  // Purge CSS config
  // more examples can be found at https://gist.github.com/jack-pallot/217a5d172ffa43c8c85df2cb41b80bad
  mix.webpackConfig({
    plugins: [
      
      // new BundleAnalyzerPlugin(),
      
      new clean(["static"], { verbose: false }),
      new purgecss({
        paths: glob.sync([
          path.join(__dirname, "./**/*.php"),
          path.join(__dirname, "resources/views/**/**/*.twig"),
          path.join(__dirname, "resources/assets/js/**/*.js"),
          path.join(__dirname, "resources/assets/js/components/**/*.vue")
        ]),
        extractors: [
          {
            extractor: TailwindExtractor,
            extensions: ["twig", "php", "js", "vue"]
          }
        ],
        whitelist: whitelistPath.whitelist,
        whitelistPatterns: whitelistPath.whitelistPatterns,
        whitelistPatternsChildren: whitelistPath.whitelistPatternsChildren,
      })
    ],
    module: {
      rules: [
        {
          test: /\.scss/,
          loader: "import-glob-loader"
        }
      ]
    }
  });
}
