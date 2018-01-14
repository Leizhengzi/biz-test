<?php

namespace App\Http\Controllers;

use App\Keywords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeywordsController extends Controller
{
    public function index(Request $request)
    {
        $words = [];
        $id = $request->id;

        $res = DB::select('select * from keywords where id > :id limit 500', ['id' => $id]);

        $words = array_merge($words, $res);

        return response()->json(['status' => 200, 'data' => $words]);
    }
}
