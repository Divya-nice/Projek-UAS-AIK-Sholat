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
            

        ];

        return view('gerakan', compact('gerakan'));
    }
    public function show($id)
{
    $gerakan = [

        1 => [
            'nama' => 'Takbiratul Ihram',
            'arab' => 'الله أكبر',
            'latin' => 'Allahu Akbar',
            'arti' => 'Allah Maha Besar'
        ],

        2 => [
            'nama' => 'Berdiri',
            'arab' => '-',
            'latin' => '-',
            'arti' => 'Berdiri tegak menghadap kiblat'
        ],

        3 => [
            'nama' => 'Bersedekap',
            'arab' => '-',
            'latin' => '-',
            'arti' => 'Meletakkan tangan kanan di atas tangan kiri'
        ]

    ];

    $detail = $gerakan[$id];

    return view('detail-gerakan',compact('detail','id','gerakan'));
}
}