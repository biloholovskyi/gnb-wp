const gulp = require('gulp');
const {init, reload, stream} = require('browser-sync').create();
const sass = require('gulp-sass')(require('sass'));
const webpack = require('webpack-stream');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');

const webConfig = {
  mode: 'production',
  output: {
    filename: 'index.js'
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        loader: 'babel-loader',
        exclude: '/node_modules/'
      },
      {
        test: /\.css$/i,
        use: ['style-loader', 'css-loader'],
      }
    ]
  }
};

gulp.task('default', function () {
  init({
    // server: {
    //     baseDir: "./"
    // }
    proxy: 'http://localhost:8888/gnb-wp',
    browser: "google chrome",
  });
  gulp.watch("**/*.php").on('change', reload);
  gulp.watch("sass/**/*.scss", function () {
    return gulp.src("sass/**/*.scss")
      .pipe(sass())
      .pipe(autoprefixer({
        overrideBrowserslist: ['> 0.1%'],
        cascade: false
      }))
      .pipe(cleanCSS({
        level: 2
      }))
      .pipe(gulp.dest("css"))
      .pipe(stream());
  });
  gulp.watch("js/**/*.js", function () {
    return gulp.src("js/index.js")
      .pipe(webpack(webConfig))
      .pipe(gulp.dest("buildjs"))
      .pipe(stream());
  });
});