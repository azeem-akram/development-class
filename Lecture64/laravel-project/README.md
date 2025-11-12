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
  Eloquent Relashionships

  Type of relashionships in laravel:
  - One-to-one
  - One-to-many
  - many-to-many

------------------
  Why we Use
------------------

In laravel we use relashipships to easily manage data relations using expressive syntax. It will automatically create forign keys and join table for us.

To setup a relashionship we setup a model first along with migration
php artisan make:model ClassModel -m
php artisan make:model StudentModel -m


----------------------------
How to declare one-to-one
----------------------------
We declare one-to-one by function in a model, syntax is:

// One to one
public function student()
{
    return $this->hasOne(StudentModel::class);
}

// Inverse One-to-one
public function class()
{
    return $this->belongsTo(ClassModel::class);
}


Migration Syntax for one-to-one
-------------------------------

$table->foreignId('class_id')->constrained('class_models')->onDelete('cascade');




----------------------------
How to declare one-to-many
----------------------------


// One to many
public function student()
{
    return $this->hasMany(StudentModel::class);
}

// Inverse One-to-many
public function class()
{
    return $this->belongsTo(ClassModel::class);
}

Migration Syntax for one-to-many
---------------------------------

- Create a column
$table->unsignedBigInteger('class_id');

- Create a forign key on that column
$table->foreign('class_id')->references('id')->on('class_models')->cascadeOnDelete();


----------
On delete cases
----------

$table->cascadeOnDelete();	Deletes should cascade.
$table->restrictOnDelete();	Deletes should be restricted.
$table->nullOnDelete();	Deletes should set the foreign key value to null.
$table->noActionOnDelete();	Prevents deletes if child records exist.




----------------------------
How to declare many-to-many
----------------------------


public function students()
{
    return $this->belongsToMany(StudentModel::class);
}

public function classes()
    {
        return $this->belongsToMany(ClassModel::class);
    }
}


Migration Syntax for many-to-many
---------------------------------