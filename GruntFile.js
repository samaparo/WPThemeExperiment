module.exports = function(grunt) {

  // ===========================================================================
  // CONFIGURE GRUNT ===========================================================
  // ===========================================================================
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
	connect: {
		server: {
			options: {
				port: 5000,
				base: './',
				keepalive: true,
				hostname:"0.0.0.0",
				debug: true
			}
		}
	},
	sass: {
		dist: {
			files: {
				"css/layout.css" : "css/scss/layout.scss"
			}
		}
	},
	watch: {
		css: {
			files: 'css/scss/*.scss',
			tasks: ['sass']
		}
	}

  });

  // ===========================================================================
  // LOAD GRUNT PLUGINS ========================================================
  // ===========================================================================
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
};