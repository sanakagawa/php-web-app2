<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'gender', 'age', 'address', 'tel', 'created_at', 'updated_at'];
}
