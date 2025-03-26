# Lecture 61
- More Model functions
    - all(): It returns everthing in the table in the form of array

    - create($model_instance): It creates a new record in database

    - findOrFail($id): It tries to finds a record with ID, if it does it will continue, otherwise it will fail with error 404

    - update($model_instance): It updates a record in the database

    - delete(): It deletes a Row from database


- CRUD Operaton on any Model
    - Create
    - Read
    - Update
    - Delete



----------------
Important
----------------
CSRF Security in laravel
 In laravel we have a CSRF(Cross Site request Forgery) security protocol in place. This will block other sites to submit form to your server. To declare a CSRF token inside your form you just need to echo out using builtin laravel functions

 echo csrf_field();


- Fillable Properties in model: When you want to create row using $request->all() you need to declare fillable properties of model





- Relationship in database tables using migrations
