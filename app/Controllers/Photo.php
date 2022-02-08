<?php

namespace App\Controllers;

class Photo extends BaseController
{
    public function index()
    {
        helper('html');
        $data = [
            'meta' => [
                'title' => 'Фото',
                'description' => 'Фото катамарана Lagoon 380 в Киеве, корпоративы, девичники, свадьбы, фотосессии',
                'tags' => 'фото, отдых, корпоративы, девичники, свадьбы, фотосессии, катамаран, яхта, Киев, река',
                ]
            ];
        return view('photo', $data);
    }
}
