//////////////////////////////////////////
// REQUIRED                             //
//////////////////////////////////////////
var gulp = require ('gulp'),
	jade = require ('pug'),
	sass = require ('gulp-sass'),
	plumber = require ('gulp-plumber');
	//autopre = require ('gulp-autoprefixer');

//////////////////////////////////////////
// Scripts Task                         //
//////////////////////////////////////////	
gulp.task('scripts', function() {
	return gulp.src('js/**/*.js')
		.pipe(gulp.dest('/build/development'));
});

//////////////////////////////////////////
// Pug Tasks                            //
//////////////////////////////////////////	
gulp.task('jade', function() {
	return gulp.src('jadefiles/**/*.jade')
		.pipe(jade())
		//.pipe(gulp.dest('build/development'));
		.pipe(gulp.dest('/jadefiles'));
});

//////////////////////////////////////////
// Sass Task                            //
//////////////////////////////////////////	
gulp.task('sass', function() {
	gulp.src('sass/app.sass')
		//.pipe(autopre())
		.pipe(plumber())
		.pipe(gulp.dest('build/css'));
});

//////////////////////////////////////////
// Scripts Task                         //
//////////////////////////////////////////	
//clear out all files and folders from build folder
//gulp.task('build:cleanfolder', function() {
//	del(['build/**'], cb);
//});

//task to create build directory for all files
//gulp.task('build:copy', ['build:cleanfolder'], function() {
//	return gulp.src('sicsemper/**/*/')
//		.pipe(dulp.dest('build/'));
//});

//task to remove unwanted build files
//gulp.task('build:remove', ['build:copy'], function(cb) {
//	del(['build/', 'build/js/(*.min.js)'],cb);
//});

//gulp.task('build', ['build:copy', 'build:remove']);

//////////////////////////////////////////
// Watch Tasks                          //
//////////////////////////////////////////	
gulp.task('watch', function() {
	gulp.watch('sicsemper/js/**/*.js', ['scripts']);
	gulp.watch('sicsemper/sass/**/*.sass', ['sass']);
	gulp.watch('sicsemper/**.*.jade', ['jade']);
});

//////////////////////////////////////////
// Default Task                         //
//////////////////////////////////////////	
gulp.task('default',['scripts','sass','jade','watch']);
//