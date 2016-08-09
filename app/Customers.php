<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = 'customers';

    protected $fillable = ['title', 'first_name', 'last_name', 'services', 'type'];
}
