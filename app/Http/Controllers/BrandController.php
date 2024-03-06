<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Modell;
use PDF;


use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 

        $brand = Brand::where('brand_name', 'LIKE', '%'.$request->search.'%')->paginate(1000); 

        if($request->has('download'))
        {
            
            $pdf = PDF::loadView('pdffile.brandpdf',compact('brand'))->setOptions(['defaultFont' => 'sans-serif']);
            return $pdf->download('brand.pdf');
        }

        return view('brand.index',compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Brand::create($request->all());
       
        return redirect()->route('brand.index')
        ->with('success','brand created successfully.');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('brand.show',compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('brand.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $brand->update($request->all());
            return redirect()->route('brand.index')
            ->with('success','brand updated successfully');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
    
        return redirect()->route('brand.index')
        ->with('success','brand updated successfully');

    }
    
}
