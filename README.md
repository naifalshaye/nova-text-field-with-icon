# Nova Text Field With Custom Icon
A Laravel Nova text field with custom icon

## Installation:

You can install the package in to a Laravel app that uses Nova via composer:

```bash
composer require naif/text-with-icon
```

## Usage:
<h4>Add the below to nova/resources/views/layout.blade.php</h4>

```php
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
```

<h4>Add the below to Nova/User.php resource:</h4>

```php

  TextWithIcon::make('test')
      ->icon('fab fa-twitter-square') //set icon full name. Browse icon gallery at https://fontawesome.com/icons?d=gallery&m=free
      ->position('in') //here you can set icon position to be inside or outside the text field.
      ->color('#1997EF'),//also you can set icon color
         
```

<img src="https://raw.githubusercontent.com/naifalshaye/nova-text-field-with-icon/master/screenshots/screenshot.png" width="700">

## Support:
naif@naif.io

https://www.linkedin.com/in/naif

## License:
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
