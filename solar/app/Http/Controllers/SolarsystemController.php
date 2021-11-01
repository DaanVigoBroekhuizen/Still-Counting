<?php

namespace App\Http\Controllers;

use App\Models\Solarsystem;
use Illuminate\Http\Request;

class SolarsystemController extends Controller
{
    public function index() {
        $solarsystems = Solarsystem::withCount('planets')->get();
        return view('solarsystems/index', ["solarsystems" => $solarsystems]);
    }

    public function show($name) {
        $solarsystems = Solarsystem::with('planets')->where('name', $name)->firstOrFail();
        return view('solarsystems/show', ["solarsystems" => $solarsystems]);
    }
}
