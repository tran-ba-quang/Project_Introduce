<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
class HeaderController extends Controller
{
    public function index(){
        $header = Header::all();
        return view('layout', compact('header'));
    }
}
