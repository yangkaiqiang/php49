<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index1($page=''){
    	return view('home/index/index');
    }

    public function index2($page=''){
    	return view('index/abcdefg');
    }

    public function index3($page=''){
    	return '3';
    }
}
