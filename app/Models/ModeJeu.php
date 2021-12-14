<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeJeu extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'mode_jeux';
}