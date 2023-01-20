# Laravel Web Installer | A Web Installer [Package](https://packagist.org/packages/ynievespuntonetsurl/laravel-installer)

[![Latest Stable Version](http://poser.pugx.org/ynievespuntonetsurl/laravel-installer/v)](https://packagist.org/packages/ynievespuntonetsurl/laravel-installer)
[![Total Downloads](http://poser.pugx.org/ynievespuntonetsurl/laravel-installer/downloads)](https://packagist.org/packages/ynievespuntonetsurl/laravel-installer)
[![Latest Unstable Version](http://poser.pugx.org/ynievespuntonetsurl/laravel-installer/v/unstable)](https://packagist.org/packages/ynievespuntonetsurl/laravel-installer)
[![License](http://poser.pugx.org/ynievespuntonetsurl/laravel-installer/license)](https://packagist.org/packages/ynievespuntonetsurl/laravel-installer)
[![PHP Version Require](http://poser.pugx.org/ynievespuntonetsurl/laravel-installer/require/php)](https://packagist.org/packages/ynievespuntonetsurl/laravel-installer)

- [About](#about)
- [Requirements](#requirements)
- [Installation](#installation)
- [Routes](#routes)
- [Usage](#usage)
- [Contributing](#contributing)
- [Help](#help)
- [Screenshots](#screenshots)
- [License](#license)

## About

Do you want your clients to be able to install a Laravel project just like they do with WordPress or any other CMS?
This Laravel package allows users who don't use Composer, SSH etc to install your application just by following the setup wizard.
The current features are :

- Check For Server Requirements.
- Check For Folders Permissions.
- Ability to set database information.
  - .env text editor
  - .env form wizard
- Migrate The Database.
- Seed The Tables.

## Requirements

- [Laravel 6.0, or 7.0+](https://laravel.com/docs/installation)
- If you did not buy our items, then buy our items first:

## Installation

### 1. From your projects root folder in terminal run

```bash
    composer require ynievespuntonetsurl/laravel-installer
```

### 2. Register the package

- Laravel 6.0 and up
Uses package auto discovery feature, no need to edit the `config/app.php` file.

```php
 'providers' => [
    YnievesPuntoNetSURL\LaravelInstaller\Providers\LaravelInstallerServiceProvider::class,
  ];
```

### 3. Publish the packages views, config file, assets, and language files by running the following from your projects root folder

```bash
  php artisan vendor:publish --tag=laravelinstaller
```

## Routes

- `/install`

## Usage

- **Install Routes Notes**
  - In order to install your application, go to the `/install` route and follow the instructions.
  - Once the installation has ran the empty file `installed` will be placed into the `/storage` directory. If this file is present the route `/install` will abort to the 404 page.

- Additional Files and folders published to your project :

|File|File Information|
|:------------|:------------|
|`config/installer.php`|In here you can set the requirements along with the folders permissions for your application to run, by default the array cotaines the default requirements for a basic Laravel app.|
|`public/installer/assets`|This folder contains a css folder and inside of it you will find a `main.css` file, this file is responsible for the styling of your installer, you can overide the default styling and add your own.|
|`resources/views/vendor/installer`|This folder contains the HTML code for your installer, it is 100% customizable, give it a look and see how nice/clean it is.|
|`resources/lang/en/installer_messages.php`|This file holds all the messages/text, currently only English is available, if your application is in another language, you can copy/past it in your language folder and modify it the way you want.|

## Contributing

- If you have any suggestions please let me know : <https://github.com/ynievespuntonetsurl/laravel-installer/pulls>.
- Please help us provide more languages for this awesome package please send a pull request <https://github.com/ynievespuntonetsurl/laravel-installer/pulls>.

## Help

- Cannot figure it out? Need more help? [Laravel Installer by YnievesPuntoNet S.U.R.L](https://www.ynieves.net/contact)

## Screenshots

![Laravel web installer | Step 1](./assets/1-welcome.jpg)
![Laravel web installer | Step 2](./assets/2-requirements.jpg)
![Laravel web installer | Step 3](./assets/3-permissions.jpg)
![Laravel web installer | Step 4 Wizard 1](./assets/4b-environment-wizard-1.jpg)
![Laravel web installer | Step 4 Wizard 2](./assets/4b-environment-wizard-2.jpg)
![Laravel web installer | Step 5](./assets/5-final.jpg)

## License

Laravel Web Installer is licensed under the MIT license. Enjoy!
