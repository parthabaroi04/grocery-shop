<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubCategory;

class Category extends Model
{
    protected $fillable = ['category_name','category_description','status'];
    public function sub_categories(){
        return $this->hasMany(SubCategory::class)->Where('status',1);
    }
}
