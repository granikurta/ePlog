<?php

namespace App\Models\Tests;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected  $table = 'option';
    protected $hidden = ['test_id', 'created_at', 'updated_at'];
}
