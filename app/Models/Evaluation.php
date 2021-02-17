<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = [
        'injury_name',
        'comments', 
        'advice',
        'doctor_id',
        'injury_id'
    ];
    
    use HasFactory;

    public function doctor(){
        return $this->belongsTo('App\Models\Doctor');
    }

    public function injury(){
        return $this->belongsTo('App\Models\Injury', 'foreign_key');
    }
}
