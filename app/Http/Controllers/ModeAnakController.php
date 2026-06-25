<?php

namespace App\Http\Controllers;

class ModeAnakController extends Controller
{
    public function index()
    {
        $mode = "Anak";

        return view('mode-anak', compact('mode'));
    }
}