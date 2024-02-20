<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }

    // public function greeting() {
    //     return view('blog.hello', ['name' => 'Lukman']);
    // }
    public function greeting() {
        return view('blog.hello')
        ->with('name','Lukman')
        ->with('occupation', 'Astronaut');
    }
}
