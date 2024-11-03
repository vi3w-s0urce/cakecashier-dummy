<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $data = [
            'title' => 'CakeCashier',
        ];
        return view('pages.landing.index', $data);
    }
}
