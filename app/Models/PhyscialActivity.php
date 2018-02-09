<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhyscialActivity extends Model
{
    

    //use Faker;

    protected $table = 'physcial_activity';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type'];

}

