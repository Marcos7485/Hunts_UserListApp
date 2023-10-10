<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller


{
    public function index()
    {
        $response = Http::get('https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0');


        if ($response->successful()) {

            $resultado = $response->json();

            $data = [
                'users' => $resultado['users']
            ];

            return view('inicio', $data);
        } else {

            return response()->json(['error' => 'No se pudo obtener los datos de la API'], 500);
        }
    }

    // Método para actualizar un usuario por ID en la API externa
    public function update(Request $request, $id)
    {
        die('update');

        // Realiza una solicitud HTTP PUT a la API externa para actualizar el usuario
        $response = Http::put('https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0' . $id, [
            'name' => $request->input('name'),
            'age' => $request('age'),
            'email' => $request->input('email'),
            // Agrega otros campos para actualizar según sea necesario
        ]);

        if ($response->successful()) {
            // La actualización fue exitosa
            return redirect('/')->with('success', 'Usuario actualizado exitosamente');
        } else {
            // Maneja errores si la solicitud a la API falla
            return redirect('/')->with('error', 'No se pudo actualizar el usuario');
        }
    }
    // DEMO access with GET
    public function update_demo($id)
    {

        $msg = [
            'msg' => "Update element id: $id"
        ];

        return view('update', $msg);
    }

    // DEMO access with GET
    public function destroy($id)
    {
        $msg = [
            'msg' => "Destroy element id: $id"
        ];
        return view('delete', $msg);


        

        // Realiza una solicitud HTTP DELETE a la API externa para eliminar el usuario
        $response = Http::delete('https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0' . $id);

        if ($response->successful()) {
            // La eliminación fue exitosa
            return redirect('/')->with('success', 'Usuario eliminado exitosamente');
        } else {
            // Maneja errores si la solicitud a la API falla
            return redirect('/')->with('error', 'No se pudo eliminar el usuario');
        }
    }
}
