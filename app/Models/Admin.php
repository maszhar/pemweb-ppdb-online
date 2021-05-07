<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'admin';

    protected $fillable = [
        'username', 'nama', 'password'
    ];
}
