<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class VideoCallController extends Controller
{
    //
    public function index()
    {
        $roomName = 'meet_' . Str::random(10);
        return view('video-call', compact('roomName'));
    }
}
