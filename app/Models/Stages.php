<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stages extends Model
{
    protected $fillable = ['stage', 'order'];
    public $timestamps = false;
    use HasFactory;
}
