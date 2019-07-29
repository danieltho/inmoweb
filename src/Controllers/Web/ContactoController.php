<?php
namespace DanielSann\InmoWeb\Controllers\Web;


use App\Http\Controllers\Controller;
use DanielSann\InmoWeb\Models\Propiedade;
use Illuminate\Support\Facades\Request;

class ContactoController extends Controller
{

    public function index(Request $request)
    {
        return view('InmoWeb::contacto');
    }

    public function show($slug,  Propiedade $id)
    {
        return  $id;
    }

}
