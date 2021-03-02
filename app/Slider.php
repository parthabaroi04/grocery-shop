<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['slider_image','slider_title','slider_sub_title','status'];
}
