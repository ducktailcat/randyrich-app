@extends('layouts.randy-frontend-layout')
@section('content')
<section>
    <div>
        <div class="inner-row">
            <h1 class="page-title">Randy Rich On Tour</h1>
            <table id="gigs-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Venue</th>
                        <th class="gigs-band">Band</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gigs as $gig)
                    <tr>
                        <td>{{ date('d.m.Y', strtotime($gig->datum)) }}</td>
                        <td><a href="{{ $gig->link }}">{{ $gig->venue }}</a></td>
                        <td class="gigs-band"> {{ $gig->band }}</td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
        
@endsection
    
