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