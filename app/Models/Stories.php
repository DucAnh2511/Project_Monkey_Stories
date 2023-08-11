<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stories extends Model
{
    use HasFactory;
    public $fillable =['story_id','name','thumbnail','coinEarn'];
    protected $primaryKey = 'story_id';
}
