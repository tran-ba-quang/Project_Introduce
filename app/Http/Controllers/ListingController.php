<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(Request $request, $model){
        $adminUser = Auth::guard('admin')->user();
        return view('admin.listing',['user'=>$adminUser]);
    }
}
