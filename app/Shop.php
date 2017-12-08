<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Shop extends Authenticatable
{
    //

    protected $guard = 'shop';

    protected $guarded = ['id'];

}
