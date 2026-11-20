# Tasks for Today Management System

A Laravel web application developed for IT0049 - TSA3.

## Developer

- Name: Carlo Bismonte
- Course: BSITWMA
- Framework: Laravel
- Database: MySQL

## Features

- Display tasks scheduled for today
- View all tasks ordered by date
- Display user profile information
- About the developer page
- MySQL database integration
- Laravel migrations and seeders
- Eloquent ORM and Blade templates

## Requirements

- PHP
- Composer
- MySQL
- Laravel
- XAMPP (for local development)

## Installation

1. Clone the repository:

    git clone https://github.com/carlobismonte/tsa3-tasks-laravel.git

2. Open the project folder:

    cd tsa3-tasks-laravel

3. Install dependencies:

    composer install

4. Create the environment file:

    cp .env.example .env

5. Generate the application key:

    php artisan key:generate

6. Create a MySQL database named tsa3_tasks.

7. Configure the database settings in .env.

8. Run migrations:

    php artisan migrate

9. Seed the database:

    php artisan db:seed --class=TaskSeeder
    php artisan db:seed --class=UserSeeder

10. Start the server:

    php artisan serve

## Pages

- / - Today's Tasks
- /tasks - All Tasks
- /profile - User Profile
- /about - About Developer

## Technologies

Laravel, PHP, MySQL, Blade, HTML, CSS, Git and GitHub.
