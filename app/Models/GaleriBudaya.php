<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class GaleriBudaya extends Model
{
    protected $table = 'galeribudaya';
    protected $fillable = ['judul', 'deskripsi', 'foto'];
    protected $casts = [
        'created_at' => 'datetime',
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
}
