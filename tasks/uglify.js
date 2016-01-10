module.exports = {
	all: {
		files: {
			'assets/js/wp-documenter.min.js': ['assets/js/wp-documenter.js']
		},
		options: {
			banner: '/*! <%= package.title %> - v<%= package.version %>\n' +
				' * <%= package.homepage %>\n' +
				' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
				' * Licensed GPLv2+' +
				' */\n',
			mangle: {
				except: ['jQuery']
			}
		}
	}
};
