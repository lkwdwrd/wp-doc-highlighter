module.exports =  {
	livereload: {
		files: ['assets/css/*.css'],
		options: {
			livereload: true
		}
	},
	styles: { 
		files: ['assets/css/sass/**/*.scss'],
		tasks: ['sass', 'postcss', 'cssmin'],
		options: {
			debounceDelay: 500
		}
	},
	scripts: {
		files: ['assets/js/src/**/*.js', 'assets/js/vendor/**/*.js'],
		tasks: ['jshint', 'modulize', 'uglify'],
		options: {
			debounceDelay: 500
		}
	}
};
