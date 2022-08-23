<?php

namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;
use App\Models\behind;
use Illuminate\Http\Request;

class BehindController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $behinds = behind::select("id","name","title","desc","status")->orderBy('id','DESC')->get();

             return view('dashboard.behind.index',compact('behinds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.behind.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

        if ($request->has('status')) {
            $request->request->add(['status' => 1]);
        } else
            $request->request->add(['status' => 0]);

        behind::create([
            'name'=>[
                'ar'=> $request->name,
                'en'=> $request->name_en
            ],
              'title'=>[
                'ar'=> $request->title,
                'en'=> $request->title_en
              ],
              'desc'=>[
                'ar'=> $request->desc,
                'en'=> $request->desc_en
              ],
              'status'=> $request->status
         ] );

        return redirect()->back()->with(['success' => __("messages.behind has been added")]);


    }catch (\Exception $e)
    {

        return redirect()->back()->with(['error'=>__("messages.There's a mistake")]);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\behind  $behind
     * @return \Illuminate\Http\Response
     */
    public function show(behind $behind)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\behind  $behind
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $behind = behind::find($id);

        return view('dashboard.behind.edit',compact('behind'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\behind  $behind
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            $behind = behind::find($request->id);

            if ($request->has('status')) {
                $request->request->add(['status' => 1]);
            } else
                $request->request->add(['status' => 0]);

            $behind->update($request->all());

            return redirect()->back()->with(['success' => __("messages.behind has been updated")]);


        }catch (\Exception $e)
        {

            return redirect()->back()->with(['error'=>__("messages.There's a mistake")]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\behind  $behind
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        behind::find($id)->delete();

        return redirect()->route("admin.behind.index");
    }
}
