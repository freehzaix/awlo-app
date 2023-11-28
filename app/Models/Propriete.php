<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Propriete extends Model
{
    use HasFactory;

    protected $fillable = [
        'designation',
        'description',
        'prix',
        'slug_prop',
        'categorie_id',
        'disponibilite_id',
        'hote_id',
    ];

    public function categorie(): BelongsTo {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function disponibilite(): BelongsTo {
        return $this->belongsTo(Disponibilite::class, 'disponibilite_id');
    }
    
    public function hote(): BelongsTo {
        return $this->belongsTo(Hote::class, 'hote_id');
    }

    public function images(): HasMany {
        return $this->hasMany(Image::class);
    }

}
