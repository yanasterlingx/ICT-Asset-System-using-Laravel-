<?php

namespace App\Http\Controllers\Asetofficer;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('asetofficer.auth:asetofficer');
    }

    /**
     * Show the Asetofficer dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('asetofficer.home');
    }
}
