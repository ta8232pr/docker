<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class TestsController extends Controller
{
    public function test() {
        return view('test');
    }
}
