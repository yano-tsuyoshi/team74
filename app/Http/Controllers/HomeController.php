<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Staff;
use App\Models\User;
use App\Models\Reserve;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function guide()
    {
        $staff = Staff::all();
        $intyou = Staff::find(1);
        $staffA = Staff::find(2);
        $staffB = Staff::find(3);
       
        return view('guide',compact('staff','intyou','staffA','staffB'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function course()
    {
        $course = Course::all();
        
        return view('course',compact('course'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function access()
    {
        return view('access');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function flow()
    {
        return view('flow');
    }

   

}

