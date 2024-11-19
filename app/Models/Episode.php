<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['number'];

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    //mutator para parametros nomeados (Named Arguments) 1 e 0 para true e false
    protected function watched(): Attribute
    {
        return new Attribute(
            get: fn($watched) => (bool)$watched
        );
    }
}
