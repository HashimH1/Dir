<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class behind extends Model
{
    use HasFactory;

    use HasTranslations;

    public $translatable = ['name','title','desc'];

    protected $table ="behind";

    protected $fillable=['id','name','title','desc','status'];
}
