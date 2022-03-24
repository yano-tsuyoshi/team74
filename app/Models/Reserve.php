<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id', 'staff_id', 'course_id', 'name', 'staff', 'date', 'time', 'course', 'detail'];
    public $timestamps = true;
}