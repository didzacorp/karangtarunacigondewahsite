<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
	protected $table = 'companies';
  protected $fillable = [
    'id',
    'user_id',
    'code',
    'name',
    'logo',
    'background',
    'phone',
    'address',
    'subscription_plan',
    'expired_at',
    'serial_key',
    'serial_key',
    'balance',
  ];
    //
  public $incrementing = false;
  protected $primaryKey = 'id';
}
