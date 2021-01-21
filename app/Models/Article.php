<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chapter;

class Article extends Model
{
    use HasFactory;
    
    public function chapter()
    {
        return $this->hasMany(Chapter::class, 'book_id')->with('SubChapter');
        // return $this->hasMany(Chapter::class, 'book_id');
    }

}
