<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'is_active'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', '0');
    }
}
