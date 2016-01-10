module.exports = {
	dist: {
		options: {
			processors: [
				require('autoprefixer-core')({browsers: 'last 2 versions'})
			]
		},
		files: {
			'assets/css/wp-documenter.css': [ 'assets/css/wp-documenter.css' ],
			'assets/css/prism.css': [ 'assets/css/prism.css' ]
		}
	}
};
