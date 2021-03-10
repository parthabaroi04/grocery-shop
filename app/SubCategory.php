<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class SubCategory extends Model
{
    protected $fillable = ['category_id','sub_cat_name','status'];
    public function category(){
        return $this->belongsTo(Category::class,'category_id')
                    ->Where('status',1);
    }
}
