<?php


namespace DanielSann\InmoWeb\Controllers\Administrator;


use App\Http\Controllers\Controller;

use DanielSann\InmoWeb\Models\Tipo;
use Illuminate\Http\Request;


class TipoController extends Controller
{

    public function index()
    {
        $data = Tipo::all();
        return view('InmoWebAdmin::tipos.index', compact('data'));
    }

    public function create()
    {
        $data = new Tipo();
        return view('InmoWebAdmin::tipos.edit', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Tipo::create($request->all());
        return redirect()->route('tipos.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data = Tipo::findOrFail($id);
        return view('InmoWebAdmin::tipos.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Tipo::find($id);
        $data->update($request->except('_method'));

        return redirect()->route('tipos.index');
    }

    public function destroy($id)
    {
        $data = Tipo::find($id);
        Tipo::destroy($id);
        return redirect()->route('tipos.index');
    }
}