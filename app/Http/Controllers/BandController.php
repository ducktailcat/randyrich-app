<?php

namespace App\Http\Controllers;

class BandController extends Controller
{
    public function index()
    {
        $metaTitle = 'My Bands';
        $desc = "Check out the band I'm currently playing with";

        $allBands = [
            [
                'title' => 'Randy Rich and The Poor Boys',
                'text' => '...were formed in 1997 in my home town of Rostock. In 2000 we released our first EP "Rock With The Snowman" on Part Records. Since then we have toured with different line ups all over Europe and the USA. Highlights were appearances at the world\'s biggest Rock\'n\'Roll Festivals like Viva Las Vegas (US), Rockabilly Rave (UK) or the Oldstyle Weekend in Sweden. In 2012 we released our latest record "Dance, Dance, Dance" on our own Emerald Label.<br> The Poor Boys might be coming in different line ups, but you can always be sure to hear a variety of great rockin\' tunes from the golden decade of music and many original compositions in the style of our heroes like Carl Perkins, Elvis Presley, Bob Luman and others.',
                'records' => [

                    [
                        'imgTitle' => 'Rock With The Snowman',
                        'imgSrc' => 'snowman.jpg',
                    ],
                    [
                        'imgTitle' => 'The Way You Came',
                        'imgSrc' => 'erste_cd.jpg',
                    ],
                    [
                        'imgTitle' => 'Mr. All Night Rock',
                        'imgSrc' => 'glenn.jpg',
                    ],
                    [
                        'imgTitle' => 'Bye Bye Mr. Blues',
                        'imgSrc' => 'mrblues.jpg',
                    ],
                    [
                        'imgTitle' => 'Hillbilly Cat',
                        'imgSrc' => 'single.gif',
                    ],
                    [
                        'imgTitle' => 'Dance, Dance, Dance',
                        'imgSrc' => 'ep.jpg',

                    ],
                ],

            ],
            [
                'title' => 'Spo-Dee-O-Dee',
                'text' => 'With more than 1300 Shows all over the world including tours in Europe ,the US and Japan among others the band is one of the spearheads of the European Rockabilly/Rock n Roll scene. The band also backed up Rock n Roll legends like Wanda Jackson,Hayden Thompson or Rock La Rue. With these guys THE HOUSE IS ROCKIN !!!',
                'records' => [
                    [
                        'imgTitle' => 'Shake Rattle And Blue Moon',
                        'imgSrc' => 'shakerattle.jpg',
                    ],
                    [
                        'imgTitle' => 'A Night Out In Koolsville',
                        'imgSrc' => 'nightout.jpg',
                    ],
                    [
                        'imgTitle' => 'The Many Sides',
                        'imgSrc' => 'manysides.jpg',
                    ],
                    [
                        'imgTitle' => 'The House Is Rockin',
                        'imgSrc' => 'house.jpg',
                    ],
                    [
                        'imgTitle' => 'Drinkin\' Wine',
                        'imgSrc' => 'CD-Cover.JPG',
                    ],
                ],
            ],
            [
                'title' => 'Sun and Lightning',
                'text' => 'The original plan was to take a trip together to visit original venues, studios and artists from the 1950s in the US. Our highlight was supposed to be recordings at the legendary SUN Studios. But because the engineer didn\'t share our passion for the old sound, this plan was shattered. So we\'ve recorded  our six songs a few months later in Berlin at Lightning Recorders. These records got so much praise from all kinds of sources and promoters started calling us, so we decided to get that show on the road. You\'ll hear a amix of well known and obscure Sun-Songs plus our originals following the Memphis tradition.',
                'records' => [
                    [
                        'imgTitle' => 'Sun and Lightning',
                        'imgSrc' => 'sun-cover.jpg',
                    ],
                    [
                        'imgTitle' => 'Ike and The Capers',
                        'imgSrc' => 'ike-lochcover.jpg',
                    ],
                    [
                        'imgTitle' => 'Rock\'n\'Roll Show',
                        'imgSrc' => 'rnr-show-small.jpg',
                    ],
                ],
            ],
        ];

        return view('frontend.bands', compact('allBands', 'metaTitle', 'desc'));
    }
}
