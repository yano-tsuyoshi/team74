<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id', 'date', 'time', 'course_id', 'staff_id', 'comment'];
    public $timestamps = false;
}