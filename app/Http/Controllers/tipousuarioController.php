<?php

namespace App\Http\Controllers;

use App\Models\TipoUsuario;
use Illuminate\Http\Request;

class TipousarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipousuario = Tipousuario::all();
        return view('tipo_usuario.index', ['tiposUsuarios' => $tipousuario]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipo_usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'usu_nombre' => 'required|string|max:255',
            'usu_email' => 'required|email|unique:tipo_usuario',
            'usu_password' => 'required|string|min:6',
            'usu_genero' => 'required|in:Masculino,Femenino',
            'usu_celular' => 'required|string|max:15',
        ]);
    
        TipoUsuario::create([
            'usu_nombre' => $request->input('usu_nombre'),
            'usu_email' => $request->input('usu_email'),
            'usu_password' => bcrypt($request->input('usu_password')), // Asegura la contraseña
            'usu_genero' => $request->input('usu_genero'),
            'usu_celular' => $request->input('usu_celular'),
        ]);
    
        return redirect()->route('tipo_usuario.index')
            ->with('success', 'Tipo de usuario creado exitosamente.');
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(TipoUsuario $tipousuario)
    {
        return view('tipo_usuario.show', ['tipousuario' => $tipousuario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoUsuario $tipousuario)
    {
        return view('tipo_usuario.edit', ['tipousuario' => $tipousuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoUsuario $tipousuario)
    {
        $request->validate([
            'usu_nombre' => 'required|string|max:255',
            'usu_email' => 'required|email|unique:tipo_usuario,usu_email,'.$tipousuario->id_usuario.',id_usuario',
            'usu_genero' => 'required|in:Masculino,Femenino',
            'usu_celular' => 'required|string|max:15',
        ]);

        $tipousuario->update($request->all());

        return redirect()->route('tipo_usuario.index')
            ->with('success', 'Tipo de usuario actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoUsuario $tipousuario)
    {
        $tipousuario->delete();

        return redirect()->route('tipo_usuario.index')
            ->with('success', 'Tipo de usuario eliminado exitosamente.');
    }
}
