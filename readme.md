# States, Countries and Fruits Laravel API

This Laravel API was created for the purpose of a user who wants to input data regarding the states they have visited, the countries they have visited and the fruits they have eaten into a database. Thanks to Representational State Transfer, or REST, users have the ability to create, read, update or delete content within their database via AJAX. There are four HTTP methods: GET, POST, PUT and DELETE, which allow users to request changes to their entries in the database.

## Installation Instructions

1. Set up MAMP to run on the public folder inside that project folder via preferences in MAMP
2. Set apache and nginx ports to 8888
3. Set mysql on 8889
4. Install composer through [getcomposer.org](getcomposer.org). This will allow you to create laravel projects.
5. Create a new database in phpmyadmin called countryvisits
6. Run php artisan key:generate
7. Run php artisan migrate
8. Run php artisan serve

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Gitbook Documentation

Documentation for this API in Gitbook can be found [Here](https://monabazzaz.gitbooks.io/states-countries-and-fruits-api/content/).
