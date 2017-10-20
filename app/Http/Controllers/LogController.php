<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/20
 * Time: 15:00
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Cache;
use Log;

class LogController extends Controller{
    public function log(Request $request){
        Log::debug($_SERVER["REMOTE_ADDR"].','.$request->input('intro').':'.$request->input('data'));
    }
}