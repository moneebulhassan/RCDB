<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\volunteer;
use App\Link;

class VolunteersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $volunteers = volunteer::paginate(5);
      return view('admin.volunteers.index')->withVolunteers($volunteers);
    }




    // public function search(Request $request){
    //
    //   	$volunteers = Volunteer::where('First_Name',$request['search'])->get();
    //   	if(!is_null($volunteers)){
    //   		return view('admin.volunteers.index',compact('volunteers'));
    //   	}else{
    //   		return "no such name";
    //   	}
    //   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $links=link::all();
        return view ('admin.volunteers.create',compact('links'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, volunteer $volunteer)
    {
      if($request->image->getClientOriginalName()){
          $ext =  $request->image->getClientOriginalExtension();
          $file = date('YmdHis').rand(1,99999).'.'.$ext;
          $request->image->storeAs('public/volunteers',$file);
          }
          else
          {
              $file = '';
          }
          $volunteer->image = $file;
          $volunteer->First_Name = $request->First_Name;
          $volunteer->Last_Name = $request->Last_Name;
          $volunteer->Date_of_Birth = $request->Date_of_Birth;
          $volunteer->Place_of_Birth = $request->Place_of_Birth;
          $volunteer->Contact_Number = $request->Contact_Number;
          $volunteer->Address = $request->Address;
          $volunteer->Gender = $request->Gender;
          $volunteer->Blood_Group = $request->Blood_Group;
          $volunteer->Education_Level = $request->Education_Level;
          $volunteer->Area_of_Intrest = $request->Area_of_Intrest;
          $volunteer->Category = $request->Category;
          $volunteer->link_id=$request->link_id;
          $volunteer->save();
          return redirect()->route('admin.volunteers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(volunteer $volunteer)
    {
      $arr['volunteer'] = $volunteer;
      return view ('admin.volunteers.show')->with($arr);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit(volunteer $volunteer)
         {
             $arr['volunteer'] = $volunteer;
             $links=link::all();
             
             return view ('admin.volunteers.edit',compact('links'))->with($arr);
         }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, volunteer $volunteer)
     {
         if(isset($request->image) && $request->image->getClientOriginalName()){
             $ext =  $request->image->getClientOriginalExtension();
             $file = date('YmdHis').rand(1,99999).'.'.$ext;
             $request->image->storeAs('public/volunteers',$file);
         }
         else
         {
             if(!$volunteer->image)
                 $file = '';
             else
                 $file = $volunteer->image;
         }


         $volunteer->image = $file;
         $volunteer->First_Name = $request->First_Name;
         $volunteer->Last_Name = $request->Last_Name;
         $volunteer->Date_of_Birth = $request->Date_of_Birth;
         $volunteer->Place_of_Birth = $request->Place_of_Birth;
         $volunteer->Contact_Number = $request->Contact_Number;
         $volunteer->Address = $request->Address;
         $volunteer->Gender = $request->Gender;
         $volunteer->Blood_Group = $request->Blood_Group;
         $volunteer->Education_Level = $request->Education_Level;
         $volunteer->Area_of_Intrest = $request->Area_of_Intrest;
         $volunteer->Category = $request->Category;
         $volunteer->link_id=$request->link_id;

         $volunteer->update();
         return redirect()->route('admin.volunteers.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        volunteer::destroy($id);
         return redirect()->route('admin.volunteers.index');
    }
}
