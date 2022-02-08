<?php

namespace App\Controllers;

class Video extends BaseController
{
    public function index()
    {
        helper('html');
        $data = [
            'meta' => [
                'title' => 'Видео',
                'description' => 'Аренда катамарана Lagoon 380 в Киеве, организация отдыха, корпоративы, девичники, свадьбы, фотосессии',
                'tags' => 'отдых, корпоративы, девичники, свадьбы, видео, катамаран, яхта, Киев, река',
            ]
        ];

        return view('video', $data);
    }
}