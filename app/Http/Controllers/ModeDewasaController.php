<?php

namespace App\Http\Controllers;

class ModeDewasaController extends Controller
{
    public function index()
    {
        $mode = "Dewasa";

        return view('mode-dewasa', compact('mode'));
    }
}