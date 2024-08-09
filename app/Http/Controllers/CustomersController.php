<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;

class CustomersController extends Controller
{
    public function index(){
        $customers = Customer::all();

        return view('customers.index', compact('customers'));
    }
    public function create(){
        $companies = Company::all();
        $customer = new Customer;
        return view('customers.create',  compact('customer', 'companies'));
    }
    public function store(){
        $customer = new Customer();
        $customer->create($this->validateRequest());

        return redirect()->route('customers.index');
    }
    public function show(Customer $customer){
        return view('customers.show', compact('customer'));
    }
    public function edit(Customer $customer){
        $companies = Company::all();
        return view('customers.edit', compact('customer', 'companies'));
    }
    public function update(Customer $customer){
        $customer->update($this->validateRequest());
        return redirect()->route('customers.show', compact('customer'));
    }
    private function validateRequest(){
        return request()->validate([
            'name' => 'required | min:3',
            'email' => 'required | email',
            'company_id' => 'required',
            'active' => 'required'
        ]);
    }
}
