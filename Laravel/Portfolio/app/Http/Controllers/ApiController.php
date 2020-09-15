<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    function getInfo(Request $request) {
        $item = DB::table('experiences')->where('category_id', request('category'))->where('id', request('id'))->get();
        
        return $item;
    }

    function edit(Request $request) {

        try {
            DB::table('experiences')->where('id', request('id'))->update([
                'title' => request('title'),
                'position' => request('position'),
                'description' => request('description'),
                'location' => request('location'),
                'start_date' => request('startdate'),
                'end_date' => request('enddate')
                ]);
                return ['success' => true];
        } catch (\Throwable $th) {
            echo $th;
        }

    }
}
