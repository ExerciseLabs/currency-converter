## Currency Converter
This is a simple currency converter app that makes use of the public 
[fixer.io](http://fixer.io/) api to make conversions between different currencies.

## Installation and configuration
- Fork and clone repo

        git clone https://github.com/ExerciseLabs/currency-converter.git
    
- cd into directory and install dependencies

        cd currency-converter
        composer install
    
- rename .env.example file, configure database as required

        DB_CONNECTION=
        DB_HOST=
        DB_PORT=
        DB_DATABASE=
        DB_USERNAME=
        DB_PASSWORD=
        
- generate application key

        php artisan key:generate
        
- run migrations

        php artisan migrate
        
- start application with

        php artisan serve
If you would prefer to listen on another port order than the default 8000:
    
        php artisan serve --port=preferedPortNumber
        
## Tests
- unit and functional tests 

        vendor/bin/phpunit
