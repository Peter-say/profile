<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('edit_profile');
    }
    public function profile()
    {
        $profiles = Profile::latest()->get();
        return view('view_profile',[
            'profiles' => $profiles 
        ]);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_profile');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //  store image for database from here
       
     

        
          $validated = $request->validate([
            'full_name'=> 'required',
             'email'=> ['required', 'unique:users'],
              'phone' => 'required' , 
              'business_no' => 'required',  
              'role' => 'required',
              'address' => 'required' ,
              'profession' => 'required',
              'country' => 'required',
              'city' => 'required',
              'image' => 'required',
              
                
            ]);

            $profiles = $request->all();

             $profiles = $request->file('image')->getClientOriginalName('image');
                // if($image = $request->file('image')){
                //     $destinationPath = 'image/';
                //     $profilesImage = date('YmdHis') . "." . $image->image();
                //     $image->move($destinationPath, $profilesImage);
                //     $profiles ['image'] = "$profilesImage";
                // }

            

            Profile::create($request->all());
            return back()->with('success', 'profile created successfully.');
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