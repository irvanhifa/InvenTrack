<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'Admin';
    public $timestamps = false;
    protected $fillable = [
        'password',
    ];
}
