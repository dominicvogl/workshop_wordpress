// Gulp Modules
gulp = require('gulp');
var requireDir = require('require-dir');

// Base Configuration for gulp modules
var config = [
   environment = 'fm',
   sourcePath = 'src/',
   destinationPath = 'dist/',

   // JS Filelist for concatinating
   jsFilesApp = [

      // Jquery
      sourcePath + 'bower-components/jquery/dist/jquery.js',

      // Fastclick
      sourcePath + 'bower-components/fastclick/lib/fastclick.js',

      // Feature.JS
      sourcePath + 'bower-components/feature.js/feature.js',

      // Macy.js
      sourcePath + 'bower-components/macy/dist/macy.js',

      // Simple state manager
      // sourcePath + 'bower-components/SimpleStateManager/src/ssm.js',

      // Slick
      sourcePath + 'bower-components/slick-carousel/slick/slick.js',
      sourcePath + 'js/slider/slick.js'

   ]
];

// Include other gulp modules
requireDir(sourcePath + '/gulp');

var defaultTasks = [
   'styles',
   'scripts',
   'watch'
];

gulp.task('default', defaultTasks);