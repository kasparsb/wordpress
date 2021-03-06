# WordPress site boilerplate
WordPress setup with custom directory structure. There is also WordPress install scripts which downloads latest WordPress version. No need to manualy download WordPress.
This configuration implements custom directory structure. Themes, plugins and uploads directories ar moved out of wp-content directory.

## Directory structure

- `./app/themes` Themes directory
- `./app/plugins` Plugins directory
- `./uploads` Uploads directory
- `./wp` WordPress core files directory

## Wordpress core install script

Use `./upgrade-wp.sh` to download **latest** WordPress version. It can download `only core files`, `core files with default themes` or `only default themes`

> Note: Before executing WP install script, check if there is execute premission set on wp install script
```
chmod +x ./upgrade-wp.sh
```

Download latest WP version. *(By default WP themes are not moved to `./app/themes` direcotory!)*
```
./upgrade-wp.sh 
```

Download latest WP version and copy default WP themes to `./app/themes directory`
```
./upgrade-wp.sh --themes
```

Download only WP default themes without upgrading WP core
```
./upgrade-wp.sh --onlythemes
```

## Configuration
Copy `env-example.php` to `env.php`

*This file should not be commited to repository*

**You should set host name where your site is confugured at**

For example
```
'host' => 'http://example.com'
```
```
'host' => 'http://example.com:8080'
```
```
'host' => 'http://localhost:8080' If you run on localhost with custom port number
```


## Other notes
WP default directory structure is changed. Use these links to access wp-admin and admin-ajax.php 

- `http://example.com/wp/wp-admin`
- `http://example.com/wp/wp-admin/admin-ajax.php`