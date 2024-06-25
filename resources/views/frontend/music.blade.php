@extends('layouts.randy-frontend-layout')
@section('content')
    <section class="pt-4 pb-8">
        <div>
            <div class="inner-row">
                <div class="player">
                    <div class="ampex-container">
                        <div id="player-container" class="recorder-speaker">
                            <div class="recorder">
                                <img id="ampex" src="/img/ampex601.png" alt="tape recorder">
                                <img id="leftreel" class="reel" src="/img/leftreel.png" alt="left reel" >
                                <img id="rightreel" class="reel" src="/img/leftreel.png" alt="right reel">
                                <img id="playbtn" data-playing="false" role="switch" aria-checked="false" src="/img/playknopf.png" alt="play button">
                                <img id="nextbtn" src="/img/playknopf.png" alt="next button">
                                <img id="roller" src="/img/andruckrolle.png" alt="rubber roller">
                                <div id="zeiger"></div>
                            </div>
                            <div class="speaker">
                                <img src="/img/ampex-speaker.png" alt="speaker">
                            </div>
                        </div>
                        <div class="song-reels">
                            @foreach ($songs as $song)
                                <div class="song-reel-img" data-index="{{ $loop->index }})">
                                    <img src="/img/scotch_tape.png" alt="tape reels">
                                    <div class="song-info">
                                        <span>{{ $song['title'] }}</span>
                                        <br>
                                        <br>
                                        <span>{{ $song['band'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <audio id="ampexPlayer" src="/songs/song1.mp3"></audio>
                </div>
                <div class="text-center py-5">
                    <h4 class="text-lg mb-2">You can hear me sing or play guitar, piano and drums on the following releases:</h4>
                    <p class="larger">
                        1999 Randy Rich and The Poor Boys - 7" EP <em>"Rock With The Snowman"</em> Part Records
                        <br> 2000 Blue Star Boys - 10" LP <em>"Here Are The Blue Star Boys"</em> Fairlane Records
                        <br> 2001 Charlie Thompson And The Emeralds - 7" EP <em>"Chains Of Love"</em> Fairlane Records
                        <br> 2002 Lynette Morgan and The Blackwater Valley Boys - CD <em>"Road Signs And Middle Lines"</em>
                        El Toro Records
                        <br> 2003 Randy Rich and The Poor Boys - CD<em> "The Way You Came" </em>Rhythm Bomb Records
                        <br> 2004 Glenn Honeycutt And The Poor Boys - CD <em>"Mr. All Night Rock"</em> Rhythm Bomb Records
                        <br> 2006 Randy Rich And The Poor Boys - CD <em>"Bye, Bye Mr. Blues"</em> Rhythm Bomb Records
                        <br> 2008 Randy Rich And The Poor Boys - 7" <em>"Hillbilly Cat"</em> Emerald Records
                        <br> 2009 Spo Dee O Dee - CD <em>"The House Is Rockin'"</em> Rhythm Bomb Records
                        <br> 2009 Crystalairs - CD <em>"Die Ganze Welt"</em> Bear Family Records
                        <br> 2011 Crystalairs - CD <em>"Westwärts"</em> Bear Family Records
                        <br> 2012 Randy Rich and The Poor Boys - EP <em>"Dance, Dance, Dance"</em> Emerald Records
                        <br> 2015 Sandy Lane and the Headlights - EP <em>"Tonight's The Night"</em> Rhythm Bomb Records
                        <br> 2018 Spo Dee O Dee - EP <em>"Rock'n'Roll Frog"</em> Sleazy Records
                        <br> 2018 Ike and The Capers - Single <em>"Wow / All I Can See Is Blue"</em> Emerald Records
                        <br> 2019 Sun and Lightning - EP <em>"Pumpin Piano Man"</em> Emerald Records
                        <br> 2019 Sun and Lightning - LP <em>"Rock'n'Roll Show"</em> Emerald Records
                        <br> 2022 Big Ralph - LP <em>"Sunset Surfin'"</em> Starcatcher Records
                        <br> 2022 Dylan Kirk - LP <em>"King Of The Hop"</em> Emerald Records
                        <br> 2022 Hit Parade Of Stars - LP and CD <em>"King Of The Hop"</em> Emerald Records
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
