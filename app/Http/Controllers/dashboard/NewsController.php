<?php

namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;

use App\Models\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $news=  news::select("id","name","desc","image","status")->orderBy('id','DESC')->paginate(PAGINATE);

        return view("dashboard.blogs.index",compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view("dashboard.blogs.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {


        if ($request->has('status')) {
            $request->request->add(['status' => 1]);
        } else
            $request->request->add(['status' => 0]);

            if(isset($request->imagePath))
            {
              $image = saveImage('images', $request->imagePath);
                $request->request->add(['image' => $image]);
            }
        else
           $request->request->add(['image' => ""]);



           if(isset($request->tag[0] ) ){
           foreach ($request->tag as  $value) {
            $tags[] = $value;

        }
    }
    else $tags=null;


           news::create([
            'name'=>[
                'ar'=>$request->name_ar,
                'en'=>$request->name_en
            ],

            'image'=>$request->image,

            'desc'=>[
                'ar'=>$request->desc_ar,
                'en'=>$request->desc_en
            ],

            'tags'=>json_encode($tags),

            'status'=> $request->status


        ]);

         return redirect()->back()->with(['success' => __("messages.news has been added")]);


        }catch (\Exception $e)
        {

            return redirect()->back()->with(['error'=>__("messages.There's a mistake")]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show(news $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $news=  news::select("id","name","status",'tags',"desc")->find($id);

        return view("dashboard.blogs.edit",compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try
        {

            $news = news::find($request->id);

        if ($request->has('status')) {
            $request->request->add(['status' => 1]);
        } else
            $request->request->add(['status' => 0]);

            if(isset($request->image))
            {
                //deleteImage($news->image);
              $image = saveImage('images', $request->image);

                $news->update(['image'=>$image]);
            }

            if(isset($request->tag[0] ) ){
                foreach ($request->tag as  $value) {
                 $tags[] = $value;

             }
             $news->update(['tags'=>$tags]);

           }

           $news->update($request->except(['image']));

         return redirect()->back()->with(['success' => __("messages.news has been updated")]);


        }catch (\Exception $e)
        {

            return redirect()->back()->with(['error'=>__("messages.There's a mistake")]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        news::find($id)->delete();

        return redirect()->route("admin.news.index");
    }
}
