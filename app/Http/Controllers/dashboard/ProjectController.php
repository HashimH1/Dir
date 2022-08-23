<?php
namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;


use App\Models\project;
use App\Models\projectCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $projects= project::orderBy('id','DESC')->paginate(PAGINATE);

         return view('dashboard.project.index',compact('projects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $categories= projectCategories::select('id','name')->where('status',1)->get();

       return view('dashboard.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {



        $images = $req->file('imagePath');

        foreach ($images as $key => $image) {

            $data[] = saveImage('images', $image);

        }


        try
        {

        if ($req->has('status')) {
            $req->request->add(['status' => 1]);
        } else
            $req->request->add(['status' => 0]);

         /*   if(isset($req->imagePath))
            {
              $image = saveImage('images', $req->imagePath);
                $req->request->add(['image' => $image]);
            }
        else
           $req->request->add(['image' => ""]); */



           project::create([
            'title'=>[
                'ar'=>$req->title_ar,
                'en'=>$req->title_en,
            ],
            'image'=> json_encode($data),
            'desc'=>[
                'ar'=>$req->desc_ar,
                'en'=>$req->desc_en,
            ],
             'date'=>$req->date,
             'client'=>$req->client,
             'category'=>$req->category,
             'status'=>$req->status,

             'facebook'=>$req->facebook,
             'twitter'=>$req->twitter,
             'pinterest'=>$req->pinterest,
             'instagram'=>$req->instagram,

           ]);

        return redirect()->back()->with(['success' => __("messages.project has been added")]);

    }catch (\Exception $e)
    {

        return redirect()->back()->with(['error'=>__("messages.There's a mistake")]);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project= project::find($id);

        // $categories= projectCategories::select('id','name')->where('status',1)->get();

        return view('dashboard.project.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try
        {
        $project = project::find($request->id);

        if ($request->has('status')) {
            $request->request->add(['status' => 1]);
        } else
            $request->request->add(['status' => 0]);

            if(isset($request->imagePath))
            {
                $images = $request->file('imagePath');
                foreach ($images as $key => $image) {

                    $data[] = saveImage('images', $image);

                }

              $project->update(['image'=>$data]);
            }


            $project->update($request->except(['imagePath','image']));


        return redirect()->back()->with(['success' => __("messages.project has been updated")]);

        }catch (\Exception $e)
        {

            return redirect()->back()->with(['error'=>__("messages.There's a mistake")]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        project::find($id)->delete();

        return redirect()->route("admin.project.index");
    }
}
