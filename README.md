# WordPress site boilerplate
WP setup with custom directory structure. There is also WP install scripts which downloads latest WP version

## Directory structure

- `./app/themes` Themes directory
- `./app/plugins` Plugins directory
- `./uploads` Uploads directory
- `./wp` WordPress core files directory

## Wordpress core install script

*Note: you should have execute premission set on wp install script*

`chmod +x ./upgrade-wp.sh`

Run install script to download latest wordpress version. *(By default WP themes are not moved to `./app/themes direcotory`!)*

`./upgrade-wp.sh `


Download latest WP and copy default WP themes to ./app/themes directory

`./upgrade-wp.sh --themes`


Download only WP default themes without upgrading WP core

`./upgrade-wp.sh --onlythemes`

## Configuration
Copy `env-example.php` to `env.php`

*This file should not be commited to repository*

**You should set host name where your site is confugured at**

For example

`'host' => 'http://example.com'`

`'host' => 'http://localhost:8080'` If you run on localhost with custom port number


## Other notes
WP default directory structure is changed. Use these links to access wp-admin and admin-ajax.php 

- `http://example.com/**wp**/wp-admin`
- `http://example.com/**wp**/wp-admin/admin-ajax.php`