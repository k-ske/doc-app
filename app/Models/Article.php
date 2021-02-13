<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content', 
        'doctor_id'
    ];

    public function doctor(){
        return $this->belongsTo('App\Models\Doctor');
    }
}
