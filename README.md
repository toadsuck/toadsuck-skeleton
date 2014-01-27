# Toadsuck.Skeleton

Skeleton app implementing some of the features from [Toadsuck.Core](https://github.com/toadsuck/toadsuck-core) including:

- Routing - [Aura.Router](https://github.com/auraphp/Aura.Router)
- Templates - [Plates](http://platesphp.com/)
- Database Abstraction - [Illuminate\Database](https://github.com/illuminate/database)
- Config Management - [FuelPHP\Config](https://github.com/fuelphp/config)
- Unit Tests - [PHPUnit](https://github.com/sebastianbergmann/phpunit) (of course, why use anything else?)


Learn more at [The Toadsuck Project](http://toadsuck.github.io).

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

## Directory Structure

```
src/
	config/
		local/
		test/
		prod/
		config.php
		routes.php
	controllers/
		Base.php
		Home.php
	models/
	views/
		home/
			index.php
		layouts/
			default.php
vendor/
	Composer's installation directory
web/
	index.php
	.htaccess (access the app without index.php in the url)
	composer.json
```

All controllers derive from Base Controller. This bootstraps the environment with things like templates and databases.

## Configuration
The configuration manger is built on [FuelPHP\Config](https://github.com/fuelphp/config)

### Basic Configuration Usage

``` php
// Load our primary config file.
$this->config->load('config');

$something = $this->config->get('something');

// You can load any configuration file...
$this->config->load('database');

```

See the [FuelPHP Docs](https://github.com/fuelphp/config/blob/master/README.md) for more information on configuration management.

## Templates
Templates are powered by the [Plates Project](http://platesphp.com/), which is part of [The League of Extraordinary Packages](http://thephpleague.com/).

Within this project, all themes and layouts live in `src/views`.

### Basic Template Usage

``` php
// Set our default template.
$this->template->layout('layouts/default');

// Set some variables for all views.
$this->template->page_title = 'Toadsuck Skeleton';

// Render and Display the home/index view, passing a variable named "heading".
$this->template->output('home/index', ['heading' => 'Congratulations, it worked!']);

// Same as above, but return the rendered content instead of displaying.
$content = $this->template->render('home/index', ['heading' => 'Congratulations, it worked!']);
```

I've extended the standard Template class from Plates in 2 important ways:

- 1) I've added the `output()` method so you can display the rendered view without an `echo` if you like.
- 2) All variables are escaped before rendering/displaying the content to prevent cross site scripting.


See the [Plates Project documentation](http://platesphp.com/) for more information on template usage.
## Database
Database abstraction is handled by [Illuminate\Database](https://github.com/illuminate/database)

You model:

``` php
# src/models/Widget.php

namespace Toadsuck\Skeleton\Models;

use Illuminate\Database\Eloquent\Model;

class Widgets extends Model
{
	public $timestamps = false;
}
```

In your controller:

``` php
use Toadsuck\Core\Database as DB;

# DSN is pear-style DSN string: mysql://username:password@host/database
DB::init($dsn);

// To return all widgets:
$widgets = Widgets::all()
```

See the [Laravel Documentation](http://laravel.com/docs/database) for more info on database usage.