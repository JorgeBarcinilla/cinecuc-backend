<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Show;

class ShowsController extends Controller
{
    //
    public function index(){
        $shows = Show::all();
        return response()->json($shows->load('movie','users'),200)
                        ->withHeaders([
                            'Access-Control-Allow-Origin' => '*',
                            'Access-Control-Allow-Headers' => 'Origin, X-Requested-With, Content-Type, Accept',
                            'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE',
                            'content-type'=>'application/json; charset=utf-8'
                        ]);
    }
}
