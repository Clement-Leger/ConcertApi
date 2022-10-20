<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //
    public function index(){
        $test = Artist::all();
        return view('welcome', compact('test'));
    }
}
