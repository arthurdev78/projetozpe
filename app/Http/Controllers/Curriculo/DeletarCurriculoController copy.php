<?php

namespace App\Http\Controllers\Curriculo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Curriculo\EditarCurriculoRequest;
use App\Models\Curriculo\Curriculo;
use Exception;
use Illuminate\Http\Request;

class DeletarCurriculoController extends Controller
{
   
    private $curriculo;
    public function __construct(Curriculo $curriculo)
    {
        $this->curriculo = $curriculo;
    }
    public function __invoke(EditarCurriculoRequest $request, $id = null)
 { 
        try {
            $curriculo = $this->curriculo->findOrfail($id);
             $curriculo->delete();


        return response ()->json($curriculo,200);
    } catch (Exception $e) {
        return response ()->json ($e->getMessage());
          }
    
    }
}
