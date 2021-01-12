<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\api\CandidatoPaisModel;

class CandidatoPaisController extends Controller
{
    function list() {
        $candidato_pais = CandidatoPaisModel::withTrashed()->with(['candidato_pais'])->get();

        $this->authorize('list-candidato_pais');

        return view('panel/candidato_pais/list', ['candidato_pais' => $candidato_pais]);
    }

    function form(Request $request, $id = null) {

        $dataForm = is_null($id) ? null : CandidatoPaisModel::find($id);

        $this->authorize('form-candidato_pais', $dataForm);

        $candidato_pais = null;
        if ($id) {
          $candidato_pais = CandidatoPaisModel::find($id);

          return view('panel/candidato_pais/form');
        }

    }
}
