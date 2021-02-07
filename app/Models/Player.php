<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Player as Authenticatable;

class Player extends Authenticatable
{
    use HasFactory;
}