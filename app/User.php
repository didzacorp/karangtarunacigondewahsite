<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;

class User extends Authenticatable
{
  use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id', 'company_id', 'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
      'email_verified_at' => 'datetime',
    ];

    public $incrementing = false;
    protected $primaryKey = 'id';

    public static function search_users($request){
      // dd($request);
      $company_id = Auth::user()->company_id;
      // dd($company_id);
      $users = User::where('name', 'like', '%'.$request['name'].'%')
      ->where('role', 'like', '%'.$request['role'].'%')
      ->where('company_id', $company_id)
      ->paginate(25);

      // ->toSql();
      return $users;
    }
  }
