<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
    public function index()
    {
      $usuario = new Usuario();
      return $usuario->all();

    }

    
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->correo = $request->correo;
        $usuario->fecharegistro = $request->fecharegistro;
        $usuario->save();
        return "usuario guardado correctamente";
    }

   
    public function show(string $id)
    {
        return Usuario::where('id',$id)->get();
    }

   
   
    public function update(Request $request, string $id)
    {
        $usuario = Usuario::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->correo = $request->correo;
        $usuario->fecharegistro = $request->fecharegistro;
        $usuario->save();
        return "usuario editado correctamente";
    }

  
    public function destroy(string $id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return "Usuario eliminado correctamente";
    }
}
