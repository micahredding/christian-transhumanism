module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		watch: {
			sass: {
				files: ['assets/scss/**/*.{scss,sass}','assets/scss/_partials/**/*.{scss,sass}'],
				tasks: ['sass:dist']
			},
			livereload: {
				files: ['*.html', '*.php', 'assets/js/**/*.{js,json}', 'assets/css/*.css','assets/images/**/*.{png,jpg,jpeg,gif,webp,svg}'],
				options: {
					livereload: true
				}
			}
		},
		sass: {
			dist: {
				files: {
					'assets/css/screen.css': 'assets/scss/screen.scss',
					'assets/css/explore.css': 'assets/scss/explore.scss'
				}
			}
		},
		imagemin: {
	    dynamic: {
        files: [{
          expand: true,
          cwd: 'assets/images',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'assets/images'
        }]
	    }
		}
	});
	grunt.registerTask('default', ['sass:dist', 'imagemin', 'watch']);
	grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-coffee');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-watch');
};