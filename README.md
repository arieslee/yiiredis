Redis Cache and Session for Yii2
======================
This extension provides the [redis](http://redis.io/) key-value store support for the [Yii framework 2.0](http://www.yiiframework.com).

It includes a `Cache` and `Session` storage handler in redis.


[![Build Status](https://travis-ci.org/sunmoon/yii2-phpredis.svg)](https://github.com/arieslee/yiiredis)
[![Code Climate](https://github.com/arieslee/yiiredis/badges/gpa.svg)](https://github.com/arieslee/yiiredis)
[![Test Coverage](https://github.com/arieslee/yiiredis/badges/coverage.svg)](https://github.com/arieslee/yiiredis/coverage)
[![Issue Count](https://github.com/arieslee/yiiredis/badges/issue_count.svg)](https://github.com/arieslee/yiiredis)
[![Latest Stable Version](https://poser.pugx.org/sunmoon/yii2-phpredis/version)](https://packagist.org/packages/sunmoon/yiiredis)
[![Total Downloads](https://poser.pugx.org/sunmoon/yii2-phpredis/downloads)](https://packagist.org/packages/sunmoon/yiiredis)
[![License](https://poser.pugx.org/sunmoon/yii2-phpredis/license)](https://packagist.org/packages/sunmoon/yiiredis)

**Notice: THIS REPO DOES NOT SUPPORT ACTIVE RECORD.**

**Forked from https://github.com/dcb9/yii2-phpredis.**

Requirements
------------

- PHP >= 5.4.0 
- Redis >= 2.6.12
- ext-redis >= 2.2.7
- Yii2 ~2.0.4

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist sunmoon/yiiredis
```

or add

```json
"sunmoon/yiiredis": "~1.1.1"
```

to the require section of your composer.json.


Configuration
-------------

To use this extension, you have to configure the Connection class in your application configuration:

```php
return [
    //....
    'components' => [
        'redis' => [
            'class' => 'sunmoon\redis\Connection',
            'hostname' => 'localhost',
            'port' => 6379,
            'database' => 0,
        ],
    ]
];
```

Run unit test
-------------

You can specific your redis config

```
$ cp tests/config.php tests/config-local.php
$ vim tests/config-local.php
```

and Run

```
$ ./vendor/bin/phpunit
PHPUnit 5.6.1 by Sebastian Bergmann and contributors.

............                           12 / 12 (100%)

Time: 600 ms, Memory: 10.00MB

OK (12 tests, 50 assertions)
```

Performance test
------------------

```
$ php tests/performance.php
```

![phpredis-vs-yii-redis](./phpredis-vs-yii-redis.png)
