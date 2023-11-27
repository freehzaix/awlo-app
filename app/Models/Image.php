<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'url_image',
        'text_alt',
    ];

    public function propriete(): BelongsTo {
        return $this->belongsTo(Propriete::class, 'propriete_id');
    }

}
