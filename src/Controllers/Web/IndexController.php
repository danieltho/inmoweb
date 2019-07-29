<?php
namespace DanielSann\InmoWeb\Controllers\Web;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index()
    {
        return view('InmoWeb::index');
    }

}