<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Restaurant;

use Illuminate\Support\Facades\Session;

class crudController extends Controller
{
    

    public function list()
    {
     $restaurants = Restaurant::all();

     return view('list', compact('restaurants'));
    }

    public function store(Request $request)
    {
    
        //validation

        $val = $request->validate([
            "name"     => "required",
            "email"    => "required|email",
            "address"  => "required",
        ]);

        $rest = new Restaurant();
        
        $rest -> name    = $request -> name;
        $rest -> email   = $request -> email;
        $rest -> address = $request -> address;

        if($rest -> save())
        {
            Session::flash('message', 'Restaurant Is Created Successfully');
        }
        else
        {
            Session::flash('message', 'Restaurant Is Not Created');
        }

        return redirect("/list");
    }


    public function delete($id)
    {
        Restaurant::find($id)->delete();
        Session::flash('message', 'Restaurant Is Deleted Successfully');
        return redirect("/list");
    }

    
    public function edit($id)
    {
        $restaurant = Restaurant::find($id);
        return view('edit', compact('restaurant'));

    }


    public function update(Request $request, $id)
    {
      
        $restaurant = Restaurant::find($id);
    
        if(!$restaurant)
        {
            return redirect()->backe();
        }

          //validation data

          $val = $request->validate([
            "name"     => "required",
            "email"    => "required|email",
            "address"  => "required",
        ]);

        //update data
 
        $restaurant->update($request->all());
        Session::flash('message', 'Restaurant Is Updated Successfully');
        return redirect("/list");

    }

}
