# Sisense home assignment
The purpose of this assignment is to build a basic SPA by a PSD design (in the assignment_description folder),
a form with fields validations, and a database insertion without page reloading.

Built with Laravel 5.5, JQuery 3.2, and MySQL DB

## Requirements
* PHP >= 7.0.0
* MySQL DB
* Composer dependency manager

## Setting up the Environment
1. Clone using git, or copy this directory to your local environment
2. Go to project library and run the command `composer install` in terminal 
3. Go to **/config/database.php**, in lines 47,48 change username and password in accordance to your MySQL database
4. Go to **/.env** in lines 12,13 change username and password in accordance to your MySQL database
5. Initialize your DB by running the **sisense_db.sql** file as a query in your MySQL database

## Run project
* Run command `php artisan serve` in terminal,  and open your browser at [localhost:8000](http://localhost:8000/)


## Actions
* Press "Start Now" for registration form
* Press "Sisense" logo on the top left to view the list of users from DB
