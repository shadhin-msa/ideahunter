<?php

namespace App\model\user;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug'];
}
