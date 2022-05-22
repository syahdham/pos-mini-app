## Getting Strated

This project use

- PHP >= 7.4
- Laravel 8
- PostgreSQL

#### Installation

Clone the repository

~~~
https://github.com/syahdham/pos-mini-app.git

or

git@github.com:syahdham/pos-mini-app.git
~~~

Switch to the repo folder

~~~
cd pos-mini-app
~~~

Install all the dependencies using composer

~~~
composer install
~~~
and
~~~
npm/yarn install
~~~

Copy the example env file and make the required configuration changes in the .env file

~~~
cp .env.example .env
~~~

Generate a new app key

~~~
php artisan key:generate
~~~

Run database migration and seeder (<b>Make sure you've already set the database connection in .env</b>)

~~~
php artisan migrate --seed
~~~

Start the local development server

~~~
php artisan serve
~~~

You can access the server at http://localhost:8000

### Documentation

This g-doc file for: 

- Entity Relationship Diagram (ERD)
- Data Manipulation Language (DML)
- Activity Diagram
- Use Case Diagram

Link: https://intip.in/posminiappdoc

Thank you



