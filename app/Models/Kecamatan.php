<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'provinsi_code',
        'code',
        'name',
        'is_active'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', '0');
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_code', 'code');
    }
}
