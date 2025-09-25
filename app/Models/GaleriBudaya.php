<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class GaleriBudaya extends Model
{
    protected $table = 'galeribudaya';
    protected $fillable = ['title', 'jenis', 'isi_kegiatan', 'tanggal_kegiatan', 'foto'];
    protected $casts = [
        'created_at' => 'datetime',
        'tanggal_kegiatan' => 'date',
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
}
