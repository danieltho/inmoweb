<?php


namespace DanielSann\InmoWeb\Controllers\Administrator;


use App\Http\Controllers\Controller;
use DanielSann\InmoWeb\Models\Estado;
use DanielSann\InmoWeb\Models\Medio;
use DanielSann\InmoWeb\Models\MediosPropiedades;
use DanielSann\InmoWeb\Models\Moneda;
use DanielSann\InmoWeb\Models\Propiedade;
use DanielSann\InmoWeb\Models\Tipo;
use Illuminate\Http\Request;
use Psy\Util\Str;

class PropiedadeController extends Controller
{

    public function index()
    {
        $data = Propiedade::with('moneda', 'estado', 'tipo')->get();
        $monedas = Moneda::all();
        $estados = Estado::all();
        $tipos = Tipo::all();
        return view('InmoWebAdmin::propiedades.index', compact('data', 'monedas', 'estados', 'tipos'));
    }

    public function create()
    {
        $data = new Propiedade();
        $monedas = Moneda::all();
        $estados = Estado::all();
        $tipos = Tipo::all();

        return view('InmoWebAdmin::propiedades.edit', compact('data', 'monedas', 'estados', 'tipos'));
    }

    public function store(Request $request)
    {


        $data = Propiedade::create($request->all());
        $this->mediaFileUpload($request, $data->id);

        return redirect()->route('propiedades.index');
    }

    protected function mediaFileUpload(Request $request, $id)
    {
        if ($request->hasFile('imagenes_propiedad')) {

            foreach ($request->file('imagenes_propiedad') as $item) {
                $file = $item->store('public/media');
                $source = Medio::create([
                    'titulo' => $file,
                    'file_source' => $file,
                    'is_image' => 1,
                    'url' => $file
                ]);

                MediosPropiedades::create([
                    'propiedad_id' => $id,
                    'medio_id' => $source->id,
                ]);
            }
        }

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data = Propiedade::findOrFail($id);
        $monedas = Moneda::all();
        $estados = Estado::all();
        $tipos = Tipo::all();

        $galeria = MediosPropiedades::with('sourceFile')->where('propiedad_id', $id)->get();



        return view('InmoWebAdmin::propiedades.edit', compact('data', 'monedas', 'estados', 'tipos','galeria'));
    }

    public function update(Request $request, $id)
    {
        $data = Propiedade::find($id);
        $data->update($request->except('_method'));
        $this->mediaFileUpload($request, $id);

        return redirect()->route('propiedades.index');
    }

    public function destroy($id)
    {
        $data = Propiedade::find($id);
        Propiedade::destroy($id);
        return redirect()->route('propiedades.index');
    }
}
