# WordPress site boilerplate
WP setup with custom directory structure. There is also WP install scripts which downloads latest WP version

## Directory structure

Themes and plugins lives here
`./app/themes`
`./app/plugins`

Uploads directory
`./uploads`

WordPress core files lives here

`./wp`

## Wordpress core install script

*Note: you should have execute premission set on wp install script*

`chmod +x ./upgrade-wp.sh`

Run install script to download latest wordpress version.

*(By default WP themes are not moved to `./app/themes direcotory`!)*

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

`http://example.com`

`http://localhost:8080` If you run on localhost with custom port number


## Other notes
WordPress core in this configuration is moved to ./mv direcotory. This changes wp-admin url

`http://example.com/wp/wp-admin`

`http://example.com/wp/wp-admin/admin-ajax.php`