<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fahrten extends Model
{
    use HasFactory;
    protected $table = 'fahrten';
    protected $primaryKey = 'id';
    // singular
    public function fahrer()
    {
        return $this->belongsTo(Fahrer::class);
    }
}
