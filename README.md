# Developer's Best Friend

## Demo 
Video [link](https://youtu.be/l0RNqWgPygY) 

## Live Laravel Application
Live site is here: [p3.luseleafpaper.com](http://p3.luseleafpaper.com/)

## Creating a new Laravel application
Since I develop on a linux machine, creating a new Laravel project used a blend of the instructions for mac and digitalocean setup. 
I have two controllers: 
* UsergenController - inspects the request object and appends the appropriate number of random users to the view, as well as passing parameters to turn on birthday and profile display.  
* IpsumController - inspects the request object and appends the appropriate number of lorem ipsum paragraphs to the view

Both Controllers implement form validation  
https://github.com/luseleafpaper/ipsum/blob/master/app/Http/Controllers/IpsumController.php#L20  
https://github.com/luseleafpaper/ipsum/blob/master/app/Http/Controllers/UsergenController.php#L23  

## Installing and using Composer packages
The external package I used was a random number generator. While it may be expected that Lorem Ipsum text begins the same way, I wanted to add some variety to the user profiles. The random number generator allowed me to randomly pair first and last names and select snippets from my Lorem Ipsum text. 

I also used the Storage class that came with the default packages downloaded by composer to read and split content from text files on disk. These text files include a list of names and lorem ipsum text. 

Sample usage of Storage in the UsergenController and IpsumController  
https://github.com/luseleafpaper/ipsum/blob/master/app/Http/Controllers/UsergenController.php#L7  
https://github.com/luseleafpaper/ipsum/blob/master/app/Http/Controllers/IpsumController.php#L24  
 
## Routing basics.
There are three routes in this application: 
* home / 
* Lorem Ipsum generator /ipsum 
* User Generator /usergen 

## Views
Views include: 
* master layout which uses Bootstrap to improve my navigation bar. 
* ipsum blade template which loops through an array of content received from the controller and prints out paragraphs separated by new lines 
* usergen blade template which loops through an array of content received from the controller, checks if the birthday and profile tags are turned on, and prints the appropriate content 


## External Packages

I used the webcraft/laravel-random to help me create some variety on the number of words and profile lengths generated by my application. 

Online documentation:  
https://packagist.org/packages/webcraft/laravel-random

Usage in the UsergenController:   https://github.com/luseleafpaper/ipsum/blob/master/app/Http/Controllers/UsergenController.php#L8

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
