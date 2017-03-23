<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Laravel PHP Framework with oAuth2.0 server ready to use

this scafold project based on [PHP OAuth 2.0 Server for Laravel] (https://github.com/lucadegasperi/oauth2-server-laravel)

- clone this project
   ``` git clone git@github.com:chjw8016/laravel5-oauth2-server.git ```.
- tell composer to download the required libraries
  ```composer update ```.
- configure database setting in ".env" file.
- then run  " ``` php artisan migrate or php artisan migrate:reset ``` " .
- run " ```php artisan db:seed ``` " to add test client and user.
- run ```php artisan vendor:publish``` to publish this package configuration.
- configure grant setting in "config/oauth2.php" file
- to test the server run   ``` php artisan serve ``` .

## Note
when using WAMP or work in linux , you need the change the project folder Owner or the folder permition ,you can use ```chmod -R 777 * ``` ( in Development ONLY )

## Choosing a Grant

OAuth 2.0 by its nature is a very flexible standard and can be adapted to work in many different scenarios. The [core specification](http://tools.ietf.org/html/rfc6749) describes four authorization grants:

* Authorization code grant
* Implicit grant
* Resource owner credentials grant
* Client credentials grant

The specification also details another grant called the _refresh token grant_.

## Authorization code grant

> To enable this grant:
> ```php
> 'grant_types' => [
>     'authorization_code' => [
>         'class' => '\League\OAuth2\Server\Grant\AuthCodeGrant',
>         'access_token_ttl' => 3600,
>         'auth_token_ttl' => 60
>     ]
> ]
> ```

## Resource owner credentials grant

> To enable this grant:
> ```php
> 'grant_types' => [
>     'password' => [
>         'class' => '\League\OAuth2\Server\Grant\PasswordGrant',
>         'callback' => '\YourAppNamespace\Verifier@verify',
>         'access_token_ttl' => 3600
>     ]
> ]
> ```

## Implicit grant

The implicit grant is similar to the authentication code grant described above. The user will be redirected in a browser to the IdP authorization server, sign in, authorize the request but instead of being returned to the client with an authentication code they are redirected with an access token straight away.

The purpose of the implicit grant is for use by clients which are not capable of keeping the client’s own credentials secret; for example a JavaScript only application.

## Client credentials grant

> To enable this grant:
> ```php
> 'grant_types' => [
>     'client_credentials' => [
>         'class' => '\League\OAuth2\Server\Grant\ClientCredentialsGrant',
>         'access_token_ttl' => 3600
>     ]
> ]
> ```

## Refresh token grant

To enable this grant:
> ```php
> 'grant_types' => [
>     'refresh_token' => [
>         'class' => '\League\OAuth2\Server\Grant\RefreshTokenGrant',
>         'access_token_ttl' => 3600,
>         'refresh_token_ttl' => 36000
>     ]
> ]
> ```
