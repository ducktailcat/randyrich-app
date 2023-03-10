<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GigController extends Controller
{
    public function index() {
        $metaTitle = "Rockabilly Live Shows";
        $desc = "Come to see my at my live shows. I play with different rockabilly and rock'n'roll bands. Bookings are also welcome";
    
        $today = new Carbon();
        $gigs = DB::table('gigs')->where('datum', '>=' , $today)->orderBy('datum', 'asc')->get();


        return view('frontend.gigs', compact('metaTitle', 'desc', 'gigs'));
    }
}
