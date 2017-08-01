## Currency Converter
This is a simple currency converter app that makes use of the public fixer.io api to make conversions between different currencies.

## Installation and configuration
- Fork and clone repo
- cd into directory and run `composer install`
- rename.env.example file, configure database as required
- generate application key by running `php artisan key:generate`
- run migrations by running `php artisan migrate`
- start application with `php artisan serve`

## Tests
- To run unit and functional tests run `phpunit` in the root directory.
- To run end-to-end tests run `php artisan dusk` in the root directory.