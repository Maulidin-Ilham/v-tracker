<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kepemilikan extends Model
{
    //
    protected $fillable = [
        'name',

    ];

    public function kendaraans(): HasMany
    {
        return $this->hasMany(Kendaraan::class);
    }
}
