<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return 'Main page';
        //return view('welcome');
    }

    public function testGet(Request $request)
    {
        $name = $request->input('name');
        $age = $request->input('age');

        return view('qaz.asd', [
            'name' => $name,
            'age' => $age
        ]);
    }

    public function testPost()
    {
        return "post";
    }
}
