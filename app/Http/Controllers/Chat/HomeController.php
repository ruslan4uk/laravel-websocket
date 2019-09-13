<?php

namespace App\Http\Controllers\Chat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\Message;

class HomeController extends Controller
{

    /**
     * @param Request $request
     */
    public function send(Request $request)
    {
        Message::dispatch($request->input('body'));
    }
}
