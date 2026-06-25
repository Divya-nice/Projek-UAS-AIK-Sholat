<?php

namespace App\Http\Controllers;

class GerakanController extends Controller
{
    public function index()
    {
        $gerakan = [

            ['id'=>1,'nama'=>'Takbiratul Ihram'],
            ['id'=>2,'nama'=>'Berdiri'],
            ['id'=>3,'nama'=>'Bersedekap'],
            ['id'=>4,'nama'=>'Al Fatihah'],
            ['id'=>5,'nama'=>'Rukuk'],
            ['id'=>6,'nama'=>"I'tidal"],
            ['id'=>7,'nama'=>'Sujud Pertama'],
            ['id'=>8,'nama'=>'Duduk Antara Dua Sujud'],
            ['id'=>9,'nama'=>'Sujud Kedua'],
            ['id'=>10,'nama'=>'Tasyahud Awal'],
            ['id'=>11,'nama'=>'Tasyahud Akhir'],
            ['id'=>12,'nama'=>'Salam']

        ];

        return view('gerakan', compact('gerakan'));
    }
}