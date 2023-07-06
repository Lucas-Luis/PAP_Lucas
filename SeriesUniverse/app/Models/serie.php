<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serie extends Model
{
    use HasFactory;

    public function categoria(){

        return $this->belongsTo(categoria::class);
    }

    public function plataforma(){

        return $this->belongsTo(plataforma::class);
    }
}
