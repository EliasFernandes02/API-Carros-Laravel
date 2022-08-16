<?php

declare(strict_types=1);

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    public function getList()
    {
        return response()->json(
            Carro::all()
        );
    }

    public function getOne(int $id)
    {
        return response()->json(
            Carro::findOrFail($id)
        );
    }

    public function post(Request $request)
    {
        {
            $carro = Carro::create(
                $request->all()
            );
    
            return response()->json($carro);
        }
    

    }

    public function patch(Request $request, int $id)
    {
        $carro = Carro::findOrFail($id);

        $carro->type = $request->get('type');
        $carro->modelo = $request->get('modelo');
        $carro->ano = $request->get('ano');
        $carro->placa = $request->get('placa');

        $carro->save();

        return  response()->json($carro);
    }

    public function delete(int $id) 
    {
        Carro::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Product Deleted',
        ]);
    }
}