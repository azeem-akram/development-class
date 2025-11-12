<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    //

    public function classes()
    {
        return $this->belongsToMany(ClassModel::class);
    }
}
