<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\about;
class aboutC extends Controller
{

    function about()
    {

        $about=   about::all();

        if(! isset($about[0]))
        {

        $about = [0=>['banner'=>"",'banner_text'=>"",'About_Company'=>""
        ,'About_imge_two'=>"",'vision_text'=>"",'vision_image'=>""]];
         }

            return view('dashboard.about',compact('about'));
    }

     function about_store(Request $req)
    {

            $about = about::get()->first();


           if(isset($about) )
           {
                 if(isset($req->banner))
                 {
                        $banner = saveImage('images', $req->banner);
                        deleteImage($about->banner);
                 }
                    else
                $banner=$about->banner;

                if(isset($req->About_imge_one))
                {
                        $About_imge_one = saveImage('images', $req->About_imge_one);
                        deleteImage($about->About_imge_one);
                }
                    else
                $About_imge_one=$about->About_imge_one;

                if(isset($req->About_imge_two))
                {
                        $About_imge_two = saveImage('images', $req->About_imge_two);
                        deleteImage($about->About_imge_two);
                }
                    else
                $About_imge_two=$about->About_imge_two;

                if(isset($req->vision_image))
                {
                        $vision_image = saveImage('images', $req->vision_image);
                        deleteImage($about->vision_image);
                }
                    else
                $vision_image=$about->vision_image;

               $about->update([

                    'banner'=>$banner,
                    'About_imge_one'=>$About_imge_one,
                    'About_imge_two'=>$About_imge_two,
                    'vision_image'=>$vision_image,
                   'banner_text'=>$req->banner_text,
                   'About_Company'=>$req->About_Company,
                   'vision_text'=>$req->vision_text,
               ]);

             //  $image = base_path('images/' . $setting->image);

              // unlink($image);
               return redirect()->back()->with(['success' => __("messages.about has been ubdated")]);

           }
           else
           {
               if(isset($req->banner))
                   $banner = saveImage('images', $req->banner);
               else
              $banner="";

              if(isset($req->About_imge_one))
                   $About_imge_one = saveImage('images', $req->About_imge_one);
               else
              $About_imge_one="";

              if(isset($req->About_imge_two))
                   $About_imge_two = saveImage('images', $req->About_imge_two);
               else
              $About_imge_two="";

              if(isset($req->vision_image))
                   $vision_image = saveImage('images', $req->vision_image);
               else
              $vision_image="";

              about::create([
                 'banner'=>$banner,
                 'About_imge_one'=>$About_imge_one,
                 'About_imge_two'=>$About_imge_two,
                 'vision_image'=>$vision_image,

                 'banner_text'=>[
                    'ar' => $req->banner_text,
                    'en' => $req->banner_text_en
                ],
                   'About_Company'=>[
                       'ar'=>$req->About_Company,
                       'en'=>$req->About_Company_en,
                   ],

                   'vision_text'=>[
                       'ar'=>$req->vision_text,
                       'en'=>$req->vision_text_en
                   ],

               ]);

               return redirect()->back()->with(['success' => __("messages.about has been added")]);
           }



    }
}
