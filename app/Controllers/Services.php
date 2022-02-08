<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index()
    {
        helper('html');
        $data = [
            'meta' => [
                'title' => 'Наш сервис',
                'description' => 'Аренда катамарана Lagoon 380 в Киеве, организация отдыха, корпоративы, девичники, свадьбы, фотосессии',
                'tags' => 'отдых, корпоративы, девичники, свадьбы, фотосессии, катамаран, яхта, Киев, река',
            ]
        ];
        return view('services', $data);
    }
}
