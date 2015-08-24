module.exports = function (grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                files: {
                    'css/base-sass.css': 'css/sass/base-sass.scss'
                }
            }
        },
        watch: {
            css: {
                files: 'css/sass/*.scss',
                tasks: ['sass']
            }
        },
        browserSync: {
            dev: {
                bsFiles: {
                    src : [
                        'css/*.css'
                    ]
                },
                options: {
                    watchTask: true,
                    proxy: 'tna-website-dev:8888'
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browser-sync');

    // Default task(s).
    grunt.registerTask('default', ['sass', 'watch']);
    grunt.registerTask('bSync', ['browserSync', 'watch']);

};