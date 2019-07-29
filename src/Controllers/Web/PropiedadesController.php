<?php
namespace DanielSann\InmoWeb\Controllers\Web;


use App\Http\Controllers\Controller;
use DanielSann\InmoWeb\Models\Propiedade;
use Illuminate\Support\Facades\Request;

class PropiedadesController extends Controller
{

    public function index(Request $request)
    {
        return view('InmoWeb::busqueda');
    }

    public function show($slug,  Propiedade $propiedade)
    {
        return view('InmoWeb::propiedad_detalle');
    }

}
