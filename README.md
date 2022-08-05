# Password Generator

## What It Does
This package allows you to generate a random password string from a list of words.

Once installed you can do stuff like this:

```php
// Generate a random password string with the default settings: 4 words separated by hyphens
(new Timgreenwood\PasswordGenerator\PasswordGenerator)->generate()

// Generate a random password string with 3 words, separated by hyphens
(new Timgreenwood\PasswordGenerator\PasswordGenerator)->generate(3)

// Generate a random password string with 5 words, separated by underscores
(new Timgreenwood\PasswordGenerator\PasswordGenerator)->generate(5, '_')
```

## Installation
Install the package using composer
```
composer require timgreenwood/password-generator`
```

## Licence
The MIT Licence (MIT). Please see the [LICENSE.md](LICENSE.md) file for more information.