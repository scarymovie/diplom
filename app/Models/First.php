<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class First extends Model
{
    use HasFactory;

    protected $fillable =[
        'cards_id'
    ];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
