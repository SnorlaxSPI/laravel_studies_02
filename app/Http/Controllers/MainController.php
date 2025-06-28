<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView(): View
    {
        // método 1
        /*
        $data = [
            'name' => 'Alessandro Lins',
            'description' => 'This is the main page of our application.',
        ];

        return view('admin.newPage3', $data);
        */
        // método 2
        /*
        return view('admin.newPage3', [
            'name' => 'Alessandro Lins',
            'description' => 'This is the main page of our application.',
        ]);
        */

        // método 3
        /*
        $name = 'Alessandro Lins';
        $description = 'This is the main page of our application.';
        return view('admin.newPage3')->with(compact('name', 'description'));
        */

        // método 4
        $name = 'Alessandro Lins';
        $description = 'This is the main page of our application.';
        return view('admin.newPage3')->with([
            'name' => $name,
            'description' => $description,
        ]);
    }
}
