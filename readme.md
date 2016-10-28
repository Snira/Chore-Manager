# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Installation guide 

1. Clone this repository from Github.
2. Copy the .env.example file to .env.
3. Install the PHP dependencies using Composer: composer install.
4. Generate a secure key using php artisan key:generate.
5. Create a database for Choremanager and enter the details in the .env file.
6. Install the database: php artisan migrate --seed. Using the --seed flag ensures that an admin user is created and the lookup tables are populated with data. Write down the password to the admin account, as it is a random string.
7. Install the NodeJS dependencies using NPM: npm install. If you haven't done so already, install the gulp package globally: npm install -g gulp.
8. Install the assets using the Gulp task runner: gulp. This creates the scripts and stylesheets and installs the icon fonts and images that are used in the application.

## Running the application

You can start a local server using the built-in PHP web server: php artisan serve. The command starts the web server and makes it available through localhost:8000.