<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        $desc = "Learn how to play your favourite rockabilly guitar solo, dive down into music theory or get started with rock'n'roll piano. Check out my records, books, shows and more";

        $today = new Carbon();
        $gigs = DB::table('gigs')->where('datum', '>=', $today)->orderBy('datum', 'asc')->limit(8)->get();

        return view('frontend.home', compact('desc', 'gigs'));
    }
}
