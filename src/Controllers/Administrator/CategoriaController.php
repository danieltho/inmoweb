<?php


namespace DanielSann\InmoWeb\Controllers\Administrator;


use App\Http\Controllers\Controller;

use DanielSann\InmoWeb\Models\Categoria;
use DanielSann\InmoWeb\Models\Estado;
use Illuminate\Http\Request;


class CategoriaController extends Controller
{

    public function index()
    {
        $data = Categoria::all();
        return view('InmoWebAdmin::categorias.index', compact('data'));
    }

    public function create()
    {
        $data = new Categoria();
        return view('InmoWebAdmin::categorias.edit', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Categoria::create($request->all());
        return redirect()->route('categorias.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data = Categoria::findOrFail($id);
        return view('InmoWebAdmin::categorias.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Categoria::find($id);
        $data->update($request->except('_method'));

        return redirect()->route('categorias.index');
    }

    public function destroy($id)
    {
        $data = Categoria::find($id);
        Categoria::destroy($id);
        return redirect()->route('categorias.index');
    }
}