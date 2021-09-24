<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Second extends Model
{
    use HasFactory;

    protected $fillable =[
        'cards_id',
        'slug',
    ];

    public function secondcard()
    {
        return $this->belongsTo(Card::class);
    }
}
