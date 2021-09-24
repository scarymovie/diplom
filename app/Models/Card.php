<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'box_id'
    ];

    public function prepareBox()
    {
        return $this->belongsTo(Box::class);
    }
}
