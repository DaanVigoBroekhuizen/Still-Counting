<?php

namespace App\Http\Controllers;

use App\Models\planet;
use App\Models\Solarsystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanetController extends Controller
{
    public function index() {
        $planets = Planet::with('Solarsystem')->get();
        return view('planets/index', ["planets" => $planets]);
    }

    public function show($name) {
        $planets = Planet::with('Solarsystem')->where('name', $name)->get();
        return view('planets/show', ["planets" => $planets]);
    }
}
