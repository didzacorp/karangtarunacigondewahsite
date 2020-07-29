<?php

namespace App\Http\Controllers;

use App\Customer;
use App\CustomerCategory;
use App\Companies;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index(Request $request)
    {
      $arrayRespond = $request->all();
      if (empty(sizeof($arrayRespond))) {
        $categories  = CustomerCategory::where('company_id', Auth::user()->company_id)->paginate(25);
        $customers   = Customer::customers();
      }else{
          $customers  = Customer::search_customer($request->all());
      }

      if ($request->ajax())
        return view('customer.table', compact(['categories', 'customers']));
      else
        return view('customer.index', compact(['categories', 'customers']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories  = CustomerCategory::orderBy('level', 'ASC')->get();
      return view('customer.add', compact(['categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $err  = '';
      $validator = Validator::make(request()->all(), [
        'name'  => 'required',
        'email'  => 'required',
        'phone'  => 'required',
        'address'  => 'required',
      ]);
      if ($validator->fails()) {
        $err = 'Incomplete data';
        return response()->json([
          'err' => $err,
        ]);
      }else{
        $customer                     = new Customer;
        $customer->id                 = Uuid::uuid4()->toString(); //toString();
        $customer->company_id         = Auth::user()->company_id;
        $customer->customer_group_id  = $request->category;
        $customer->name               = $request->name;
        $customer->email              = $request->email;
        $customer->phone              = $request->phone;
        $customer->address            = $request->address;
        $customer->notes              = $request->notes;
        $customer->save();

        $cnt = 'Successfully';
        $url = '';
        return response()->json([
          'cnt' => $cnt,
          'url' => $url,
          'err' => $err
        ]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $customers = Customer::find($id);
      $categories  = CustomerCategory::orderBy('level', 'ASC')->get();
      return view('customer.edit', compact(['customers', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $err  = '';
      $validator = Validator::make(request()->all(), [
        'name'  => 'required',
        'email'  => 'required',
        'phone'  => 'required',
        'address'  => 'required',
      ]);
      if ($validator->fails()) {
        $err = 'Incomplete data';
        return response()->json([
          'err' => $err,
        ]);
      }else{
        $customer                     = Customer::find($id);
        $customer->id                 = Uuid::uuid4()->toString(); //toString();
        $customer->customer_group_id  = $request->category;
        $customer->name               = $request->name;
        $customer->email              = $request->email;
        $customer->phone              = $request->phone;
        $customer->address            = $request->address;
        $customer->notes              = $request->notes;
        $customer->save();

        $cnt = 'Successfully';
        $url = '';
        return response()->json([
          'cnt' => $cnt,
          'url' => $url,
          'err' => $err
        ]);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
      $err = '';
      $explode    = explode(",", $id);

        for ($c = 0; $c < sizeof($explode); $c++) {
          $data = Customer::find($explode[$c])->delete();
        }

      $cnt = 'Successfully';
      $url = 'customer/main';
      $typ = 'POST';
      return response()->json([
        'err' => $err,
        'cnt' => $cnt,
        'url' => $url,
        'typ' => $typ
      ]);
    }

    public function main()
    {
      $categories  = DB::table('customer_categories')->paginate(25);
      $customers   = Customer::customers();
      return view('customer.main', compact(['categories', 'customers']));
    }
  }
