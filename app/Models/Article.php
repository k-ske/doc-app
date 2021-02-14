<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'content',
        'doctor_id',
    ];
    
    use HasFactory;

    public function doctor(){
        return $this->belongsTo('Doctor::class');
    }
}
