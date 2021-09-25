<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'box_id'
    ];

    public function prepareBox()
    {
        return $this->belongsTo(Box::class);
    }

    public function first()
    {
        return $this->hasOne(First::class);
    }

    public function second()
    {
        return $this->hasMany(Second::class);
    }
}
