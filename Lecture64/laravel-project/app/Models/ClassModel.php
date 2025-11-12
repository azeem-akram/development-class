<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    //

    // Linking it to Student Model
    public function students()
    {
        return $this->belongsToMany(StudentModel::class);
    }

}
