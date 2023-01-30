@extends('layouts.randy-frontend-layout')
@section('content')
<section>
            <div class="inner-row">
                @foreach ($allBands as $band)
                <h2 class="band-header"> {{ $band['title'] }}</h2>
                <p>{{ $band['text'] }}</p>
                <div class="bands-records-wrapper">
                    @foreach ( $band['records'] as $record)
                    <div class="bands-records">
                        <img src="/img/{{ $record['imgSrc'] }}" alt="">
                    </div>
                    @endforeach
                </div>
                    
                @endforeach
        </div>
</section>
        
@endsection
    
