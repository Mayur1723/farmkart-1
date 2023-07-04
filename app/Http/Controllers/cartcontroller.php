<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use Illuminate\Routing\Controller;
use DB;

class cartcontroller extends Controller
{
    public function index() 
    {
        $carts = DB::select('select * from carts');

        return view('cart.view',['carts'=>$carts]);
     }
    
    public function create()
 
    {
        return view('cart.create');

       
    }


    public function store(Request $request)
    {
    $input = $request->all();
 
    $request->validate([
        'name' => 'required|max:255',
        'price' => 'required|max:255',
        'quantity' => 'required|numeric',
        
    ]);

   
    cart::create($request->all());
    return back()->with('success','Successfully ');

}


public function edit($id)
 
{
    $carts = DB::select('select * from carts where id = ?',[$id]);
    return view('cart.update', ['carts'=>$carts]);
}

public function update(Request $request,$id) {

    $price = $request->input('price');
    $name = $request->input('name');
    $quantity = $request->input('quantity');
    DB::update('update carts set name = ?,price = ?,quantity = ? where id = ?',[$name,$price,$quantity,$id]);
    return back()->with('success','Successfully ');
 }


}
