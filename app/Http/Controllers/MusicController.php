<?php

namespace App\Http\Controllers;

class MusicController extends Controller
{
    public function index()
    {
        $metaTitle = 'My Music Page';
        $desc = "Check out the some of the recordings I've made over the years with Randy Rich and The Poor Boys, Spo-Dee-O-Dee, Sun and Lightning and other bands";

        $songs = [
            [
                'title' => 'She Rocks My World', 'src' => './songs/song1.mp3', 'band' => 'Randy Rich and The Poor Boys',
            ],
            [
                'title' => 'Rockin The Town', 'src' => './songs/song2.mp3', 'band' => 'Randy Rich and The Poor Boys',
            ],
            [
                'title' => 'El Paso', 'src' => './songs/song3.mp3', 'band' => 'The Crystalairs',
            ],
            [
                'title' => "I'm In Love", 'src' => './songs/song5.mp3', 'band' => 'Sandy Lane',
            ],
            [
                'title' => "I'm Gonna Have Things My Way", 'src' => './songs/song7.mp3', 'band' => 'Sun and Lightning',
            ],
        ];

        return view('frontend.music', compact('songs', 'metaTitle', 'desc'));
    }
}
