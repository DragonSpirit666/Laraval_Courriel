<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Courriel
 *
 * @package App\Models
 *
 * @property int $id
 * @property bool $lu
 */
class Courriel extends Model
{
    use HasFactory;

    /**
     * Récupère tous les courriels marqués comme lus.
     *
     * @return Collection
     */
    static public function lu() : Collection
    {
        return static::where('lu', true)->get();
    }

    /**
     * Récupère tous les courriels non lus.
     *
     * @return Collection
     */
    static public function nonLu() : Collection
    {
        return static::where('lu', false)->get();
    }
}
