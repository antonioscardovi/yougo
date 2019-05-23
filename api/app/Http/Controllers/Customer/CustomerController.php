<?php

namespace App\Http\Controllers\Customer;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CustomerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();

        return $this->showAll($customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //{{ csrf_field() }}

        $rules = [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => [
                'required',
                'min:8',
                //'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
                'confirmed'
            ]
        ];

        $this->validate($request, $rules);

        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $data['verified'] = Customer::UNVERIFIED_CUSTOMER;
        $data['verification_token'] = Customer::generateVerificationCode();


        $customer = Customer::create($data);

        //return response()->json(['data' => $customer], 201);
        return $this->showOne($customer, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::findOrFail($id);

        return $this->showOne($customer);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $rules = [
            'email' => 'email|unique:customers,email,' . $customer->id,
            'password' => [
                'required',
                'min:8',
                'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
                'confirmed']
        ];

        if ($request->has('name')) {
            $customer->name = $request->name;
        }

        if ($request->has('lastname')) {
            $customer->lastname = $request->lastname;
        }

        if ($request->has('email') && $customer->email != $request->email) {
            $customer->verified = Customer::UNVERIFIED_CUSTOMER;
            $customer->verification_token = Customer::generateVerificationCode();
            $customer->email = $request->email;
        }

        if ($request->has('password')) {
            $customer->password = bcrypt($request->password);
        }

        if (!$customer->isDirty()) {
            return $this->errorResponse('Prilikom update profila neka vrijednost mora biti zamjenjena', 422);
        }

        $customer->save();

        return $this->showOne($customer, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);

        $customer->delete();

        return $this->showOne($customer);
    }
}
