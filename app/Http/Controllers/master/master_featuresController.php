<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Validator;
use DB;
// use App\m_features;

class master_featuresController extends Controller
{

    public function index()
    {

    	$data = DB::table('m_features')->get();

        return view('master.master_features.index',compact('data'));
    }
    public function create()
    {
        return view('master.master_features.create');
    }
    public function save(Request $request)
    {

    	//get all name/value
    	$input = $request->all();
    	//check unique row , if exist == 1
    	$check = DB::table('m_features')->where('r_level',$request->r_level)->count();
    	//function check
    	if ($check > 0) {
        	return response()->json(['status'=>'ada']);
    	}
    	//save data
        $data = m_features::create($input);
        //return response 
        if ($data == true) {
        	return response()->json(['status'=>'sukses']);
        }else{
        	return response()->json(['status'=>'gagal']);
        }

    }
    public function edit($id)
    {
    	$data = DB::table('m_features')->where('r_id',$id)->first();

        return view('master.master_features.edit',compact('data'));
    }
    public function update(Request $request)
    {
    	//get all name/value
        $input = $request->except('r_id');
    	//check unique row , if exist == 1
    	// $check = DB::table('m_features')->where('r_level',$request->r_level)->count();
    	$check = DB::table('m_features')
                        ->where('r_id',$request->r_id)
                        ->first();

        if ($check != null) {
            if ($check->r_id != $request->r_id) {
                return response()->json(['status'=>'ada']);
            }
        }
    	//save data
        $data = m_features::where('r_id', $request->r_id)->update($input);
        //return response 
        if ($data == true) {
        	return response()->json(['status'=>'sukses']);
        }else{
        	return response()->json(['status'=>'gagal']);
        }
    }
    public function delete($id)
    {
    	$check = DB::table('m_features')->where('r_id',$id)->delete();

    	if ($check == true) {
    		return response()->json(['status'=>'sukses']);
        }else{
        	return response()->json(['status'=>'gagal']);	
    	}
    }
}
