<?php


namespace DanielSann\InmoWeb\Controllers\Administrator;


use App\Http\Controllers\Controller;
use DanielSann\InmoWeb\Models\Desarrollo;

use Illuminate\Http\Request;


class DesarrollosController extends Controller
{

    public function index()
    {
        $data = Desarrollo::all();
        return view('InmoWebAdmin::desarrollos.index', compact('data'));
    }

    public function create()
    {
        $data = new Desarrollo();

        return view('InmoWebAdmin::desarrollos.edit', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Desarrollo::create($request->all());
        return redirect()->route('desarrollos.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data = Desarrollo::findOrFail($id);

        return view('InmoWebAdmin::desarrollos.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Desarrollo::find($id);
        $data->update($request->except('_method'));

        return redirect()->route('desarrollos.index');
    }

    public function destroy($id)
    {
        $data = Desarrollo::find($id);
        Desarrollo::destroy($id);
        return redirect()->route('desarrollos.index');
    }
}