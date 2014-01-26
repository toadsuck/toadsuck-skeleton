# Toadsuck.Skeleton

Skeleton app implementing the [Toadsuck.Core](https://github.com/toadsuck/toadsuck-core) front controller from the
[Toadsuck Project](http://toadsuck.github.io).

## Installation
Installation of this package is easy with Composer. If you aren't familiar with the Composer Dependency Manager for PHP, [you should read this first](https://getcomposer.org/doc/00-intro.md).

If you don't already have [Composer](https://getcomposer.org) installed (either globally or in your project), you can install it like this:

``` bash
$ curl -sS https://getcomposer.org/installer | php
```

``` bash
$ composer create-project toadsuck/skeleton your-project-name --stability=dev
```

## Directory Structure

```
src/
	config/
		routes.php
	controllers/
		Base.php
		Home.php
	models/
	views/
vendor/
	Composer's installation directory
web/
	index.php
	.htaccess (access the app without index.php in the url)
	composer.json
```