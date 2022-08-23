<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class project extends Model
{
    use HasFactory;


    use HasTranslations;

    public $translatable = ['title','desc'];

    protected $guarded =[];

    public function category()
    {
        return $this->hasOne(projectCategories::class,'id','category_id');


    }

    public function getImageAttribute($value)
    {
          return json_decode($value);
    }
}
