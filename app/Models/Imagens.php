<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagens extends Model
{
    use HasFactory;
    protected $fillable = [
        'idPet',
        'imagem',
        ];

        public function pet()
    {
        return $this->belongsTo(Pet::class, 'idPet');
    }

}
