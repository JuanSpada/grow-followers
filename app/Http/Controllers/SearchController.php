<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function autocomplete(Request $request){
        $data = User::select('name')
                ->where('name', 'LIKE', "%{$request->input('query')}")
                ->get();
    return response()->json($data);
    }
}
