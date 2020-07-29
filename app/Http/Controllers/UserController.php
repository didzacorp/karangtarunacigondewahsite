<?php

namespace App\Http\Controllers;

use App\User;
use Image;
use File;
use Response;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class UserController extends Controller
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
      // dd(Auth::user()->company_id);
      $arrayRespond = $request->all();
      if (empty(sizeof($arrayRespond))) {
        $users  = User::where('company_id', Auth::user()->company_id)->paginate(25);
      }else{
        $users = User::search_users($request->all());
        // dd($request->all());
      }

      if ($request->ajax())
        return view('users.table', compact(['users']));
      else
        return view('users.index', compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('users.add');
      return view('users.add');
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

        // dd($request->all());
      $validator = Validator::make(request()->all(), [
        'name'  => 'required',
        'email'  => 'required',
        'password'  => 'required',
      ]);
      // dd(request()->all());
      if ($validator->fails()) {
        $err = 'Incomplete data';
        return response()->json([
          'err' => $err,
        ]);
      }else{
        $user            = new User;
        $user->id        = Uuid::uuid4()->toString();
        $user->company_id= Auth::user()->company_id;
        $user->name      = $request->name;
        $user->email     = $request->email;
        $user->password  = Hash::make($request->password);
        $user->role      = $request->role;
        $user->save();

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
        // dd($id);
      $user = User::find($id);
      return view('users.edit', compact(['user']));
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
      $err = '';

      $validator = Validator::make(request()->all(), [
        'name'  => 'required',
        'email'  => 'required',
      ]);
      // dd(request()->all());
      if ($validator->fails()) {
        $err = 'Incomplete data';
        return response()->json([
          'err' => $err,
        ]);
      }else{
        if (!empty($request->password)) {
          $user            = User::find($id);
          $user->name      = $request->name;
          $user->email     = $request->email;
          $user->password  = Hash::make($request->password);
          $user->role      = $request->role;
          $user->save();
        }else{
          $user            = User::find($id);
          $user->name      = $request->name;
          $user->email     = $request->email;
          $user->role      = $request->role;
          $user->save();

          $cnt = 'Successfully';
          $url = '';
          return response()->json([
            'cnt' => $cnt,
            'url' => $url,
            'err' => $err
          ]);
        }
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
      $url = 'users/main';
      $typ = 'POST';
      $cnt = 'Successfully';
      $explode    = explode(",", $id);

        for ($c = 0; $c < sizeof($explode); $c++) {
          $data = User::find($explode[$c])->delete();
        }

      return response()->json([
        'err' => $err,
        'cnt' => $cnt,
        'url' => $url,
        'typ' => $typ
      ]);
    }

    public function search(Request $request)
    {

      $users = User::search_users($request->all());
      return view('users.table', compact(['users']));
    }

    public function main()
    {
      $users  = DB::table('users')->paginate(25);
      return view('users.main', compact(['users']));
    }
  }
