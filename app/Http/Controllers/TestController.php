<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use DB;

class TestController extends Controller
{
    public function test(){
        $result = DB::table('box_order')->pluck('order_no');
        dd($result);

    }
}
