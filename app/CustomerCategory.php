<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerCategory extends Model
{
  protected $table = 'customer_categories';
  protected $fillable = [
    'id',
    'company_id',
    'name',
    'level',
    'default',
    'notes'
  ];

  public $incrementing = false;
  protected $primaryKey = 'id';

  public static function search_customer_category($request){
      // dd($request);
    $categories = CustomerCategory::where('name', 'like', '%'.$request['name'].'%')
    ->where('level', 'like', '%'.$request['level'].'%')
    ->where('default', 'like', '%'.$request['default'].'%')
    ->paginate(25);

      // ->toSql();
    return $categories;
  }
}
