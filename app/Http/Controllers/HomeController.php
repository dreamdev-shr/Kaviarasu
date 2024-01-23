<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        $products = DB::table('product')->where('is_active', 1)->get();

        return view('welcome', compact('products'));
    }
}
