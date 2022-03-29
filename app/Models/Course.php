<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = "Courses";

    protected $fillable = ['id', 'name', 'detail', 'time', 'price'];
    public $timestamps = false;
}