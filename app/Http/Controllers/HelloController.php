<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function greet($name = null)
    {
        $greeting = $name ? "hello world $name" : "hello world";
        return response()->json(['message' => $greeting]);
    }

    public function greetWithParams(Request $request)
    {
        $name = $request->query('name', 'world');
        return response()->json(['message' => "hello world $name"]);
    }
}
