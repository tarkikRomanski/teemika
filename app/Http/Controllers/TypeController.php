<?php

namespace App\Http\Controllers;

use App\Type;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(Request $request){

        if($request->isMethod('post')){
            Type::where('id', $request->typeId)
                ->update([
                    'title'=> $request->typeTitle
                ]);
        }

        $data = [ 'types'=>Type::all() ];

        return view('admin.types.typeShow', $data);

    }
}
