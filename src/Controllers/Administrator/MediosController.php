<?php


namespace DanielSann\InmoWeb\Controllers\Administrator;


use App\Http\Controllers\Controller;

use DanielSann\InmoWeb\Models\Medio;
use Illuminate\Support\Facades\Request;


class MediosController extends Controller
{


    public function index()
    {
        $data = Medio::all();
        return view('InmoWebAdmin::medios', compact('data'));
    }

    public function create()
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        $data = Medio::find($id);
        Medio::destroy($id);
        return redirect()->route('medios.index');
    }

}
