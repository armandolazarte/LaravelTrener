<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Model\Selekcije;
use App\Model\Ucitelj;
use Illuminate\Http\Request;
use App\Jobs\ChangeLocale;
use App\Model\Klub;

use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $klub = Klub::find(1);
        $trenerji = Ucitelj::where('id','>',0)->get();



        return view('home', compact('klub', 'trenerji'));
    }


}
