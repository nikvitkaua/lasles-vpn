const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const rename = require("gulp-rename");
const browserSync = require("browser-sync");
const ttf2woff2 = require('gulp-ttf2woff2');

gulp.task("styles", function () {
  return gulp
    .src('assets/scss/**/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(rename({ suffix: ".min", prefix: "" }))
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.stream());
});

function fonts() {
  return gulp.src(['assets/fonts/*.ttf'])
  .pipe(ttf2woff2())
  .pipe(gulp.dest('assets/fonts/'));
}

exports.fonts = fonts;

gulp.task("watch", function () {
  gulp.watch("assets/scss/**/*.+(scss|sass)", gulp.parallel("styles"));
});

gulp.task("default", gulp.parallel("watch", "styles"));