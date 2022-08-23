<?php

namespace Database\Seeders;

use App\Models\projectCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProject extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        projectCategories::create([
        'id'=>'1',
        'name'=>[
        'ar' => 'طبيعة',
        'en' => 'Landscape'
             ],
       'status'=>'1']);

       projectCategories::create([
        'id'=>'2',
        'name'=>[
        'ar' => 'بناء',
        'en' => 'Construcation'
             ],
       'status'=>'1']);

       projectCategories::create([
        'id'=>'3',
        'name'=>[
        'ar' => 'طرق',
        'en' => 'Roads'
             ],
       'status'=>'1']);

    }
}
