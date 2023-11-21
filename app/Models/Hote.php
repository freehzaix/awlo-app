<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hote extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
        'password',
        'localisation',
        'image_profil',
    ];

    public function cni(): HasMany{
        return $this->hasMany(Cni::class);
    }

}
