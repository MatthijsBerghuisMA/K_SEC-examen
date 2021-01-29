<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LaravelCrud extends Controller
{
    function index(){
        $data = array(
            'list'=> DB::table('crud')->get()
        );

        return view('crud.index', $data);
    }
    function add(Request $request){

        $request->validate([
            'name'=>'required',
            'text'=>'required',
            'description'=>'required',
        ]);

        $query = DB::table('crud')->insert([
            'name'=>$request->input('name'),
            'text'=>$request->input('text'),
            'description'=>$request->input('description'),
            'file'=>$request->input('file')
        ]);

    }

    function edit($id){

        $row = DB::table('crud')
                 ->where('id', $id)
                 ->first();
        $data = [
            'Info'=>$row,
            'Title'=>'Edit'
        ];

        return view('crud.edit', $data);
    }

    function update(Request $request) {
        $request->validate([
            'name'=>'required',
            'text'=>'required',
            'description'=>'required'
        ]);

        $updating = DB::table('crud')
            ->where('id', $request->input('cid'))
            ->update([
               'name'=>$request->input('name'),
               'text'=>$request->input('text'),
               'description'=>$request->input('description')
            ]);
        return redirect('home');
    }

    function delete($id){
        $delete = DB::table('crud')
                    ->where('id', $id)
                    ->delete();
        return redirect('home');
    }

    public function uploadFile(Request $request)
    {

    }
}
