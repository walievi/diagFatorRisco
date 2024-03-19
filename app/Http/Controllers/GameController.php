<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index() {
        $options = ['Casa', 'Escola', 'Amigos', 'Surpresa'];
        return view('game.index', compact('options'));
    }

}