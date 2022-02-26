<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Steps

- git clone git@github.com:eldersoon/jwt-laravel-authentication.git
- cd jwt-laravel-authentication
- composer install
- cp .env.example .env (don't fotget to settin .env database configs)
- php artisan key:generate
- php artisan migrate
- php artisan serve 

# Endpoints

- POST /api/register - (params: { name, email, password, password_confirmation })
- POST /api/login - (params: { name, email })
- POST /api/logout
- GET /api/me

# References

- https://laravel.com/ 
- https://jwt-auth.readthedocs.io/en/develop/quick-start/
- https://www.positronx.io/laravel-jwt-authentication-tutorial-user-login-signup-api/
