Multi merchant apparel shop

## Install

- Clone this repository

`git clone git@bitbucket.org:NtimYeboah/shopperholic.git`

- Run composer to install packages

`composer install`

- Create env file

`cp .env.example .env`

- Generate key

`php artisan key:generate`

- Set the database connections in the `.env` file

- Run migration

`php artisan migrate`

## Run artisan command

`php artisan register:owner`

## Run database

`php artisan db:seed`

## View in browser

`php artisan serve`