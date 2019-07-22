<?php

namespace App\Http\Controllers\backend\book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models;
class book_roomController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $models;
    public function __construct()
    {
        $this->models = new models();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function room_detail($id)
    {
        $dt = $this->models->c_room()->where('cr_id',$id)->get();
        $data = [];
        foreach ($dt as $key => $value) {
           $data[$key] = $value;
           $data[$key]->m_type_room;
           $data[$key]->c_room_image;
           $data[$key]->c_room_features;
        }
        $type_room = $this->models->m_type_room()->get();
        return view('frontend.room.room_detail',compact('data','type_room'));
    }
}