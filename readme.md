<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Laravel PHP Framework with oAuth2.0 server ready to use

this scafold project based on [PHP OAuth 2.0 Server for Laravel]

- clone this project
   ``` git clone git@github.com:chjw8016/laravel5-oauth2-server.git ```.
- tell composer to download the required libraries
  ```composer update ```.
- configure database setting in ".env" file.
- then run  " ``` php artisan migrate or php artisan migrate:reset ``` " .
- run " ```php artisan db:seed ``` " to add test client and user.
- to test the server run   ``` php artisan serve ```  , then in REST Client ( eg. postman ) , make a POST request  to ( http://localhost:8000/oauth/access_token ).

## Note
when using WAMP or work in linux , you need the change the project folder Owner or the folder permition ,you can use ```chmod -R 777 * ``` ( in Development ONLY )