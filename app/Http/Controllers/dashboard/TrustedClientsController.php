<?php
namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;


use App\Models\trustedClients;
use Illuminate\Http\Request;

class TrustedClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
              $clients=trustedClients::select('id','image','status')->paginate(PAGINATE);
             return view('dashboard.clints.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.clints.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        try {


            if ($req->has('status')) {
                $req->request->add(['status' => 1]);
            } else
                $req->request->add(['status' => 0]);

                $imageName = saveImage('images', $req->image);

                trustedClients::create([
                    'image'=>$imageName,
                    'status'=>$req->status,
                ]);
                return redirect()->back()->with(['success' => __("messages.client has been added")]);


            }catch (\Exception $e)
            {

                return redirect()->back()->with(['error'=>__("messages.There's a mistake")]);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\trustedClients  $trustedClients
     * @return \Illuminate\Http\Response
     */
    public function show(trustedClients $trustedClients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\trustedClients  $trustedClients
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client=  trustedClients::select("id","image","status")->find($id);

        return view("dashboard.clints.edit",compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\trustedClients  $trustedClients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        try {

            $client= trustedClients::find($req->id);

            if ($req->has('status')) {
                $req->request->add(['status' => 1]);
            } else
                $req->request->add(['status' => 0]);



                $client->update([

                    'status'=>$req->status,
                ]);

                if(isset($req->image))
                {
                    $imageName = saveImage('images', $req->image);
                    $client->update([
                        'image'=>$imageName,

                    ]);

                   // $image = base_path('images/' . $slider->image);

                  //  unlink($image);
                }
                return redirect()->back()->with(['success' => __("messages.client has been updated")]);


            }catch (\Exception $e)
            {

                return redirect()->back()->with(['error'=>__("messages.There's a mistake")]);
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\trustedClients  $trustedClients
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        trustedClients::find($id)->delete();

        return redirect()->route("admin.trusted.index");
    }
}
