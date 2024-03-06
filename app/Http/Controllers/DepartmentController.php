<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User;
use DB;
use PDF;
use Auth;

class DepartmentController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id = null)
    {
        $department = Department::where('deptname', 'LIKE', '%'.$request->search.'%')->paginate(100);
        $pic = User::all();
       
        return view('department.index',compact('department','pic','id'));
    }

    public function pic(Request $request, $id)
    {
        $pic = User::all();
        
        $department = Department::where('pic_id',$id)->paginate(100);

        return view('department.index', compact('pic','id','department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pic = User::pluck('name', 'id');
        return view('department.create',compact('pic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Department::create([
            'deptname' => $request->deptname,
            'pic_id' =>$request->pic_id,

        ]); 

        return redirect()->route('department.index')
                        ->with('success','departments created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        return view('department.show',compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        $pic = User::pluck('name', 'id');
        return view('department.edit', compact('department','pic' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $department->update($request->all());

        return redirect()->route('department.index')
                        ->with('success','departments updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $department->delete();
  
        return redirect()->route('department.index')
                        ->with('success','department deleted successfully');
    }

    
    
}
