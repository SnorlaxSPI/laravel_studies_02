<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView(): View
    {
        $data = [
            'value' => 100,
            'cities' => ['Bauru', 'Londrina', 'Araraquara'],
            'name' => ['Alice', 'Bob', 'Charlie'],
            'indice' => [1, 2, 3],
        ];
        return view('home', $data);
    }
}
