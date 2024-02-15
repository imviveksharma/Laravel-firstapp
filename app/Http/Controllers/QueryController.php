<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Query;

class QueryController extends Controller
{
    public function store(Request $request){
        $queries = new Query;
        $queries->name = $request->name;
        $queries->mobile = $request->mobile;
        $queries->address = $request->address;
        $queries->service = $request->service;
         $queries->save();
         return redirect('/');
    }
}
