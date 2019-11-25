## Laravel Todo List App

A simple To do list app that integrates CRUD application functionality in Laravel 5.4

## Installation

Clone the repository-
```
git clone https://github.com/jerictilacas/laravel-todolist-app.git

```

Then cd into the folder with this command-
```
cd laravel/todolist
```

Then do a composer install
```
composer install
```

Then create a environment file using this command-
```
cp .env.example .env
```

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

Then create a database named `todolist` and then do a database migration using this command-
```
php artisan migrate
```

## Run server

Run server using this command-
```
php artisan serve
```

Then go to `http://localhost:8000` from your browser and see the app.

## Ask a question?

If you have any query please contact at jericotilacas@gmail.com