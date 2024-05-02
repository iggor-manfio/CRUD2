<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    use HasFactory;
    protected $table = "Animals";
    protected $primaryKey = "id";
    public $timestamps = false;
    public $fillable = ['name', 'age' , 'species', 'class'];
}
