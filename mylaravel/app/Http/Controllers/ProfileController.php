<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

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
        $user = auth()->user();
        $profiles = Profile::latest()->paginate(20);
        return view('dashboards.admin.users-page',[
            'profiles' => $profiles ,
            'user' => $user,
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
             'email'=> ['required', 'unique:users' , 'nullable'],
              'phone' => 'required' , 
              'business_no' => 'required',  
              'role' => 'required',
              'address' => 'required' ,
              'profession' => 'required',
              'country' => 'required',
              'city' => 'required',
              'image' => 'required',
              
                
            ]);

            $validated = $request->all();

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
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profiles , $id)
    {    
        dd($profiles);
        $profiles = Profile::find(1)->where('$profiles' , $profiles)->first();
        return view('edit_profile' , compact($profiles));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profiles ,$id)
    {
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

             $profiles = Profile::findorfail($id);
             $profiles = $request->file('image')->getClientOriginalName('image');

             Profile::create($request->first());
            return back()->with('success', 'profile updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return back()->with('success', 'profile deleted successfully.');
    }
}
