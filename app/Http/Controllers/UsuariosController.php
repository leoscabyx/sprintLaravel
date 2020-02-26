<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Usuario;

class UsuariosController extends Controller
{
    public function index()
    {
        //
        $usuarios = Usuario::paginate(10);
        return view('adminUsuarios', [ 'usuarios' => $usuarios ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarioNuevo = new Usuario();

        $usuarioNuevo->name = $request["name"];
        $usuarioNuevo->surname = $request["surname"];
        $usuarioNuevo->email = $request["email"];
        $usuarioNuevo->tipoUsuario = $request["tipoUsuario"];
        $usuarioNuevo->password = Hash::make($request["pass"]);

        $usuarioNuevo->save();

        return redirect("/adminUsuarios");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $usuarioEditado = Usuario::find($request["id"]);

        $usuarioEditado->name = $request["name"];

        $usuarioEditado->surname = $request["surname"];

        $usuarioEditado->tipoUsuario = $request["tipoUsuario"];

        $usuarioEditado->save();

        return redirect("/adminUsuarios");
    }
        
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        
        $usuarioBorrado = Usuario::find($request["id"]);

        $usuarioBorrado->delete();
        return redirect("/adminUsuarios");

    }
}
