<?php

namespace App\Models\Tests;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use  App\Models\Tests\Question;

class Tests extends Model
{
    use HasFactory;

    public function question()
    {
        return $this->hasMany(Question::class, 'test_id');
    }
    public function option()
    {
        return $this->hasMany(Option::class, 'test_id');
    }
}
