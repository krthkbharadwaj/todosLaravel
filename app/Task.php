<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
     protected $table = 'todos';
     protected $fillable = ['name','status']; 
}
