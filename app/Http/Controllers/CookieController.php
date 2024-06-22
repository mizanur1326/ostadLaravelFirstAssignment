<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function getCookieValue(Request $request)
    {
        $cookieValue = $request->cookie('access_token');
        
        return response()->json(['access_token' => $cookieValue]);
    }
}
