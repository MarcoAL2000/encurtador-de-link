<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encurtador extends Model
{
    protected $fillable = ["nome"];
    use HasFactory;
}
