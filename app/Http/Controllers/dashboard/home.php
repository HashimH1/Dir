<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\setting;
use App\Models\slider;

class home extends Controller
{
    function settigs()
    {

        $setting=  setting::all();
        if(! isset($setting[0]))
        {

        $setting = [0=>['logo'=>"",'metaDesc'=>"",'seo_title'=>""
        ,'tags'=>"",'email'=>"",'phone'=>"",'mobilePone'=>"",'address'=>"",
        'facebook'=>"",'instagram'=>"",'twitter'=>"",'youtube'=>""]];
         }

            return view('dashboard.settings',compact('setting'));
    }

     function settigs_store(Request $req)
    {


         $setting = setting::get()->first();




        if(isset($setting) )
        {
            if(isset($req->logo))
            {
                $imageName = saveImage('images', $req->logo);
                $setting->update([

                    'logo'=>$imageName
                ]);
                deleteImage($setting->logo);
            }
            $setting->update([
                'metaDesc'=>$req->metaDesc,
                'seo_title'=>$req->seo_title,
                'tags'=>$req->tags,
                'email'=>$req->email,
                'phone'=>$req->phone,
                'mobilePone'=>$req->mobilePone,
                'address'=>$req->address,
                'facebook'=>$req->faceboook,
                'instagram'=>$req->instagram,
                'twitter'=>$req->twitter,
                'youtube'=>$req->youtube
            ]);



            return redirect()->back()->with(['success' => __("messages.The settings has been ubdated")]);

        }
        else
        {
            if(isset($req->logo))
            {
                $imageName = saveImage('images', $req->logo);
            }
            else
           $imageName="";

            setting::create([

                'logo'=>$imageName,

                'metaDesc'=>[
                    'ar'=>$req->metaDesc,
                    'en'=>$req->metaDesc_en,
                ],
                'seo_title'=>[
                    'ar'=>$req->seo_title,
                    'en'=>$req->seo_title_en,
                ],
                'tags'=>$req->tags,
                'email'=>$req->email,
                'phone'=>$req->phone,
                'mobilePone'=>$req->mobilePone,
                'address'=>$req->address,
                'facebook'=>$req->faceboook,
                'instagram'=>$req->instagram,
                'twitter'=>$req->twitter,
                'youtube'=>$req->youtube
            ]);

            return redirect()->back()->with(['success' => __("messages.The settings has been added")]);
        }


    }



    function sliderIndex()
        {
            $slider= slider::orderBy('id','DESC')->paginate(20);

            return view('dashboard.slider.index',compact('slider'));
        }

     function slider()
    {

         return view('dashboard.slider.slider');
    }

    function slider_store(Request $req)
    {

        try {


        if ($req->has('status')) {
            $req->request->add(['status' => 1]);
        } else
            $req->request->add(['status' => 0]);

            $imageName = saveImage('images', $req->image);

            slider::create([
                'image'=>$imageName,
                'sort'=>$req->sort,
                'status'=>$req->status,
            ]);
            return redirect()->back()->with(['success' => __("messages.slider has been added")]);


        }catch (\Exception $e)
        {

            return redirect()->back()->with(['error'=>__("messages.There's a mistake")]);
        }

    }


    function edit_slider($id)
        {
            $slider= slider::find($id);

            return view('dashboard.slider.edit',compact('slider'));
        }

        function uodate_slider(Request $req)
        {
            try {

                $slider= slider::find($req->id);

                if ($req->has('status')) {
                    $req->request->add(['status' => 1]);
                } else
                    $req->request->add(['status' => 0]);



                    $slider->update([

                        'sort'=>$req->sort,
                        'status'=>$req->status,
                    ]);

                    if(isset($req->image))
                    {
                        deleteImage($slider->image);
                        $imageName = saveImage('images', $req->image);
                        $slider->update([

                            'image'=>$imageName,

                        ]);

                    }
                    return redirect()->back()->with(['success' => __("messages.slider has been updated")]);


                }catch (\Exception $e)
                {

                    return redirect()->back()->with(['error'=>__("messages.There's a mistake")]);
                }
        }


        function delete_slider($id)
        {
           $slider= slider::find($id);

           deleteImage($slider->image);

           $slider->delete();
            return redirect()->route('slider.index');
        }
}
