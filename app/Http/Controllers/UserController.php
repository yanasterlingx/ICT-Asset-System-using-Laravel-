<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Hash; 
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportUser;
use App\Exports\ExportUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
      $user = User::where('name', 'LIKE', '%'.$request->search.'%')->paginate(10)->sortBy('name');

         if($request->has('download'))
         {
             $pdf = PDF::loadView('pdffile.userpdf',compact('user'))->setOptions(['defaultFont' => 'sans-serif']);
             return $pdf->download('user.pdf');
         }

        return view('admin.user.index',compact('user'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'staff_no' => $request->staff_no,
        ]);
  
        // User::create($request->all());
   
        return redirect()->route('user.index')
                        ->with('success','user created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
  
        return redirect()->route('user.index')
                        ->with('success','user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
  
        return redirect()->route('user.index')
                        ->with('success','user deleted successfully');
    }

}

