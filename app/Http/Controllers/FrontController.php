<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    // Index
    public function index(Request $request)
    {
        $data = [
            'title' => 'Helpin.id',
        ];

        return view('front.index', $data);
    }
}
