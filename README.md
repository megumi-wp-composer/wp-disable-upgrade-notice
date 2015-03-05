# megumi/disable-upgrade-notice

[![Build Status](https://travis-ci.org/megumi-wp-composer/wp-disable-upgrade-notice.svg?branch=master)](https://travis-ci.org/megumi-wp-composer/wp-disable-upgrade-notice) [![Latest Stable Version](https://poser.pugx.org/megumi/wp-disable-upgrade-notice/v/stable.svg)](https://packagist.org/packages/megumi/wp-disable-upgrade-notice) [![Total Downloads](https://poser.pugx.org/megumi/wp-disable-upgrade-notice/downloads.svg)](https://packagist.org/packages/megumi/wp-disable-upgrade-notice) [![Latest Unstable Version](https://poser.pugx.org/megumi/wp-disable-upgrade-notice/v/unstable.svg)](https://packagist.org/packages/megumi/wp-disable-upgrade-notice) [![License](https://poser.pugx.org/megumi/wp-disable-upgrade-notice/license.svg)](https://packagist.org/packages/megumi/wp-disable-upgrade-notice)


Composer library for Disabling upgrade notice.

## How to use

### Place a plugin into mu-plugins

Place a plugins into mu-plugins like following.

```
<?php
/*
Plugin Name: mu-plugin for example.com
*/

require_once dirname( __FILE__ ) . '/vendor/autoload.php';
```

That's it!


### Create a composer.json

Create and place a composer.json into `muplugins/`.

```
{
    "name": "megumi/mu-plugins",
    "authors": [
        {
            "name": "John Smith",
            "email": "john@example.com"
        }
    ],
    "require": {
        "megumi/disable-upgrade-notice": "*"
    }
}
```

### Install libraries

Then run a `composer` command.

```
$ composer install
```

## How to update libraries

```
$ composer update
```


## How to development

```
$ git clone git@github.com:megumi/wp-disable-upgrade-notice.git
$ cd wp-disable-upgrade-notice
$ composer install
```

### Running a PHPUnit

After you run a `composer install`, then run `phpunit`.

```
$ phpunit
```
