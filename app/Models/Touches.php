<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Touches extends Model
{
    use HasFactory;
    protected $fillable = ['id','page_id','text_id','data'];
}
