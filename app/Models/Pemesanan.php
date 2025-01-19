<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pemesanan extends Model
{
    // Fields yang dapat diisi secara mass-assignment
    protected $fillable = [
        'user_id',
        'kendaraan_id',
        "approver1_id",
        "approver2_id",
        'tanggal_mulai',
        'tanggal_selesai',
        'tujuan',
    ];


    /**
     * Relasi ke user yang melakukan pemesanan.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke kendaraan yang dipesan.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kendaraan(): BelongsTo
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function approver1()
    {
        return $this->belongsTo(User::class, 'approver_1_id')->where('role', 'approver');
    }

    public function approver2()
    {
        return $this->belongsTo(User::class, 'approver_2_id')->where('role', 'approver');
    }
    /**
     * Relasi ke approvals terkait pemesanan ini.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

}
