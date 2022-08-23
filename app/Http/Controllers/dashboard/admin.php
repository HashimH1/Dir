<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $admins = User::select("id","name","email")->get();
           return view('dashboard.admins.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    protected function validator(array $data)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        try{
         $validator= Validator::make($data->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

        ]);

        if($validator->errors()->toArray())
          {
            return redirect()->back()->with(['error'=>__("messages.There's a mistake")]);

           }

       $user=  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);



        $user->attachRole($data->type);

         return redirect()->back()->with(['success' => __("messages.admin has been added")]);


        }catch (\Exception $e)
        {

            return redirect()->back()->with(['error'=>__("messages.There's a mistake")]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = User::find($id);
        return view('dashboard.admins.edit',compact('admin'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $admin = User::find($request->id);

        if(isset($request->password))
        {
          $admin->update(['password'=>$request->password]);
        }

        if(isset($request->name))
        {
          $admin->update(['name'=>$request->name]);
        }
        if(isset($request->name))
        {
          $admin->update(['email'=>$request->email]);
        }

        return redirect()->back()->with(['success' => __("messages.admin has been update")]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = User::find($id)->delete();

        return redirect()->route('admin.register.index');
    }
}
