<?php

namespace App\Http\Controllers;

use App\Models\Hero_section;
use Illuminate\Http\Request;
use App\Models\Counterup;

class FrontendController extends Controller
{
    public function index(Hero_section $hero_section){

        return view('frontend.index', [
            "hero_section" => Hero_section::all(),
            "counterup" => Counterup::all(),
        ]);
    }
}
