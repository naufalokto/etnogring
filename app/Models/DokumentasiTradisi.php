<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class DokumentasiTradisi extends Model
{
    protected $table = 'dokumentasitradisi';
    protected $fillable = ['judul', 'jenis', 'link_dokumentasi', 'foto'];
    protected $casts = [
        'created_at' => 'datetime',
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
}
