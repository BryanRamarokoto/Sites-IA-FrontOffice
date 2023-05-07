<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    protected $table = 'publication';
    protected $fillable = ['idarticle','etat','publish_at','updated_at'];
    protected $timestamps = false;
    
}
