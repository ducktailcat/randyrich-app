<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class CodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $counter = 1;
    private $code_from_db;

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        //
    }

    public function checkCode(Request $request)
    {
        if (!$request->isMethod('post')) {
            return redirect('/');
        }
        $form_data = $request->input();
        $album = $form_data['album'];
        $input_code = 'code_'.$album;
        $input_tries = 'tries_'.$album;
        $code_from_db = Code::where('code_' . $album, $form_data['code'])->first();
        if ($code_from_db !== null && $code_from_db->$input_tries > 0) {
            $code = $code_from_db->$input_code;
            $tries = $code_from_db->$input_tries;
            Session::put('dylan', $code);
            Session::put('tries', $tries);
            Session::put('album', $album);
            return $this->confirmDownload();
        } else {
            if ($code_from_db !== null) {
                return redirect('/stars')->with('error_msg', 'you have no downloads left');
            }
            return redirect('/stars')->with('error_msg', 'the code you have entered is not valid');
        }
    }
    public function confirmDownload()
    {
        return view('frontend.confirm-download');
    }


    public function downloadSoundFiles($code)
    {
        $dylan = Session::get('dylan', 'notset');
        $tries = Session::get('tries', null);
        $album = Session::get('album', null);
        $db_tries = 'tries_' . $album;
        $code_from_db = Code::where('code_' . $album, $dylan)->first();
        if ($code_from_db !== null) {
            if ($tries > 0) {
                if ($dylan == $code) {
                    $path = "private/". $album . ".zip";
                    if (Storage::exists($path)) {
                        Session::decrement('tries');
                        $code_from_db->$db_tries =  $code_from_db->$db_tries - 1;
                        $code_from_db->save();
                        return Response::download(Storage::path($path), 'album.zip', [
                            "Cache-Control" => "no-store, no-cache, must-revalidate, max-age=0",
                            "Cache-Control" => "post-check=0, pre-check=0, false",
                            "Pragma" => "no-cache",
                            "Connection" => "close",
                        ]);
                    } else {
                        dd("not Found");
                    }
                } else {
                    return redirect('/confirm-download')->with('error_msg', 'your code is not valid');
                }
            } else 
            {return redirect('/confirm-download')->with('error_msg', 'you have no downloads left');}
        }
        return redirect('/confirm-download')->with('error_msg', 'your code is not valid');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function edit(Code $code)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Code $code)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function destroy(Code $code)
    {
        //
    }
}
