<?php

namespace App\Http\Controllers;


use App\Models\Event;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $events = Event::with('country', 'tags')->where('start_date', '>=', today())->orderBy('created_at', 'desc')->get();

        return view('welcome', compact('events'));
    }
}
