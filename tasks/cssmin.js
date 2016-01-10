module.exports = {
	options: {
		banner: '/*! <%= package.title %> - v<%= package.version %>\n' +
			' * <%=package.homepage %>\n' +
			' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
			' * Licensed GPLv2+' +
			' */\n'
	},
	minify: {
		expand: true,

		cwd: 'assets/css/',
		src: ['wp-documenter.css', 'prism.css'],

		dest: 'assets/css/',
		ext: '.min.css'
	}
};
