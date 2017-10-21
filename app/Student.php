<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey='studentId';
    protected $fillable=['name','mobile'];
}
