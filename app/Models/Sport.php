<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $fillable = [
        'es_sport',
        'es_comment', 
        'jhs_sport', 
        'jhs_comment', 
        'hs_sport', 
        'hs_comment', 
        'co_sport', 
        'co_comment',
        'user_id'
    ];
    
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
