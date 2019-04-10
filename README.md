surlme-php
=========

Introduction
------------
surlme-php is a small and simple PHP class intended to use with the Appwapp URL shortening service "surl.me" and licensed under the GNU GPL v3.

Functions
---------
The class currently supports 1 method:
  * *Shorten* a URL

Usage
-----
```php
<?php 

require_once('surlme.class.php');

$surlme = new Surlme('YOUR_API_KEY');

// Shorten URL
$surlme->shorten('https://www.appwapp.com/');

// Look up long URL
$surlme->expand('https://surl.me/as4zk');

unset($surlme);
```

API key
-------
You will need to request an API key to use the the shortening service.

Learn more at https://surl.me/contact.php

Further info
------------
For further information about SURL.ME and its API, please visit: https://surl.me/api.php or contact the developers at https://www.appwapp.com/
