<?php

namespace App\Http\Controllers;


use App\Imports\ImportAsset;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Asset;
use App\Models\Department;
use App\Models\Brand;
use App\Models\Device;
use App\Models\User;
use DB;
use PDF;
use Auth;

use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id = null)
    {
        $depart = Department::all();
        $devices = Device::all();
        

        $assets = Asset::where('asset_no', 'LIKE', '%'.$request->search.'%')
        ->orWhere('serial_no', 'LIKE', '%' .$request->search. '%')
        ->orWhere('assigned_to', 'LIKE', '%' .$request->search. '%')
        ->orWhere('location', 'LIKE', '%' .$request->search. '%')
  
        ->paginate(50);
        
        return view('asset.index',compact('assets','depart','id','devices',));
    }
    
    public function department(Request $request, $id)
    {
        $depart = Department::all();
        $devices = Device::all();

        $assets = Asset::where('department_id', $id)->where(function($query) use($request) {
            $query->where('asset_no', 'LIKE', '%'.$request->search.'%')
            ->orWhere('serial_no', 'LIKE', '%' .$request->search. '%')
            ->orWhere('assigned_to', 'LIKE', '%' .$request->search. '%')
            ->orWhere('location', 'LIKE', '%' .$request->search. '%');
        })->paginate(1000);
        

        return view('asset.index', compact('assets','depart','id','devices'));

    }

    public function device(Request $request, $id)
    {
        $devices = Device::all();
        $depart = Department::all();

        $assets = Asset::where('device_id', $id)->where(function($query) use($request) {
            $query->where('asset_no', 'LIKE', '%'.$request->search.'%')
            ->orWhere('serial_no', 'LIKE', '%' .$request->search. '%')
            ->orWhere('assigned_to', 'LIKE', '%' .$request->search. '%')
            ->orWhere('location', 'LIKE', '%' .$request->search. '%');
        })->paginate(1000);
        

        return view('asset.index', compact('assets','devices','id','depart'));

    }

    public function downloadPdf()
    {

        $url = explode('/', url()->current()); 
        $id = end($url);
    
        $assets = Asset::where('department_id', $id)->get();
        view()->share('users-pdf',$assets);
        $pdf = PDF::loadView('pdffile.assetpdf', ['assets' => $assets]);

        return $pdf->stream();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $users = User::pluck('name', 'id');
        $departments = Department::pluck('deptname','id');
        $devices = Device::pluck('device_name', 'id');
        $brands = Brand::pluck('brand_name', 'id');

        return view('asset.create', compact('users','departments','devices','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Asset::create([
            'asset_no' => $request->asset_no,
            'serial_no' => $request->serial_no,
            'purchase_year' =>$request->purchase_year,
            'device_id' => $request->device_id,
            'brand_id' => $request->brand_id,
            'assigned_to' => $request->assigned_to,
            'department_id' => $request->department_id,
            'location' => $request->location,
            'updated_at' => $request->updated_at,
            'user_id' => Auth::User()->id,

        ]); 
            
        return redirect()->route('asset.index')
                        ->with('success','Data Aset Telah Disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        return view('asset.show',compact('asset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        $users = User::pluck('name', 'id');
        $brands = Brand::pluck('brand_name', 'id');
        $devices = Device::pluck('device_name', 'id');
        $departments = Department::pluck('deptname', 'id');

        return view('asset.edit', compact('users','asset','departments','brands','devices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asset $asset)
    {
        $asset->update([
            'asset_no' => $request->asset_no,
            'serial_no' => $request->serial_no,
            'purchase_year' =>$request->purchase_year,
            'device_id' => $request->device_id,
            'brand_id' => $request->brand_id,
            'assigned_to' => $request->assigned_to,
            'department_id' => $request->department_id,
            'location' => $request->location,
            'user_id' => Auth::User()->id,
            

        ]);

        return redirect()->route('asset.index')
                        ->with('success','Data Aset Telah Disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        $asset->delete();
  
        return redirect()->back()->with('success','Aset Telah Dikemaskini');
    }

    public function importView(Request $request){
        return view('importFile');
    }

    public function import(Request $request){
        Excel::import(new ImportAsset, $request->file('file')->store('files'));
        return redirect()->back();
    }

    public function exportAssets(Request $request){
        return Excel::download(new ExportAsset, 'assets.xlsx');
    }
    
}
