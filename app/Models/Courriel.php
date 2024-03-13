<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courriel extends Model
{
    use HasFactory;

    static public function lu() : Collection
    {
        return static::where('lu', true)->get();
    }

    static public function nonLu() : Collection
    {
        return static::where('lu', false)->get();
    }
}
