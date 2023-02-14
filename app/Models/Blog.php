<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "posts";
    protected $primaryKey = "id";
    public $timestamps = "false";
    protected $fillable = ['title', 'description'];
    use HasFactory;
}
