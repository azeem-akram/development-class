
# Lecture 60

- More data types in migration

- Rotues: 
    A Standard way to route to any controller any method
    Laravel has provide a standard way to route your controller to view. It will keep route file very simple and precise

    Syntax:
    Route::get('<url-pattern>', [<name-of-class>::class, '<name-of-the-function>']);

- Create an actual Model with database connected
    - Create a model
    - Create a migration
    - Link database table to model
    - We can use builtin laravel model functions, these function are:
        - all(): get all the data in database
        - find($id): Get that partiular record with provided ID



- More useful commands
 How to create Model, Controller, Migration in a single command
 php artisan make:model <name-of-model> -mcr



# Lecture 61
- More Model functions
- CRUD Operaton on any Model
    - Create, Read, Update, Delete

- Relationship in database tables using migrations
