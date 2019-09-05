<?php


namespace Dung\Core\app\Http\Controller;


use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    public function index(){
        return view('dung-core::index');
    }
}
