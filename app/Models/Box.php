<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id'
    ];

    public function prepareUser()
    {
        return $this->belongsTo(User::class);
    }

    public function prepareCard()
    {
        return $this->hasMany(Card::class);
    }
}
