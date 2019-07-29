<?php


namespace DanielSann\InmoWeb\Controllers\Administrator;


use App\Http\Controllers\Controller;
use DanielSann\InmoWeb\Models\Moneda;
use DanielSann\InmoWeb\Models\Propiedade;
use Illuminate\Http\Request;
use Psy\Util\Str;

class MonedaController extends Controller
{

    public function index()
    {
        $data = Moneda::all();
        return view('InmoWebAdmin::monedas.index', compact('data'));
    }

    public function create()
    {
        $data = new Moneda();
        return view('InmoWebAdmin::monedas.edit', compact('data'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Moneda::create($request->all());
        return redirect()->route('monedas.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data = Moneda::findOrFail($id);
        return view('InmoWebAdmin::monedas.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Moneda::find($id);
        $data->update($request->except('_method'));

        return redirect()->route('monedas.index');
    }

    public function destroy($id)
    {
        $data = Moneda::find($id);
        Moneda::destroy($id);
        return redirect()->route('monedas.index');
    }
}