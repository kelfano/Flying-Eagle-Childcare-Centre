
var gulp = require('gulp');
var babel = require('gulp-babel');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var rename = require('gulp-rename');
var cssnano = require('gulp-cssnano');
var uglify = require('gulp-uglify');
var eslint = require('gulp-eslint');
var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'expanded'
};

gulp.task('sass', function () {
  return gulp
    .src("./sass/style.scss")
    .pipe(sass(sassOptions).on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(cssnano())
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('./build/css'));
});

gulp.task('scripts', ['lint'], function () {
    gulp.src('./js/*.js')
        .pipe(uglify())
        .pipe(rename({
            extname: '.min.js'
        }))
        .pipe(gulp.dest('./build/js'))
});

gulp.task('lint', function () {
    return gulp.src(['./js/*.js'])
        .pipe(eslint())
        .pipe(eslint.format())
        .pipe(eslint.failAfterError());
});


//Added browserSync
gulp.task('browser-sync', function () {
    var files = [
        './build/css/*.css',
        './build/js/*.js',
        './*.php',
        './**/*.php',
    ];

    browserSync.init(files, {
        proxy: 'localhost:80/puiying-childcare',
    });

    gulp.watch(files).on('change', browserSync.reload);
});

gulp.task('watch', function(){
  gulp.watch('./sass/**/*.scss', ['sass']);
  gulp.watch('./js/**/*.js', ['scripts']);
})

gulp.task('default', ['watch','browser-sync']);