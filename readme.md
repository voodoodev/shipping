# Installation

Clone the repo into your www folder

`git clone https://github.com/voodoodev/shipping.git`

Run

`composer install`

to get all packages

Make the .env file

`cp .env.example .env`

Generate secure key

`php artisan key:generate`

Create the database using sqlite or mysql

`touch database/tracking.sqlite`

or 

`myql -u user -p -e 'CREATE DATABASE tracking;'`

Start the migration

`php artisan migrate`

Seed the database

`php artisan db:seed`

Thats it , you can run the app in the browser.