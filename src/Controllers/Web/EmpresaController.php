<?php
namespace DanielSann\InmoWeb\Controllers\Web;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class EmpresaController extends Controller
{

    public function index(Request $request)
    {
        return view('InmoWeb::empresa');
    }

    public function show($slug,  Propiedade $id)
    {
        return  $id;
    }

}
