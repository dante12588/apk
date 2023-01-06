'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const watch = require('gulp-watch');

gulp.task('css', function(){
    return gulp.src('scss/style.scss')
    .pipe( sass() )
    .pipe( gulp.dest('css') );
})

gulp.task('watch', function(){
    gulp.watch('scss/**/*.scss', gulp.series('css'));
})

gulp.task('default', gulp.parallel('css', 'watch'));