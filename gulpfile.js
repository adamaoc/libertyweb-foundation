var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var livereload = require('gulp-livereload');

gulp.task('sass', function () {
    gulp.src('src/styles/**/*.scss')
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('dist/styles'))
        .pipe(livereload());
});

gulp.task('watch', function() {
	livereload.listen();
	// livereload.listen({ basePath: 'dist' });

    gulp.watch(['src/**/*.*'], ['default']);
});
gulp.task('default',['sass']);
