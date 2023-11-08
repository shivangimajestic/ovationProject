<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = Customer::all();

        return view('admin/customer/index' ,  compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin/customer/add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->firstName = $request->input('firstName');
        $customer->lastName= $request->input('lastName');
        $customer->email= $request->input('email');
        $customer->addLine1= $request->input('addLine1');
        $customer->addLine2=$request->input('addLine2');
        $customer->city=$request->input('city');
        $customer->state=$request->input('state');
        $customer->country=$request->input('country');
        $customer->save();
        $customer = Customer::all();
        return view('admin/customer/index' ,  compact('customer'));
        //return redirect()->back()->with('status','Product Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $customer = Customer::find($id);
        return view('admin/customer/edit', compact('customer'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->firstName = $request->input('firstName');
        $customer->lastName= $request->input('lastName');
        $customer->email= $request->input('email');
        $customer->addLine1= $request->input('addLine1');
        $customer->addLine2=$request->input('addLine2');
        $customer->city=$request->input('city');
        $customer->state=$request->input('state');
        $customer->country=$request->input('country');
        $customer->update();
        $customer = Customer::all();
        return view('admin/customer/index' ,  compact('customer'));
        //return redirect()->back()->with('status','Product Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->back()->with('trash','Question deleted');
    }
}
