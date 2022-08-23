<?php

namespace App\Http\Controllers\panel;
use App\Http\Controllers\Controller;


use App\Models\apply;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $messages=  apply::orderBy('id','DESC')->paginate(PAGINATE);




        return view('dashboard.messages',compact('messages'));
    }


    function openfile($id)
    {
         $file= apply::select('resume')->find($id);


         return response()->file('apply/'. $file->resume);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.pages.apply');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try{




            apply::create($request->all());

      //  return $request->resume;




        return redirect()->back()->with(['success' => __("messages.The message has been sent successfully")]);


        }catch (\Exception $e)
        {

            return redirect()->back()->with(['error'=>__("messages.There's a mistake")]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function show(apply $apply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function edit(apply $apply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, apply $apply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           apply::find($id)->delete();

           return redirect()->route('apply.index');
    }
}
