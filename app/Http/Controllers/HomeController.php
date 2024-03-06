<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\Department;
use App\Models\Brand;
use App\Models\Device;
use App\Models\User;
use App\Admin;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $asset = Asset::count();
        $departments = Department::count();
        $users = User::count();
        $admin = Admin::count();
        $device = Device::count();

        $total = $users + $admin;

        $computer = Asset::where('device_id','1')->count();
        $computerlupus = Asset::where('device_id','1')->where('department_id','43')->count();
        $computerxinfo = Asset::where('device_id','1')->where('department_id','43')->count();

        $com = $computer - $computerlupus - $computerxinfo;

        $laptop = Asset::where('device_id','3')->count();
        $laptoplupus = Asset::where('device_id','3')->where('department_id','43')->count();
        $laptopxinfo = Asset::where('device_id','3')->where('department_id','44')->count();

        $lap = $laptop - $laptoplupus - $laptopxinfo;

        $printer = Asset::where('device_id','4')->count();
        $printlupus = Asset::where('device_id','4')->where('department_id','43')->count();
        $printxinfo = Asset::where('device_id','4')->where('department_id','44')->count();

        $print = $printer - $printlupus - $printxinfo;

        $scanner = Asset::where('device_id','5')->count();
        $scanlupus = Asset::where('device_id','5')->where('department_id','43')->count();
        $scanxinfo = Asset::where('device_id','5')->where('department_id','44')->count();

        $scan = $scanner - $scanlupus - $scanxinfo;

        

        $syed = Department::where('pic_id',2)->get();
        $nazly = Department::where('pic_id',4)->get();
        $razuhrin = Department::where('pic_id',5)->get();
        $azlina = Department::where('pic_id',3)->get();

        
        return view('home', compact('asset','departments','device','total','com','lap','print','scan','syed','nazly','razuhrin','azlina'));
    }
}
