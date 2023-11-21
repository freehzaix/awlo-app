<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cni extends Model
{
    use HasFactory;

    protected $fillable = [
        'cni_recto',
        'cni_verso',
        'hote_id',
    ];

    public function hote(): BelongsTo{
        return $this->belongsTo(Hote::class, 'hote_id');
    }

}
