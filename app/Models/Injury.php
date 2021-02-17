<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Injury extends Model
{
    protected $fillable = [
        'injury_site',
        'when_injured', 
        'MOI', 
        'pain_type', 
        'painful_motion', 
        'how_painful', 
        'comments', 
        'user_id'
    ];
    
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function evaluations(){
        return $this->hasMany('Evaluation::class');
    }
}
