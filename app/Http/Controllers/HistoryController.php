<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     
        $history = History::where('asset_no', 'LIKE', '%'.$request->search.'%')
        ->orWhere('serial_no', 'LIKE', '%' .$request->search. '%')
        ->orWhere('new_value', 'LIKE', '%' .$request->search. '%')
        ->paginate(10);

        return view('history.index',compact('history'));
    }

}
