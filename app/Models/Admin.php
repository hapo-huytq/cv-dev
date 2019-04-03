<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Admin extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'email', 'password', 'phone', 'avatar'
    ];
}
