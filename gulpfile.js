const gulp = require('gulp')
const { src, series, parallel, dest, watch } = require('gulp')

const autoprefixer = require('autoprefixer')
const browsersync = require('browser-sync').create()
const concat = require('gulp-concat')
const cssnano = require('cssnano')
const imagemin = require('gulp-imagemin')
const postcss = require('gulp-postcss')
const sourcemaps = require('gulp-sourcemaps')
const terser = require('gulp-terser')

// Css Front Task
function cssFrontTask() {
    return src('public/css/front/front.css')
        .pipe(sourcemaps.init())
        .pipe(concat('front.min.css'))
        .pipe(postcss([autoprefixer(), cssnano()])) //not all plugins work with postcss only the ones mentioned in their documentation
        .pipe(sourcemaps.write('.'))
        .pipe(dest('public/css/front'))
}

// Css Back Task
function cssBackTask() {
    return src('resources/assets/back/css/*.css').pipe(dest('public/css/back'))
}

// JavaScript Front Task
function jsFrontTask() {
    return src([
        // Front/build/assets/js
        // 'resources/assets/front/js/theme.min.js',
        // 'resources/assets/front/js/hs.autocomplete-local-search.js',
        // 'resources/assets/front/js/theme-custom.js'

        // Front/src/assets/js
        'resources/assets/front/js/bis/hs.core.js',
        'resources/assets/front/js/bis/hs.autocomplete-local-search.js',
        'resources/assets/front/js/bis/hs.chartjs.js',
        'resources/assets/front/js/bis/hs.circles.js',
        'resources/assets/front/js/bis/hs.clipboard.js',
        'resources/assets/front/js/bis/hs.countdown.js',
        'resources/assets/front/js/bis/hs.cubeportfolio.js',
        'resources/assets/front/js/bis/hs.dropzone.js',
        'resources/assets/front/js/bis/hs.fancybox.js',
        'resources/assets/front/js/bis/hs.flatpickr.js',
        'resources/assets/front/js/bis/hs.ion-range-slider.js',
        'resources/assets/front/js/bis/hs.leaflet.js',
        'resources/assets/front/js/bis/hs.mask.js',
        'resources/assets/front/js/bis/hs.quill.js',
        'resources/assets/front/js/bis/hs.select2.js',
        'resources/assets/front/js/bis/hs.slick-carousel.js',
        'resources/assets/front/js/bis/hs.tagify.js',
        'resources/assets/front/js/bis/hs.typed.js',
        'resources/assets/front/js/bis/hs.validation.js',
        'resources/assets/front/js/theme-custom.js',
    ])
        .pipe(sourcemaps.init())
        .pipe(concat('front.min.js'))
        .pipe(terser())
        .pipe(sourcemaps.write('.'))
        .pipe(dest('public/js/front'))
}

// JavaScript Back Task
function jsBackTask() {
    return src('resources/assets/back/js/*.js').pipe(dest('public/js/back'))
}

// Image Task
function imgTask() {
    return (
        src('public/img/original/*')
            .pipe(imagemin())
            // .pipe(imagemin([
            //     imagemin.gifsicle({interlaced: true}),
            //     imagemin.mozjpeg({quality: 75, progressive: true}),
            //     imagemin.optipng({optimizationLevel: 5}),
            //     imagemin.svgo({
            //         plugins: [
            //             {removeViewBox: true},
            //             {cleanupIDs: false}
            //         ]
            //     })
            // ]))
            .pipe(gulp.dest('public/img/optimized'))
    )
}

// Browser-sync Task
function browsersyncServe(cb) {
    browsersync.init({
        server: {
            baseDir: 'public',
        },
    })
    cb()
}

function browsersyncReload(cb) {
    browsersync.reload()
    cb()
}

// function watchTask() {
//     watch([cssPath, jsPath, browsersyncReload], { interval: 1000 }, parallel(cssFront, jsTask));
// }

// Watch Task
function watchTask() {
    watch('resources/views/**/*.php', browsersyncReload)
    watch(
        [
            'resources/assets/front/scss/**/*.scss',
            'resources/assets/front/css/**/*.css',
            'resources/assets/front/js/**/*.js',
        ],
        series(jsTask, browsersyncReload),
    )
}

exports.cssFrontTask = cssFrontTask
exports.cssBackTask = cssBackTask
exports.jsFrontTask = jsFrontTask
exports.jsBackTask = jsBackTask
exports.imgTask = imgTask
exports.browsersync = browsersyncServe

exports.default = series(cssFrontTask, cssBackTask, jsFrontTask, jsBackTask)
exports.watchTask = series(parallel(cssFrontTask, cssBackTask, jsFrontTask, jsBackTask, imgTask), watchTask)
