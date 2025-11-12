# Lecture 61

- CRUD Operaton on any Model
    - Create
    - Update
    - Delete


----------------
Important
----------------
METHOD Field:
HTML does not suport any other method then POST and GET
TO overcome this laravel has provided a builtin support to declare metod inside a form

Syntax:
<?php echo method_field('PUT'); ?>




-------------------------
# Lecture 64
-------------------------

- Give Route Names 
  We will be able to name the routes. 
  Syntax
  <Same Syntac to Create the routes>->name('products.index')
  Route::get('/get-male-students', [StudentController::class, 'getMaleStudents'])->name('student.getMales');

- More on Model functions
    - where(<column-name>, <value>)->get();
    - where(<column-name>, <value>)->orderBy('<column-name>', <direction>)->limit(10)->get();
      Diretion could be only 'asc' or 'desc'

    - first(): Comes at the the end of where statement
     where(<column-name>, <value>)->first()

    - firstOrFail()
     where(<column-name>, <value>)->firstOrFail()

    - count()

    - save():
    Its used to save the record after updating its one or more coloumns;

    - updateOrCreate()
    It will try to find the record, If it found it will update it, otherwise it will create a new record.

    - destroy(<primary-keys>, <primary-keys>, <primary-keys>, <primary-keys>)
    Delete the rows with that primary keys

    - softDeletes()
    Delete the record without actually deleting it

    - restore()
    Restore the soft deleted record

    - replicate()-fill(<column-name>, <value)
    If you want to copy one row but edit only one column then you use this to replicate.


- Relationship in database using migrations





