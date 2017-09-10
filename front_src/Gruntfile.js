"use strict";

module.exports = function( grunt ) {
	// Definição dos arquivos js
	var filesJS = ['bower_components/modernizr/modernizr.js', 'bower_components/waves/src/js/waves.js','src/js/**/*'];
	// Definição dos arquivos css
	var fileCSS = ['bower_components/normalize-css/normalize.css', 'src/css/main.css'];

	// Load all tasks
	require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

	grunt.initConfig({
		// Watch
		watch: {		
			css: {
				files: [ 'src/sass/**/*' ],
				tasks: [ 'sass', 'concat:css' ]
			},

			js: {
				files: 'src/js/**/*',
				tasks: [ 'concat:js' ]
			}
		},

		//SASS para CSS
	    sass: {
	        options: {
	            sourceMap: true
	        },
	        dist: {
	            files: {
	                'src/css/main.css': 'src/sass/main.scss'
	            }
	        }
	    },

		// Concateção dos arquivos CSS e JS
		concat: {
			css: {
				src: fileCSS,
				
				dest: '../dist/css/styles.combined.min.css'
			},

			js: {
				src: filesJS,

				dest: '../dist/js/scripts.combined.min.js'
			}
		},

		// Concateção e minificação dos arquivos e JS
		uglify: {
			options: {
				mangle: false
			},
			
			dist: {
				files: {
					'../dist/js/scripts.combined.min.js': filesJS
				}
			}
		},

		cssmin: {
		  target: {
		    files: [{
		      expand: true,
		      cwd: '../dist/css',
		      src: ['*.css'],
		      dest: '../dist/css',
		      ext: '.combined.min.css'
		    }]
		  }
		},

		// Otimização das imagens
		imagemin: {
		    dynamic: {
		    	files: [{
		        	expand: true,
		        	cwd: 'src/images',
		        	src: ['**/*.{png,jpg,gif}'],
		        	dest: '../dist/images'
		    	}]
		    }
		},

		cmq: {
			target:{
		      files: {
		        '../dist/css': ['../dist/css/*.css']
		      }
		    }	  
	    },

		browserSync: {
            files: {

                // Aplicando o recurso de Live Reload nos seguintes arquivos
                src : [
                	'../dist/css/styles.combined.min.css',
                	'../**/*.html',
                	'../**/*.php',
                ]

            },

            options: {

                // Integrando com a tarefa "watch"
                watchTask: true,
                proxy: "localhost:8888/portfolio",


                // Sincronizando os eventos entre os dispositívos
                ghostMode: {
                	clicks: true,
                    scroll: true,
                    links: true,
                    forms: true
                }
            }
        },

        devUpdate: {
	        main: {
	            options: {
	                updateType: 'force', //just report outdated packages 
	                reportUpdated: false, //don't report up-to-date packages 
	                semver: false, //stay within semver when updating 
	                packages: {
	                    devDependencies: true, //only check for devDependencies 
	                    dependencies: false
	                },
	                packageJson: null, //use matchdep default findup to locate package.json 
	                reportOnlyPkgs: [] //use updateType action on all packages 
	            }
	        }
	    }
	});

	// registrando tarefa default
	grunt.registerTask( 'default', [ 'browserSync', 'watch' ] );
	grunt.registerTask( 'mike', [ 'sass', 'concat:css' ] );
	grunt.registerTask( 'img', [ 'imagemin' ] );
	grunt.registerTask( 'css', [ 'cssmin' ] );
	grunt.registerTask( 'mq', [ 'cmq' ] );
	grunt.registerTask( 'update', [ 'devUpdate' ] );
	grunt.registerTask( 'dist', [ 'uglify:dist', 'concat:css', 'cmq', 'cssmin', 'imagemin' ] );
};