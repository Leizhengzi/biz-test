<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeywordsController extends Controller
{
    public function index(Request $request)
    {
        $words = [];
        $id = 0;
        $start = microtime(true);
        while(true) {
            $res = DB::select('select * from keywords where id > :id limit 50000', ['id' => $id]);

            if (!$res) {
                break;
            }

            $id = end($res)->id;
            $words = array_merge($words, $res);
        }
        $end = microtime(true);
        $time = $end-$start;
        $words = json_encode($words);

        file_put_contents(base_path() . '/public/test.txt', $words);

        return view('welcome');
    }
}
