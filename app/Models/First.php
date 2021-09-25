<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class First extends Model
{
    use HasFactory;

    protected $fillable =[
        'card_id',
        'Republic',
        'district',
        'region',
        'quarter',
        'area',
        'earthCategory',
        'protectionCategory',
        'dominantBreed',
        'bonitetClass',
        'forestType',
        'tlu',
        'renter',
        'fireDangeros',
        'cutYear',
        'allStump',
        'pineStump',
        'stumpDiameter',
        'cutType',
        'littering',
        'liquid',
        'deadwood',
    ];

    public function firstcard()
    {
        return $this->belongsTo(Card::class);
    }
}
