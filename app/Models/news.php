<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class news extends Model
{
    use HasFactory;

    use HasTranslations;

    public $translatable = ['name','desc'];

    protected $fillable=['id','name','image','desc','tags','status','created_at'];

    public function comments()
    {
        return $this->hasMany(comment::class,'new_id','id');

    }

    public function getTagsAttribute($value)
    {
          return json_decode($value);
    }
}
