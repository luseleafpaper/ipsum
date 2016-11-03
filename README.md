# ipsum

## External Package 

I used the webcraft/laravel-random to help me create some variety on the number of words and profile lengths generated by my application. 


https://packagist.org/packages/webcraft/laravel-random

```
$ composer require webcraft/laravel-random

// Add the service provider: 
// config/app.php

'providers' => [
    ...
    Webcraft\Random\RandomServiceProvider::class,
    ...
];

// To use a facade: 
// config/app.php

'aliases' => [
      ...
        'Random' => Webcraft\Random\RandomFacade::class
    ...
]
```
