<?php


namespace DanielSann\InmoWeb\Controllers\Administrator;


use App\Http\Controllers\Controller;

use DanielSann\InmoWeb\Models\MediosPropiedades;


class MediosPropiedadesController extends Controller
{


    public function destroy($id)
    {
        $data = MediosPropiedades::find($id);
        MediosPropiedades::destroy($id);
        return redirect()->route('propiedades.edit', $data->propiedad_id);
    }
}
