var path = require("path");
var ExtractTextPlugin = require("extract-text-webpack-plugin");
var webpack = require("webpack");
var BrowserSyncPlugin = require('browser-sync-webpack-plugin')
var CopyWebpackPlugin = require('copy-webpack-plugin');

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
      }, {
        test: /\.(ttf|otf|eot|svg|woff(2)?)(\?[a-z0-9]+)?$/,
        use: {
          loader: 'file-loader?name=fonts/[name].[ext]'
        }
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
    new CopyWebpackPlugin([
      { from: 'favicon/**/*', to: '../dist' },
      { from: 'images/**/*', to: '../dist' },
    ]),
    new webpack.ProvidePlugin({
      $: "jquery",
      jQuery: "jquery"
    }),
    new BrowserSyncPlugin({
      // browse to http://localhost:3000/ during development,
      // ./public directory is being served
      host: "localhost",
      port: 3000,
      files: ['../dist/main.css', '../dist/app.bundle.js', '../*.php', '../template-parts/*.php', '../page-templates/*.php', '../inc/*.php'],
      proxy: 'http://www.pixformance.dev/',
      notify: false
    })
  ],
  watchOptions: {
    watch: true
  }
};
