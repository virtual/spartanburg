let mix = require('laravel-mix');
let build = require('./tasks/build.js');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss']),
    ]
});

 

mix.js('source/_assets/js/main.js', 'js')
  // .js('source/_assets/js/scripts/bootstrap.min.js', 'js')
  // .js('source/_assets/js/scripts/modernizr-2.6.2-respond-1.1.0.min.js', 'js')
  // .js('source/_assets/js/scripts/functions.js', 'js')
  .js('source/_assets/js/prettyPhoto-app.js', 'js')
  .sass('source/_assets/sass/main.scss', 'css/main.css')
  .sass('source/_assets/sass/prettyPhoto.scss', 'css/prettyPhoto.css')
  // .sass('source/_assets/sass/slick.scss', 'css/slick.css')
  // .sass('source/_assets/sass/slick-theme.scss', 'css/slick-theme.css')
  // .sass('source/_assets/sass/bootstrap.scss', 'css/bootstrap.css')
  .options({ processCssUrls: false })
//   .postCss('source/assets/css/main.css', 'css/main-support.css', [
//     require('autoprefixer')({
//         browsers: ['> .001%'],
//         grid: false
//     })
// ])
    .version();