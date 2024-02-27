<?php

namespace App\Http\Controllers;

use App\Models\Narahubung;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function indexnya(){
        $shownara = Narahubung::all();
        return view('kontak', compact('shownara'), ["title" => "Kontak"]);
    }
}
