<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function enviar($senha)
    {
        NewMessage::dispatch($senha);

        return response()->json(['success' => true]);
    }

}
