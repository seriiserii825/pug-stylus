'use strict';

let gulp = require('gulp'),
	//css
	stylus = require('gulp-stylus'),
	sass = require('gulp-sass'),
	autoprefixer = require("gulp-autoprefixer"),
	sourcemaps = require('gulp-sourcemaps'),
	wait = require('gulp-wait'),
	notify = require("gulp-notify"),
	plumber = require("gulp-plumber"),
	browserSync = require('browser-sync').create(),
	replace = require('gulp-replace'),
	pug = require('gulp-pug'),
	rename = require('gulp-rename');

let siteUrl = 'http://pug-stylus.host1670806.hostland.pro';
let siteDir = '../bs-pug/';

gulp.task('stylus', function () {
	return gulp.src(siteDir + 'assets/css/my.styl')
		.pipe(sourcemaps.init())
		.pipe(stylus())
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(siteDir + 'assets/css/'));
});

gulp.task("watch", function () {
	gulp.watch(siteDir + "**/*.styl").on('change', gulp.series('stylus'));
	gulp.watch(siteDir + "**/*.css").on('change', browserSync.reload);
	gulp.watch(siteDir + "**/*.php").on('change', browserSync.reload);
});


gulp.task('browser-sync', function () {
	browserSync.init({
		proxy: {
			target: siteUrl,
			ws: true
		},
		reloadDelay: 2000
	});
});

gulp.task('default', gulp.parallel('stylus', 'watch', 'browser-sync'));
