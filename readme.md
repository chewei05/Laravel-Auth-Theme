# Laravel Authentication Themes

Laravel 5 authentication themes with username customization, such as AdminLTE and etc...

## Installation
Open your laravel project directory in terminal(CLI), and do the following steps.

1. Install this package
    ```
    composer require chewei05/laravel-auth-theme ^1.0.0
    ```
2. Publish login and register views
    ```
    php artisan vendor:publish --tag=theme-adminlte --force
    ```
3. Publish translations files, we provide 'en' and 'zh-TW' language.
    ```
    php artisan vendor:publish --tag=theme-trans_en
    ```
    ```
    php artisan vendor:publish --tag=theme-trans_zh-TW
    ```
4. Done.
