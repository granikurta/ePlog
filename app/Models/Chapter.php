<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\SubChapter;

class Chapter extends Model
{
    use HasFactory;

    public function subChapter()
    {
        return $this->hasMany(SubChapter::class, 'chapter_id');
    }
}
