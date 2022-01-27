<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('admin-dashboard.manage_users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-dashboard.manage_users');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'user_name'=>'required|max:250',
            'user_email'=>'required|max:250',
            'user_password'=>'required|max:250',
            'user_number'=>'required|max:250',
            'user_token'=>'required|max:250',
            'user_image' => 'required|mimes:jpeg,png,gif,jpg',

          ]);

          if ($request->hasFile('user_image')) {
            $file = $request->user_image;
            $new_file = time().$file->getClientOriginalName();
            $file->move('storage/user_image/', $new_file);
        }

          User::create([
              "user_name"=>$request->user_name,
              "user_email"=>$request->user_email,
              "user_number"=>$request->user_number,
              "user_token"=>$request->user_token,
              "user_image"=> 'storage/user_image/' . $new_file,
              "user_password"=> Hash::make ($request->user_password) ,

         ]);
         return redirect()->back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
