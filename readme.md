# My personal resume

This is a purposely simple resume built in Laravel and Vue.js to be used to showcase my development.

## Description

It is often difficult to display or share work projects due to nondisclosure agreements. Therefor, maintaining a 
development portfolio should be future-proof and always evolving like any project. This portfolio was originally built 
in Laravel version 5 and Vue version 2 in 2013 to replace my existing Wordpress portfolio. 

## Getting Started

### Dependencies

The dependencies of this project are purposefully simplified. More information can be found about the PHP dependencies in 
in the composer.json and Node dependencies in the package.json file.

* PHP version >8.1 with Composer
* laravel/framework version >10
* Node >18.17
* Laravel Mix >6.0
* Vue >2.7
* Bootstrap >4.5

### Installing

* How/where to download your program
* Any modifications needed to be made to files/folders

### Executing program

Installation of Composer and PHP are not covered here and depends of the operating system. 

#### For Development this uses Laravel Sails Docker container.
https://laravel.com/docs/10.x/sail#installation

* composer install (to install laravel and the dependencies in the composer.json file)
* ./vendor/bin/sail up -d (use d flag to background process the sail container)
* copy the .env.example to .env
* php artisan key:generate
* ./vendor/bin/sail npm install (to install the npm dependencies)
* ./vendor/bin/sail npm run prod (to run laravel-mix to compile the css and js assets)

(The site should now be available via localhost http://127.0.0.1/)

#### My production site is running on Ubuntu 22.04.3 LTS

* apt-get update 
* apt-get install nodejs npm composer php-cli php-curl php-xml
* php -v (verify at least version 8.1)
* su nameofwebuser (switch the user running nginx)
* cd /path/to/ngnix/public_html
* git clone git@github.com:jonrcable/MyResume.git (clone the repository to the root of the webserver (nginx) directory)
* composer install
* php artisan key:generate
* npm run prod

Note: Be sure to the point the document root of the nginx configuration file to the /public folder

## Help

Be sure to look in the nginx logs for any 400 level errors
* tail /var/log/nginx/error.log

For any PHP errors be sure to check the Laravel logs directly
* tail /path/to/web/root/httpdocs/storage/logs/laravel.log

Note: On some hosts the PHP error logs may be contained within the virtual hosts path.
* e.g. tail /path/to/web/root/logs/error_log

## Authors

Jonathan Cable
Live Version: https://me.joncable.com

## Version History

* 0.2
    * Update form Larval 5.8 to 10 and vue from 2.1 to 2.7
* 0.1
    * Initial Release

## License

This project is licensed under the same open-sourced software licensed under the MIT license.

## Acknowledgments

Thank you to the following project for making this portfolio work. Big shot out to Taylor Otwell for making PHP cool again.
* [laravel](https://github.com/laravel/laravel)
* [vue](https://github.com/vuejs/core)