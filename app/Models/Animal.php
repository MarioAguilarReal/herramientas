<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'photo',
        'gender',
        'specie_id',
        'zone_id',
    ];

    public function specie()
    {
        return $this->belongsTo(Specie::class);
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }
}
