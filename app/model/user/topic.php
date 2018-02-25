<?php

namespace App\model\user;

use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['topic_name', 'topic_description', 'closing_date', 'final_closing_date','slug', 'image'];
}
