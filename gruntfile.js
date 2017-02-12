module.exports = function(grunt){
	grunt.initConfig({
		concat:{
			dist:{
				src:["components/scripts/*.js"],
				dest: "builds/development/js/script.js"
			}
		}	
	});
	grunt.loadNpmTasks('grunt-contrib-concat');
};