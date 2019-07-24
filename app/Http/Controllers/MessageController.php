<?php
/**
 * Author: huy
 * Date:   2019-07-24
 * Time:   09:38
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function test(Request $request)
    {
        $message = $request->input('message');
        return response()->json(['msg' => $message]);
    }
}