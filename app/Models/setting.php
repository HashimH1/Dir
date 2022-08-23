<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
class setting extends Model
{
    use HasFactory;

    use HasTranslations;

    public $translatable = ['metaDesc','seo_title'];

    protected $fillable=['id','logo','metaDesc','seo_title'
                        ,'tags','email','phone','mobilePone','address',
                        'facebook','instagram','twitter','youtube'
                          ];

                          public $timestamps = false;
                          protected $primaryKey = null;
                          public $incrementing = false;


}
