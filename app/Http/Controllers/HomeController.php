<?php

namespace App\Http\Controllers;

use App\Actions\GetEvents;

class HomeController extends Controller
{

    public function index()
    {
        $events = GetEvents::execute();

        return view('home', [
            'events' => $events,
        ]);
    }
}
