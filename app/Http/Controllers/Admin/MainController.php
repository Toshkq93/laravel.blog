<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function index()
    {
        $key = '2fde07107d185fe78cbb755c7e367858';
        $city = 'Navapolatsk';
        $units = 'metric';
        $lang = 'ru';
        $url = "https://api.openweathermap.org/data/2.5/weather";
        $response = Http::get($url, [
            'q' => $city,
            'appid' => $key,
            'units' => $units,
            'lang' => $lang
        ]);
        $data = json_decode($response->body());
//        dd($data);
        return view('admin.main.index', ['data' => $data]);
    }
}
