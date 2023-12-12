const gulp = require('gulp');
const { src, dest, watch } = require('gulp');
const minifyJs = require('gulp-uglify');
const sourceMaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');
const minifyHtml = require('gulp-minify-html');

const jsFiles = ['./js/file.js']
const bundleJs = () => {
    return src(jsFiles)
        .pipe(sourceMaps.init())
        .pipe(minifyJs())
        .pipe(concat('script.min.js'))
        .pipe(sourceMaps.write())
        .pipe(dest('./dist/js/'));
}

const devWatch = () => {
    watch('./js/**/*.js', bundleJs);
}

exports.bundleJs = bundleJs;
exports.devWatch = devWatch;



const rename = require('gulp-rename');

gulp.task('autoprefixer', () => {
    const autoprefixer = require('autoprefixer');
    const sourcemaps = require('gulp-sourcemaps');
    const postcss = require('gulp-postcss');

    const browserslistConfig = [
        "> 0.3%",
        "last 4 versions",
        "not dead",
    ];

    return gulp.src(['./style.css', './tailwind_output.css'])
        .pipe(sourcemaps.init())
        .pipe(postcss([autoprefixer({ overrideBrowserslist: browserslistConfig })]))
        .pipe(sourcemaps.write('.'))
        .pipe(rename({ suffix: '.pre' })) // Rename the files if desired
        .pipe(gulp.dest('./dist/css/'));
});