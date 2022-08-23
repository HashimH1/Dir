<?php


namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;

use App\Models\projectCategories;
use Illuminate\Http\Request;

class ProjectCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Categories=  projectCategories::select("id","name","status")->orderBy('id','DESC')->paginate(PAGINATE);


        return view('dashboard.projectCategory.index',compact('Categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.projectCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     function store(Request $req)
    {


        try
        {

        if ($req->has('status')) {
            $req->request->add(['status' => 1]);
        } else
            $req->request->add(['status' => 0]);


            projectCategories::create([
                'name'=>[
                    'ar' => $req->name,
                    'en' => $req->name_en
                ],
                'status'=>$req->status
            ]);

        return redirect()->back()->with(['success' => __("messages.category has been added")]);

    }catch (\Exception $e)
    {

        return redirect()->back()->with(['error'=>__("messages.There's a mistake")]);
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projectCategories  $projectCategories
     * @return \Illuminate\Http\Response
     */
    public function show(projectCategories $projectCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projectCategories  $projectCategories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=  projectCategories::select("id","name","status")->find($id);
        // return $category->name;

        return view('dashboard.projectCategory.edit',compact('category'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projectCategories  $projectCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        try {
            $Category = projectCategories::find($request->id);

            if ($request->has('status')) {
                $request->request->add(['status' => 1]);
            } else
                $request->request->add(['status' => 0]);

            $Category->update($request->all());

            return redirect()->back()->with(['success' => __("messages.Category has been updated")]);


        }catch (\Exception $e)
        {

            return redirect()->back()->with(['error'=>__("messages.There's a mistake")]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projectCategories  $projectCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        projectCategories::find($id)->delete();

        return redirect()->route("admin.category.index");
    }
}
