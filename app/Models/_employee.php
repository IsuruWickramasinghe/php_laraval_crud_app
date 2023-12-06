<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'department',
        'address',
        'mobile',
        'email',
        'gender',
        'basic_salary'
    ];
}
