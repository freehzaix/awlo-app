<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Disponibilite extends Model
{
    use HasFactory;

    protected $fillable = ['libelle'];

    public function propriete(): HasMany {
        return $this->hasMany(Propriete::class);
    }
    
}
