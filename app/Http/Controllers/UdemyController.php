<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Udemy;

class UdemyController extends Controller
{
    public function index()
    {
        $metaTitle = 'My Udemy Courses';
        $desc = ' Find your favourite from my top rated video courses. Each one is available for just 14.99 Euro';
        $udemy = Udemy::all()->sortByDesc('u_id');

        $couponQuery = Coupon::firstWhere('id', 1);

        $coupon = ($couponQuery->coupon);

        return view('frontend.lessons.udemy', compact('udemy', 'coupon'));
    }
}
