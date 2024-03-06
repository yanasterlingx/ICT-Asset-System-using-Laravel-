<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use PDF;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     
        $device = Device::where('device_name', 'LIKE', '%'.$request->search.'%')->paginate(10);

        if($request->has('download'))
        {
            $pdf = PDF::loadView('pdffile.devicepdf',compact('device'))->setOptions(['defaultFont' => 'sans-serif']);
            return $pdf->download('device.pdf');
        }

        return view('device.index',compact('device'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::pluck('name', 'id');

        return view('device.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Device::create($request->all());
       
        return redirect()->route('device.index')
        ->with('success','device created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\device  $device
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
        return view('device.show',compact('device'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        return view('device.edit',compact('device'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\device  $device
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        $device->update($request->all());
            return redirect()->route('device.index')
            ->with('success','device updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        $device->delete();
    
            return redirect()->route('device.index')
            ->with('success','device updated successfully');
    }

  

}
