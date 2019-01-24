<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AdminController extends Controller
{
    public function index(){

        $id = DB::table('clients')->count();

        return view('admin.index', compact('id'));
    }
}
