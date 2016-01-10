module.exports = {
	// Copy the theme to a versioned release directory
	main: {
		src:  [
			'**',
			'!**/.*',
			'!**/readme.md',
			'!node_modules/**',
			'!vendor/**',
			'!tests/**',
			'!release/**',
			'!assets/css/sass/**',
			'!assets/css/src/**',
			'!assetsjs/src/**',
			'!images/src/**',
			'!bootstrap.php',
			'!bower.json',
			'!composer.json',
			'!composer.lock',
			'!Gruntfile.js',
			'!package.json',
			'!phpunit.xml',
			'!phpunit.xml.dist'
		],
		dest: 'release/<%= pkg.version %>/'
	}
};
