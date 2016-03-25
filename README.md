Elephpone
=========

This application is a Proof of Concept for the usage of [Tropo] online phone services and a nice gimmick for the [PHP Community].

How to get started?
-------------------

First make sure you clone [ElePHPone on GitHub] into your local working environment.

```
git clone git@github.com:elephpone/elephpone.git
```

We're using [Composer] to manage our dependend packages, so make sure you have it installed. The following will install a local copy of [Composer].

```
curl -sS https://getcomposer.org/installer|php
```

Once you have composer, make sure you install the required packages

```
php composer.phar install
```

Composer will install [Zend Framework 2], the framework used for this application and the dependend packages for this framework.

Once this is completed, launch the build-in PHP webserver on your preferred port.

```
php -S 0.0.0.0:9876 -t public/ public/index.php
```

And surf to [http://localhost:9876](http://localhost:9876) to see the app running.

![ElePHPone Web App](http://blob.phpdev.nu/elephpone/elephpone_webapp_screen.png)

Get a random quote
------------------

To get a random quote, you can use curl (or any other REST client) to test your app.

```
curl -i http://localhost:9876/call
```

This will return
```
HTTP/1.1 200 OK
Host: localhost:9876
Connection: close
X-Powered-By: PHP/5.5.31
Content-Type: application/json; charset=utf-8

{"quote":{"tropo":{"say":{"value":"http:\/\/blob.phpdev.nu\/elephpone\/thijs_feryn.mp3"}}}}
```

Of course, since it's a random quote, the link to the quote audio might be different.

[Tropo]: https://www.tropo.com
[PHP Community]: http://phpcommunity.org
[ElePHPone on GitHub]: https://github.com/elephpone/elephpone
[Composer]: https://getcomposer.org
[Zend Framework 2]: https://framework.zend.com


Installation notes on Windows
-----------------------------

### PHP7 installation

Get PHP7 (VC14 x64 Thread Safe) from http://windows.php.net/download/

Unzip to C:\php

Go to C:\php and copy php.ini-development to php.ini

Open php.ini and uncomment windows extensions and openssl extensions

``` php
; Directory in which the loadable extensions (modules) reside.
; On windows:
extension_dir = "ext"
...
; Windows Extensions
extension=php_openssl.dll
```

Check the installation is ok

``` bash
$ php -v
PHP 7.0.4 (cli) (built: Mar  2 2016 14:42:25) ( ZTS )
Copyright (c) 1997-2016 The PHP Group
Zend Engine v3.0.0, Copyright (c) 1998-2016 Zend Technologies
```

For futher help, you may check this [PHP5 installation video](https://www.youtube.com/watch?v=6Y6lOHov3Bk), which works fine for PHP7 also.


### Composer installation

Get installer from https://getcomposer.org/doc/00-intro.md#installation-windows

Run composer.exe

Go to your project clone and install the dependencies:

``` bash
cd elephpone
composer install
```
