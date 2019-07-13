<?php

namespace App\Http\Controllers\catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class catalog_roomController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('c_room')->get();
        return view('backend.catalog.catalog_room.index',compact('data'));
    }
    public function create()
    {
        $type = DB::table('m_type_room')->get();
        $features = DB::table('m_features')->get();
        return view('backend.catalog.catalog_room.create',compact('type','features'));
    }
    public function save(Request $req)
    {
        dd($req->all());
    }
    public function edit()
    {
        return view('catalog.catalog_room.create');
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}
