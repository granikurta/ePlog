<?php

namespace App\Models\Tests;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\Tests\Option;

class Question extends Model
{
    use HasFactory;
    protected  $table = 'question';
    protected $hidden = ['test_id', 'created_at', 'updated_at'];
}
