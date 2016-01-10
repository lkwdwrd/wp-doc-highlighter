module.exports = {
	css: ['sass', 'postcss', 'cssmin'],
	js: ['jshint', 'modulize', 'uglify'],
	default: ['css', 'js'],
	build: ['default', 'clean', 'copy', 'compress'],
	test: ['phpunit' ]
};
