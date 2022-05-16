<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id', 'name', 'date', 'time', 'course_id', 'staff_id', 'detail'];
    protected $table="reserves";
    public $timestamps = true;
}