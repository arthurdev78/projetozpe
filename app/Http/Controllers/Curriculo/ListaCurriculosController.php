<?php

namespace App\Http\Controllers\Curriculo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curriculo\Curriculo;

class ListaCurriculosController extends Controller
{
    private $curriculos;
    public function __construct (Curriculo $curriculos){
        $this->curriculos = $curriculos;
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $curriculos = $this->curriculos->get();
        return response ()->json($curriculos, 200);   
    }
}
