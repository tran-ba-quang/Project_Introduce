<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gioithieu;
class GioithieuController extends Controller
{
    public function index(){
        $gioithieu = Gioithieu::all();
        return view('pages.gioithieu', compact('gioithieu'));
        
    }
}
