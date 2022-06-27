<?php


namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function listarUsuarios()
    {
        return Usuarios::select()->get();
    }
    public function add(Request $request)
    {
        $usuarios = new Usuarios();
        
        $usuarios->name = $request->name;
        $usuarios->email = $request->email;
        $usuarios->birthday = $request->birthday;

        $usuarios->save();

        return response()->json("Usuario Cadastrado");
    }
    public function find(Request $request,$id)
    {
        return Usuarios::find($id);
    }
    public function remover(Request $request,$id)
    {
        return Usuarios::destroy($id);
    }
}
