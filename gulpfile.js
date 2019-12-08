var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    rename       = require('gulp-rename')
    cleancss     = require('gulp-clean-css');

gulp.task('sass', function () {
    return gulp.src('./sass/**/*.sass')
                .pipe(sass().on('error', sass.logError))
                .pipe(autoprefixer({browsers: ['last 3 versions'], cascade: false}))
                .pipe(cleancss())
                .pipe(rename ({suffix: '.min'}))
                .pipe(gulp.dest('./css'));
});



 

  
 
