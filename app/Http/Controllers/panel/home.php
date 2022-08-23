<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\setting;
use App\Models\slider;
use App\Models\about;
use App\Models\behind;
use App\Models\comment;
use App\Models\news;
use App\Models\project;
use App\Models\projectCategories;
use App\Models\trustedClients;

class home extends Controller
{

    function  index()
    {

      //  $slider= slider::where('status',1)->orderBy('sort','ASC')->get();
        // $Categories=projectCategories::select('id','name')->get();

        $trustedClients = trustedClients::select('image','status')->where('status',1)->get();
        $news= news::select("id","name","image","desc","created_at")->with('comments')->where('status',1)->orderBy('id','DESC')->get();

           $allProjects= project::all()->where('status',1);


           // return $allProjects[0]['category']['name'];
            return view("panel.index",compact('allProjects','trustedClients','news'));
    }

    function about()
    {

        $trustedClients = trustedClients::select('image','status')->where('status',1)->get();

        return view('panel.pages.about',compact('trustedClients'));
    }

     function news()
    {

        $news= news::select("id","name","image","desc","created_at")->with('comments')->where('status',1)->orderBy('id','DESC')->get();

        return view("panel.pages.news",compact('news'));
    }

    //  function getnews(Request $req)
    // {

    //     if(request()->ajax()){
    //     $news= news::select("id","name","image","desc")->where('status',1)->orderBy('id','DESC')->skip($req->count)->take(4)->get();
    //     return response()->json(['news'=>$news]);
    //     }
    //     return response()->json(['msg'=>"error"]);
    // }

     function projects()
    {

        $allProjects= project::all()->where('status',1);
        return view('panel.pages.project',compact('allProjects'));

    }


    public function projects_desc($id)
    {

        $project = project::find($id);
        return view('panel.pages.projectDesc',compact('project'));
    }

    function newsDetails($id)
    {

         $new= news::select("id","name","image","desc",'tags',"created_at")->where('status',1)->where('id',$id)->get();


         if( isset($new[0]->tags) && $new[0]->tags[0] !='')
        {
            foreach ( $new[0]->tags as $tag) {
                $tags[]=$tag;
            }
        }else $tags='null';


          $comments = comment::select('name','message')->where('new_id',$id)->get();

          $LastNews= news::select("id","name","image")->where('status',1)->with('comments')->orderBy('id','DESC')->take(3)->get();


         return view("panel.pages.newDesc",compact('new','comments','LastNews','tags'));
    }


    public function contactCreate()
    {
        return view('panel.pages.contatcUs');

    }

}
