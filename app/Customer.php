<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class Customer extends Model
{
  protected $table = 'customers';
  protected $fillable = [
    'id',
    'company_id',
    'customer_group_id',
    'name',
    'email',
    'phone',
    'address',
    'notes'
  ];
    //
  public $incrementing = false;
  protected $primaryKey = 'id';

  public static function customers(){
    $customers = DB::table('customers')
                 ->select('customer_categories.name', 'companies.name as company_name', 'customers.name as names', 'customers.company_id', 'customers.email', 'customers.phone', 'customers.address', 'customers.notes', 'customers.id')
                 ->join('customer_categories', 'customer_categories.id', '=', 'customers.customer_group_id')
                 ->join('companies', 'companies.id', '=', 'customers.company_id')
                 ->paginate(25);
    return $customers;
  }

  public static function search_customer($request){
      // dd($request);
    $company_id = Auth::user()->company_id;
    $customers   = DB::table('customers')
                 ->select('customer_categories.name', 'companies.name as company_name', 'customers.name as names', 'customers.company_id', 'customers.email', 'customers.phone', 'customers.address', 'customers.notes', 'customers.id')
                 ->join('customer_categories', 'customer_categories.id', '=', 'customers.customer_group_id')
                 ->join('companies', 'companies.id', '=', 'customers.company_id')
                 ->where('customers.name', 'like', '%'.$request['name'].'%')
                 ->where('customers.company_id', $company_id)
                 ->where('customers.customer_group_id', 'like', '%'.$request['category'].'%')
                 ->paginate(25);

      // ->toSql();
    return $customers;
  }
}
