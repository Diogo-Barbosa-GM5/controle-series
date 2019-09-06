<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index (Request $request) {

        $series = [
            'Grey\'s Anatomy',
            'Lost',
            'Agents of Shield'
        ];

        return view('series.index',['series' => $series]);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nome = $request->post('nome');

        $serie = new Serie();
        $serie->nome = $nome;
        var_dump($serie->save());

    }
}
