<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class about extends Model
{
    use HasFactory;

    protected $table ="about";

    use HasTranslations;

    public $translatable = ['banner_text','About_Company','vision_text'];

    protected $fillable=['id','banner','banner_text','About_Company','About_imge_one',

                      'About_imge_two' ,'vision_text','vision_image'
               ];
}
