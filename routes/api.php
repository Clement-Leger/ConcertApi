<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Concert;
use App\Models\Artist;
use App\Models\Customer_order;
use App\Models\Venue;
use App\Models\Ticket;
use App\Models\Ticket_category;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('search', function(){
    $search = $_GET['query'];
    return Venue::where('venue_name', 'LIKE', '%'.$search.'%')->get();
});

Route::get('artist', function(){
    $search = $_GET['query'];
    return Artist::where('artist_name', 'LIKE', '%'.$search.'%')->get();
});

Route::post('pay_ticket', function(){
    $search = $_GET['query'];
    $places = Concert::where('id', $search)->value('places_left');
    if($places > 0)
    {
    $places -= 1;
    Concert::where('id', $search)->update(['places_left' => $places]);
    return Concert::where('id', $search)->get();
    }
    else
    {
        return "Sorry but there is no place available.";
    }
});

Route::get('allConcert', function(){
    return Concert::all();
});

Route::get('allOrder', function(){
    return Customer_order::all();
});

Route::get('test', function(){
    return Ticket_category::pluck('price');
});