<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Coupon;

class SonglistController extends Controller
{
    public function index() {
        $metaTitle = "My Catalogue Of Rockabilly Guitar Lessons";
        $desc = "Search my catalogue of over 150 rockabilly songs and find your favourite solo. You can search by artist, song, guitar player";
        $lessons = DB::table('videolessons')
        ->leftJoin('udemy', 'udemy', '=', 'u_id')
        ->get();

        $couponQuery = Coupon::firstWhere('id', 1);

        $coupon = ($couponQuery->coupon);

        return view('frontend.lessons.songlist', compact('lessons', 'coupon', 'metaTitle', 'desc'));
    }
    
}
