# fallback-custom-scheme

Launcher application (iOS, Android, Windows, Mac) from web page.
Use custom url scheme to launch app.
If not installed the application, fallback (ex. app store, google play store etc).

https://github.com/SatoshiKawabata/fallback-custom-scheme


## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install, either run

```
$ php composer.phar require blackho1e/fallback-custom-scheme "*"
```

or add

```
"blackho1e/fallback-custom-scheme": "*"
```

to the ```require``` section of your `composer.json` file.


## Usage

In view

```php
// @app/views/layouts/main.php

\blackho1e\FallbackCustomScheme\FallbackCustomSchemeAsset::register($this);
// further code
```

or as a dependency in your app wide AppAsset.php

```php
// @app/assets/AppAsset.php

public $depends = [
    'blackho1e\FallbackCustomScheme\FallbackCustomSchemeAsset',
    // more dependencies
];
```
