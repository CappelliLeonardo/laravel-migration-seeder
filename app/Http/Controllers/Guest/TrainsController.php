<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Models\Train;
use App\Http\Controllers\Controller;

class TrainsController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        // Query select tutti i treni con data di partenza maggiore o uguale ad oggi
        //$trains = Train::where('departure_time', '>=', '2024/02/27')->get();
       // dd($trains);

        return view('welcome', compact('trains'));
    }
}
