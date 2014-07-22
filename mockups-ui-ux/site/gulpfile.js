var gulp= require('gulp');
var scss= require('gulp-ruby-sass');
var notify= require('gulp-notify');
var autoprefixer =require('gulp-autoprefixer');
// var livereload = require('gulp-livereload');

var scssDir="scss";
var cssDir="css";

gulp.task('css', function(){
	return gulp.src(scssDir + '/*.scss')
		.pipe(scss({style: 'nested'}))
		.pipe(autoprefixer("last 15 version", "> 1%", "ie 8", "ie 7"))
		.pipe(gulp.dest(cssDir))
		// .pipe(livereload())
		.pipe(notify({title:'SCSS to CSS', message:'scss compiled and compress'}));

});


gulp.task('watch',function(){
	gulp.watch(scssDir + '/**/*.scss',['css']);

});

gulp.task('default',['css','watch']);