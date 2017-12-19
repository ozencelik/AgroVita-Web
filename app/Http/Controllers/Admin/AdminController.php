<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{

    public function __contruct()
    {
      $this->middleware('auth:admin');
    }

    public function index()
    {
      //$users = DB::select('select * from users');
      return view('admin.dashboard');
    }
}
