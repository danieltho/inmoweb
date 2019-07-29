<?php


namespace DanielSann\InmoWeb\Controllers\Administrator;


use App\Http\Controllers\Controller;

use DanielSann\InmoWeb\Models\Estado;
use Illuminate\Http\Request;


class EstadoController extends Controller
{

    public function index()
    {
        $data = Estado::all();
        return view('InmoWebAdmin::estados.index', compact('data'));
    }

    public function create()
    {
        $data = new Estado();
        return view('InmoWebAdmin::estados.edit', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Estado::create($request->all());
        return redirect()->route('estados.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data = Estado::findOrFail($id);
        return view('InmoWebAdmin::estados.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Estado::find($id);
        $data->update($request->except('_method'));

        return redirect()->route('estados.index');
    }

    public function destroy($id)
    {
        $data = Estado::find($id);
        Estado::destroy($id);
        return redirect()->route('estados.index');
    }
}