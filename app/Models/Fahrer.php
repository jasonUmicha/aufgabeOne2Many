<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fahrer extends Model
{
    use HasFactory;

    protected $table = 'fahrers';
    protected $primaryKey = 'id';
    protected $fillable = ['vorname','nachname'];
    // plural
    public function fahrten()
    {
        return $this->hasMany(Fahrten::class);
    }

    public function wohnort()
    {
        return $this->hasOne(Wohnort::class);
    }
}
