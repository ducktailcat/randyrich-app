@extends('layouts.randy-frontend-layout')
@section('content')
<section>
    <div>
        <div class="inner-row">
            <x-lessons-nav />
            <h2 style="margin-bottom: 5px">Check Out My Top Rated Udemy Courses</h2>
            <h3 style="margin: 0">From Beginners to Advanced Levels, we got the course for you </h3>
            <h3 class="red" style="margin-top: 0">For Only 14.99 Euro</h3>
            <div class="udemy-wrapper">
                @foreach ($udemy as $item)
            <div class="udemy-item">
                <div class="udemy-item-top">
                    <h3>{{ $item->u_title }}</h3>
                    <img src="/img/{{ $item->u_thumb }}.jpg" alt="">
                </div>
                <div class="udemy-item-bottom">
                    <p style="margin:0">{{ $item->u_subtitle }}</p>
                    <a class="preview-btn" href="https://www.udemy.com/{{ $item->u_link }}{{ $coupon }}">Preview</a>
                </div>
            </div>  
            @endforeach
            </div>
        </div>
    </div>
</section>
        
@endsection
    
