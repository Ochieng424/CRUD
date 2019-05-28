<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // if the table name is different from class name
    protected $table = "my_employees";

    // All fields required
    protected $guarded = [];
}
