@extends('layouts.randy-frontend-layout')
@section('content')
<script>
    if (@json(session('dylan'))) {
        let code = @json(session('dylan'));
        const referral = setTimeout(() => {
        location.href=`http://127.0.0.1:8000/download-sounds/${code}`
        //location.href=`https://randyrich.de/download-sounds/${code}`
    },4000);
    }
</script>
<section>
    <div>
        <div class="inner-row" style="text-align: center">
            @if(session('dylan'))<p class="my-5">Your download should start automatically in 3 sec.<br>
                If not click here: <a href="{{ route('download-sounds', session('dylan')) }}">Download Songs</a>. 
            </p>@endif
            @if(session('error_msg'))<p class="py-4 text-lg text-red-700 font-bold">{{ session('error_msg') }}</p>@endif
        </div>
    </div>
</section>
        
@endsection
    
