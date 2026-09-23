<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable([
    'user_id',
    'department_id',
    'position_id',
    'address',
    'pob',
    'dob',
    'gender',
    'religion',
    'phone_number',
    'start_date',
    'status',
    'salary',
    'end_date',
    'image'
])]
class Employee extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}