@extends('layouts.randy-frontend-layout')
@section('content')
<section>
        <div class="inner-row">
            <h1 class="page-title">Three Ways To Become A Better Guitar Player</h1>

            <div class="lessons-container">
                <div class="lessons-element">
                    <a href="{{ route('songlist') }}">
                        <div class="lessons-element-title">
                            <h2>Video Lessons</h2>
                        </div>
                        <p>Browse our catalogue of more than 150 lessons and find your favourite song to learn</p>
                    </a>
                </div>
                <div class="lessons-element">
                    <a href="/lessons/udemy">
                        <div class="lessons-element-title">
                            <h2>Udemy Courses</h2>
                        </div>
                        <p>Check out my video courses. From beginners to masterclass, we have something for everybody</p>
                    </a>
                </div>
                <div class="lessons-element">
                    <a href="/lessons/private">
                        <div class="lessons-element-title">
                            <h2>Private Lessons</h2>
                        </div>
                        <p>Book a private video guitar lesson with me via Skype, Zoom, Jitsi or your favourite app</p>
                    </a>
                </div>
            </div>
            
        </div>
</section>
        
@endsection
    
