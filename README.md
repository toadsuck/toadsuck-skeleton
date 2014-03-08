# Toadsuck.Skeleton

## Skeleton PHP-MVC application implementing the components from the [Toadsuck Project](http://toadsuck.github.io).

[![Total Downloads](https://poser.pugx.org/toadsuck/skeleton/downloads.png)](https://packagist.org/packages/toadsuck/skeleton) [![Latest Stable Version](https://poser.pugx.org/toadsuck/skeleton/v/stable.png)](https://packagist.org/packages/toadsuck/skeleton)

Use this as a clean starting point in your Toadsuck-based projects.

Briefly, the Toadsuck Project bundles the following components and lets them work together to form the 
basic building blocks of a PHP application:

- Configuration Management - [FuelPHP\Config](https://github.com/fuelphp/config)
- Database Abstraction - [Illuminate\Database](https://github.com/illuminate/database)
- HTTP Abstraction - [Symfony\HttpFoundation](https://github.com/symfony/HttpFoundation)
- Routing - [Aura.Router](https://github.com/auraphp/Aura.Router)
- Templates - [Plates Native PHP Templates](http://platesphp.com/)
- Unit Tests - [PHPUnit](https://github.com/sebastianbergmann/phpunit) (of course, why use anything else?)

Read the docs at <https://github.com/toadsuck/toadsuck-core/blob/master/README.md>

## Installation
Installation of this package is easy with Composer. If you aren't familiar with the Composer Dependency Manager for PHP, [you should read this first](https://getcomposer.org/doc/00-intro.md).

If you don't already have [Composer](https://getcomposer.org) installed (either globally or in your project), you can install it like this:

``` bash
$ curl -sS https://getcomposer.org/installer | php
```

Then you can create a new Toadsuck Skeleton project:

``` bash
$ composer create-project toadsuck/skeleton your-project-name --stability=dev
```

The default base namespace of your new app skelton is Toadsuck\Skeleton. You can easily change the namespace in all files using the provided `install.php` after downloading this project.

``` bash
php install.php "Your\AppNamespace"
```
> Of course, replace `Your\AppNameSpace` in the above command with whatever you want to use as your base namespace.

> __IMPORTANT__ : Make sure your new namespace is quoted in the install command as shown above.
