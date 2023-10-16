<?php

namespace App\Http\Controllers;

use App\Models\IMCData;
use Illuminate\Http\Request;

class IMCCalculatorController extends Controller
{
    public function showForm()
    {
        return view('imc.imc');
    }

    public function calculateIMC(Request $request)
    {
        $data = $request->validate([
            'altura' => 'required|numeric',
            'peso' => 'required|numeric',
        ]);

        $altura = $data['altura'];
        $peso = $data['peso'];
        $imc = $peso / ($altura * $altura);

        // Guarda el resultado en la base de datos
        IMCData::create([
            'altura' => $altura,
            'peso' => $peso,
            'imc' => $imc,
        ]);

        return view('imc.result', ['imc' => $imc]);
    }

}