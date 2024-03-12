<?php

namespace App\Http\Controllers;

use App\Models\Courriel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourrielController extends Controller
{
    public function index(): View
    {
        $courriels = Courriel::incomplete();
        return view('courriels.index', ['courriels' => $courriels]);
    }
    public function show($id): View
    {
        $courriel = Courriel::find($id);
        return view('courriels.show', ['courriel' => $courriel]);
    }
}
