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
        // return view('pages.customers',compact('customers'));
        return $this->showAll($customers);
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
            'username' => 'required|unique:customers',
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
    public function show(Customer $customer)
    {
        //$customer = Customer::findOrFail($id);

        return $this->showOne($customer);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer) //$id
    {
        //$customer = Customer::findOrFail($id);

        $rules = [
            'email' => 'email|unique:customers,email,' . $customer->id,
            'username' => 'required|unique:customers' . $customer->id,
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

        if ($request->has('username')) {
            $customer->username = $request->username;
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
    public function destroy(Customer $customer)
    {
        //$customer = Customer::findOrFail($id);

        $customer->delete();

        return $this->showOne($customer);
    }

    public function login(Request $request) {
        $token = auth('customers-api')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        return response()->json([
            'token' => $token
        ]);
    }

    public function register(Request $request) {

        Customer::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return $this->login($request);
    }


}
