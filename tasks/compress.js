module.exports = {
	main: {
		options: {
			mode: 'zip',
			archive: './release/wpd.<%= pkg.version %>.zip'
		},
		expand: true,
		cwd: 'release/<%= pkg.version %>/',
		src: ['**/*'],
		dest: 'wpd/'
	}
};
