<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class Traincontroller extends Controller
{
        public function index(){

            $trains=Train::all();

            return view ('trains' , compact('trains'));
        }
}
