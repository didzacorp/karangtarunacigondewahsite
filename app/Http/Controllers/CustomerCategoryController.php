<?php

namespace App\Http\Controllers;

use App\Customer;
use App\CustomerCategory;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class CustomerCategoryController extends Controller
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
        $customers   = DB::table('customers')
                       ->select('customer_categories.name', 'companies.name as company_name', 'customers.name as names', 'customers.company_id', 'customers.email', 'customers.phone', 'customers.address', 'customers.notes', 'customers.id')
                       ->join('customer_categories', 'customer_categories.id', '=', 'customers.customer_group_id')
                       ->join('companies', 'companies.id', '=', 'customers.company_id')
                       ->paginate(25);
      }else{
        if ($request['divId'] == 'table_customer_category') {
          $categories = CustomerCategory::search_customer_category($request->all());
        }else{
          $customers  = Customer::search_customer($request->all());
        }
      }

      if ($request->ajax())
        if ($request['divId'] == 'table_customer_category') {
          return view('customer_category.table', compact(['categories', 'customers']));
        }else{
          return view('customer.table', compact(['categories', 'customers']));
        }
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
      return view('customer_category.add');
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
      ]);
      if ($validator->fails()) {
        $err = 'Incomplete data';
        return response()->json([
          'err' => $err,
        ]);
      }else{
        $category               = new CustomerCategory;
        $category->id           = Uuid::uuid4()->toString(); //toString();
        $category->company_id   = Auth::user()->company_id;
        $category->name         = $request->name;
        $category->level        = $request->level;
        $category->default      = $request->default;
        $category->notes        = $request->notes;
        $category->save();

        $cnt = 'Successfully';
        $url = 'customer/main';
        $typ = 'POST';
        $tab = 'category_tab';
        return response()->json([
          'cnt' => $cnt,
          'url' => $url,
          'typ' => $typ,
          'tab' => $tab,
          'err' => $err
        ]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $category = CustomerCategory::find($id);
      return view('customer_category.edit', compact(['category']));
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
      $err  = '';
      $validator = Validator::make(request()->all(), [
        'name'  => 'required',
      ]);
      if ($validator->fails()) {
        $err = 'Incomplete data';
        return response()->json([
          'err' => $err,
        ]);
      }else{
        $category            = CustomerCategory::find($id);
        $category->name      = $request->name;
        $category->level     = $request->level;
        $category->default   = $request->default;
        $category->notes     = $request->notes;
        $category->save();

        $cnt = 'Successfully';
        $url = 'customer/main';
        $typ = 'POST';
        $tab = 'category_tab';
        return response()->json([
          'cnt' => $cnt,
          'url' => $url,
          'typ' => $typ,
          'tab' => $tab,
          'err' => $err
        ]);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
      $err = '';
      $explode    = explode(",", $id);

        for ($c = 0; $c < sizeof($explode); $c++) {
          $data = CustomerCategory::find($explode[$c])->delete();
        }

      $cnt = 'Successfully';
      $url = 'customer/main';
      $typ = 'POST';
      $tab = 'category_tab';
      return response()->json([
        'err' => $err,
        'cnt' => $cnt,
        'url' => $url,
        'tab' => $tab,
        'typ' => $typ
      ]);
    }
  }
