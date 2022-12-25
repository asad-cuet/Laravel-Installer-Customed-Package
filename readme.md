# Laravel Installer

Laravel installer checks for the following things and install the application in one go.

1. Check For Server Requirements.
2. Check For Folders Permissions.
3. Ability to set database information.
4. Migrate The Database.
5. Seed The Tables.

## Note:
You need to have `.env` to the root.
You don't need to create database or set db name in the .env file.

## Installation
1.
Require this package with composer:
```
composer require asad-cuet/laravel-installer
```

2.
After updating composer, add the ServiceProvider to the providers array in `config/app.php`.

```
'providers' => [
    AsadCuet\LaravelInstaller\Providers\LaravelInstallerServiceProvider::class,
];
```
3.
copy the isInstalled.php file from `vendor/asad-cuet/laravel-installer/src/middleware/` to the `app/http/middleware/`

4.
add the middleware to the kernel  in `app/http/kernel.php`.
```
protected $routeMiddleware = [
    'isInstalled' => \App\Http\Middleware\isInstalled::class,
];
```
5.
Set Route gaurd to your target Route

```
Route::middleware(['isInstalled'])->group(function () {
    ..............
});
```


## Usage

Before using this package you need to run :
```bash
php artisan vendor:publish --provider="AsadCuet\LaravelInstaller\Providers\LaravelInstallerServiceProvider"
```

You will notice additional files and folders appear in your project :
 
 - `config/installer.php` : Set the requirements along with the folders permissions for your application to run, by default the array contains the default requirements for a basic Laravel app.
 - `public/installer/assets` : This folder contains a css folder and inside it you will find a `main.css` file, this file is responsible for the styling of your installer, you can overide the default styling and add your own.
 - `resources/views/vendor/installer` : Contains the HTML code for your installer.
 - `resources/lang/en/installer_messages.php` : This file holds all the messages/text.
 - `app/Http/Middleware/isInstalled.php` : This middlwware check wheather the application is installed or not.


## Uninstallation


1.
remove the ServiceProvider in the providers array in `config/app.php`.

```
'providers' => [
    AsadCuet\LaravelInstaller\Providers\LaravelInstallerServiceProvider::class,
];
```
2.
Remove this package with composer:
```
composer remove asad-cuet/laravel-installer
```


3.
delete the isInstalled.php file in the `app/http/middleware/`

4.
remove the middleware from the kernel  in `app/http/kernel.php`.
```
protected $routeMiddleware = [
    'isInstalled' => \App\Http\Middleware\isInstalled::class,
];
```
5.
Remove route gaurd from Route file:

```
Route::middleware(['isInstalled'])->group(function () {
    ..............
});
```


