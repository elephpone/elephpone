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