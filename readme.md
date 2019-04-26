# Spartanburg Refresh 

## Development

- `cd ~/Homestead`
- `vagrant up`
- `vagrant ssh` - log in to vagrant
- `cd code/spartanburg`
- `npm run watch` or  `npm run watch-poll` - Watch and compile changes, must be done from vagrant server
- use `http://localhost:3000/` for dev

### Put on Github:

- `rm -rf docs`
- `npm run prod`
- `npm run docs`

### Autoprefixed CSS

- Uncomment lines 21-26 in webpack.mix.js (postCss)
- `npm run prod`
- Get CSS from assets/css/main-support.css
- Comment lines 21-26 in webpack.mix.js (postCss)
 
## New Dev Environments

- Install Vagrant and VirtualBox per [Laravel Homestead guide](https://laravel.com/docs/5.6/homestead)
- `cd ~/Homestead`
- `vagrant up` (and if everything's missing reload provision) 
- `npm install` or see Windows (below) if errors
- `composer install` (untested)

### Windows:

- Add site path to C:\Windows\System32\drivers\etc\hosts
- `npm install --no-bin-links` from Windows bash (or `npm update --no-bin-links` for updates)
- `sudo npm rebuild node-sass --no-bin-links` from Vagrant bash  
- Add to vagrant file: `config.vm.network :forwarded_port, guest: 3000, host: 3000, auto_correct: true` (reload prov)