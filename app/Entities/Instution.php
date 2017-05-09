<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Instution extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];

}
