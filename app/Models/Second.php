<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Second extends Model
{
    use HasFactory;

    protected $fillable =[
        'card_id',
        'tier',
        'coefComposition',
        'speciesComposition',
        'origin',
        'age',
        'height',
        'diameter',
        'class',
        'density',
        'g',
        'stock',
    ];

    public function secondcard()
    {
        return $this->belongsTo(Card::class);
    }
}
