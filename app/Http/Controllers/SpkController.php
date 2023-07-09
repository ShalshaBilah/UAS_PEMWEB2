<?php

namespace App\Http\Controllers;

use App\Models\Spk;
use Illuminate\Http\Request;

class SpkController extends Controller
{
    public function spk(){
        $data = Spk::all();
        return view('layouts\indexsaw', compact('data'));    
    }
}
