var path = require("path");
var ExtractTextPlugin = require("extract-text-webpack-plugin");
var webpack = require("webpack");
var BrowserSyncPlugin = require('browser-sync-webpack-plugin')
module.exports = {
  entry: {
    app: "./js/main.js"
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ["env"]
            // plugins: [require('babel-plugin-transform-object-rest-spread')]
          }
        }
      },
      {
        test: /\.css$/,
        use: ExtractTextPlugin.extract({
          fallback: "style-loader",
          use: "css-loader?importLoaders=1!postcss-loader"
        })
      }
    ]
  },

  output: {
    path: path.join(__dirname, "./../dist"),
    filename: "[name].bundle.js"
  },

  resolve: {
    modules: [path.resolve(__dirname, "src"), "node_modules"]
  },

  plugins: [
    new ExtractTextPlugin("main.css"),
    new webpack.ProvidePlugin({
      $: "jquery",
      jQuery: "jquery"
    }),
    new BrowserSyncPlugin({
      // browse to http://localhost:3000/ during development,
      // ./public directory is being served
      host: "localhost",
      port: 3000,
      files: ['../dist/main.css', '../dist/app.bundle.js', '../*.php', '../template-parts/*.php', '../inc/*.php'],
      proxy: 'http://www.pixformance.dev/',
      notify: false
    })
  ],
  watchOptions: {
    watch: true
  }
};
