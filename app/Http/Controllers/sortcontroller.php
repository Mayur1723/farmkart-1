<?php

namespace App\Http\Controllers;
use App\Models\sort;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;

class sortcontroller extends Controller
{
    //

    public function sorting() 
    {
        $carts = DB::select('select * from sort');

        return view('sort.sorting',['carts'=>$carts]);
     }
}
