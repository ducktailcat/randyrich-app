@extends('layouts.randy-frontend-layout')
@section('content')
<section>
    <div>
        <div class="inner-row home">
            <div class="home-col home-col-left">
                <div class="home-article text-center">
                    <h3 class="top" style="line-height: 1.4em">NEW Emerald Sampler Out On CD!</h3>
                    <p>
                        Our brand new album featuring Dylan Kirk, Jason Starday, Humpty, Axel and myself is now out on CD. The longplayer is called The Emerald Records Hit Parade Of Stars and features a great variety of self penned songs ranging from rockabilly over piano rock 'n' roll, doowop all the way to a lovely ballad to finish everything of. The LP will be hopefully available next week for our show at the Berlin Shake.
                    </p>
                    <img src="/img/emerald-sampler.jpg" alt="Frontcover Emerald Sampler"></a>
                </div>
                <div class="home-article text-center">
                    <h3> My Latest Udemy Course </h3>
                    <p>
                        I teamed up with the fantastic Darrel Higham to present to you 5 Eddie Cochran Songs and 5 Gene Vincent songs in my new video course on Udemy. You can get it for just 14,99 USD by clicking the link below.
                        <br />
                        <a
                       href="https://www.udemy.com/course/gene-and-eddie/?couponCode=RR-GENE-EDDIE-36"
                       target="_blank"><strong>The Guitar Of Gene and Eddie</strong></a>
                    </p>
                </div>
                <h3>Follow Me</h3>
                <div class="social-media">
                    <a href="https://www.patreon.com/ducktailcat" target="_blank"><img src="/img/patreon.png" alt="patreon logo" /></a>
                    <a href="https://www.facebook.com/randyrich56" target="_blank"><img src="/img/facebook.png" alt="facebook logo" /></a>
                    <a href="https://www.instagram.com/ducktailcat/" target="_blank"><img src="/img/insta-logo.png" alt="instagram logo" /></a>
                    <a
                           href="https://www.youtube.com/channel/UCg9Vdgrtb1B2d9zG4pvIemg"
                           target="_blank"><img src="/img/youtube.png" alt="youtube logo" /></a>
            </div>
            </div>
            <!-- END OF LEFT -->
            <div class="home-col home-col-center home-article text-center">
                <h3 class="top">Next Shows</h3>
                <table id="home-gigs-table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Venue</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gigs as $gig)
                        <tr>
                            <td>{{ date('d.m.Y', strtotime($gig->datum)) }}</td>
                            <td>{{ $gig->venue }}</td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
                <h3 class="mt-5">Check Out My Latest Guitar Lesson </h3>
                <div class="modal-content">
                    <iframe id="home-iframe" class="lesson-iframe" src="https://www.youtube.com/embed/YMCxeZXkq5o" title="YouTube video player" frameborder="10px" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p style="text-align: center">
                    <a href="{{ route('songlist') }}"><strong>See All Rockabilly Guitar Lessons Here</strong></a>
                </p>
                <h3 class="mt-5"> Sold Out Records Now Available Digitally</h3>
                <p>The following sold out vinyl records are now available on all major platforms like Spotify, iTunes, Google Play, YouTube Music, Pandora, Napster... and many more</p>
                <div class="sold-out">
                    <div><img src="/img/single.gif" alt="Hillbilly Cat Single"></div>
                    <div><img src="/img/ep.jpg" alt="Dance, Dance, Dance - EP"></div>
                </div>
            </div>
            <!-- END OF CENTER -->
            <div class="home-col home-col-right home-article text-center">
              <h3 class="top">My Patreon Channel</h3>
                <p>
                    On Patreon I post weekly rockabilly guitar lessons, many of them
                    exclusive to my Patrons. You get also special deals and you can join
                    the monthly livestream for q&a or to learn your requested licks.
                    <a href="https://www.patreon.com/ducktailcat"><strong>Learn More About Patreon</strong></a>
                </p>
                
                <h3 style="line-height: 1.4em">Rock'n'Roll Fieber <br> Now Also In English</h3>
                <p>
                    I've finally released the english edition of my book Rock'n'Roll
                    Fieber. The book tells the story of how I got into Rock'n'Roll back in
                    East Germany. It also describes my beginnings a musician. In 22 funny
                    and sometimes tragic chapters you will read about life on the road,
                    but also how my biggest dreams came true. <a href="https://shop.randyrich.de/en/home/102-book-rock-n-roll-fieber.html" target="_blank" style="font-weight: bold">Buy It Now</a> 
                </p><br>
                <img src="img/book-english-cover.jpg" alt="book front cover">
            </div>
        </div>
    </div>
</section>
        
@endsection
    
