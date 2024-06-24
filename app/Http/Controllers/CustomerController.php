<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create(){
        return view("customer");
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                "name"=>"required",
                "email"=>"required|email",
                "password"=>"required",
                "confirm_password"=>"required|same:password",
                "country"=>"required",
                "state"=>"required",
                "address"=>"required",
                "gender"=>"required",
                "dob"=>"required",
            ]
            );
            echo "<pre>";
            print_r($request->all());

            $customer = new Customer;
            $customer->name = $request['name'];
            $customer->email = $request['email'];
            $customer->gender = $request['gender'];
            $customer->address = $request['address'];
            $customer->country = $request['country'];
            $customer->state = $request['state'];            
            $customer->dob = $request['dob'];
            $customer->password = md5($request['password']);
            $customer->save();

            return redirect("/customer");
    }


    public function view()
    {

        $customers = Customer::all();        
                
        $data = compact("customers");
        return view("customer-view")->with($data);

    }
}
