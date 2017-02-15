# Facades for standard Yii2 application components
[![Build Status](https://travis-ci.org/perf2k2/yii2-sugar.svg?branch=master)](https://travis-ci.org/perf2k2/yii2-sugar) [![Coverage Status](https://coveralls.io/repos/github/perf2k2/yii2-sugar/badge.svg?branch=master)](https://coveralls.io/github/perf2k2/yii2-sugar?branch=master)

## Why? 
In order to install cookie code was not so

```php
$cookies = Yii::$app->response->cookies;
$cookies->add(new \yii\web\Cookie([
    'name' => 'language',
    'value' => 'zh-CN',
]));
```

and so

```php
Cookies::add('language', 'zh-CN');
```

## Supported components

* Cache
* Cookies
* Db
* Headers
* Request
* User (part of it)
* Auth (part of it)

## Install
The fastest way is using composer:

`$ composer require perf2k2/yii2-facades`

## License
MIT (see LICENSE.md)