<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home() {
        return inertia::render('home');
    }
}
