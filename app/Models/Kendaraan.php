<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kendaraan extends Model
{
    //


    public function jenis_kendaraan(): BelongsTo
    {
        return $this->belongsTo(JenisKendaraan::class);
    }

    public function kepemilikan(): BelongsTo
    {
        return $this->belongsTo(Kepemilikan::class);
    }

}
