module.exports = function(grunt) {

	// LOAD IN ALL TASKS
	require('time-grunt')(grunt);
	require('load-grunt-tasks')(grunt, { pattern: ['grunt-*'] });

	// INIT GRUNT CONFIG
	grunt.initConfig({

		// READ IN PACKAGE.JSON
		pkg: grunt.file.readJSON('package.json'),


		// #############################################################################
		// VARIABLES
		// #############################################################################
		
		dir: {
			'styles': {
				src: 		'wp-content/themes/gregfoot/src/scss',
				unprefixed: 'wp-content/themes/gregfoot/src/css',
				dist: 		'wp-content/themes/gregfoot'
			},
			'scripts': {
				src: 		'wp-content/themes/gregfoot/src/js',
				dist: 		'wp-content/themes/gregfoot/js'
			},
			'images': {
				src: 		'src/img',
				dist: 		'dist/img'
			},
			'banner': '/*' +
				'Theme Name: Greg Foot \n' +
				'Author: Tom Hewitt @tomchewitt, Sarah Hewitt @sbchewitt \n' +
				'Author URI: http://colourflood.uk \n' +
				'Version: 1.0 \n' +
				'Text Domain: gregfoot \n' +
				'*/ \n'
		},


		// #############################################################################
		// STYLES
		// #############################################################################

		// COMPASS
		compass: {
			build: {
				options: {
					banner: '<%= dir.banner %>',
					sourcemap: false,
					specify: '<%= dir.styles.src %>/bundle-noprefix.scss',
					sassDir: '<%= dir.styles.src %>',
					cssDir: '<%= dir.styles.unprefixed %>',
					environment: 'production',
					outputStyle: 'compressed'
				}
			}
		},

		// AUTOPREFIXER
		autoprefixer: {
			options: {
				browsers: ['last 2 versions', 'ie 9', 'ios 6', 'android 4'],
				map: false
			},
			files: {
				flatten: true,
				src: '<%= dir.styles.unprefixed %>/bundle-noprefix.css',
				dest: '<%= dir.styles.dist %>/style.css'
			},
		},



		// #############################################################################
		// SCRIPTS
		// #############################################################################

		// CONCAT
		concat: {
			dist: {
				src: [
					'<%= dir.scripts.src %>/vendor/*.js',
					'<%= dir.scripts.src %>/*.js'
					],
				dest: '<%= dir.scripts.dist %>/bundle.js'
			}
		},

		// UGLIFY
		uglify: {
			scripts: { // our scripts
				files: [{
					src: '<%= dir.scripts.dist %>/bundle.js',
					dest: '<%= dir.scripts.dist %>/bundle.min.js'
				}]
			}
		},


		// #############################################################################
		// IMAGES
		// #############################################################################

		imagemin: {
			src: {
				options: {
					optimizationLevel: 7,
					progressive: true,
					interlaced: true
				},
				files: [{
					expand: true,
					cwd: '<%= dir.images.src %>',
					src: '**/*.{png,jpg,gif}',
					dest: '<%= dir.images.dist %>'
				}]
			}
		},


		// #############################################################################
		// WATCH
		// #############################################################################
		
		watch: {
			css: {
				files: '<%= dir.styles.src %>/**',
				tasks: ['compass:build', 'autoprefixer:files']
			},
			js: {
				files: '<%= dir.scripts.src %>/**',
				tasks: ['concat', 'uglify:scripts']
			},
			images: {
				files: '<%= dir.images.src %>/**',
				tasks: ['newer:imagemin:src']
			}
		}
	});


	// #############################################################################
	// TASKS
	// #############################################################################
	grunt.registerTask('default', ['compass:build', 'autoprefixer', 'concat', 'uglify:scripts', 'newer:imagemin']);
	grunt.registerTask('style', ['compass:build', 'autoprefixer']);
	grunt.registerTask('script', ['concat', 'uglify:scripts']);
	grunt.registerTask('image', ['newer:imagemin']);
};
