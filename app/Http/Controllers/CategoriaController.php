<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Categoria::orderBy('created_at', 'desc')->get();
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->estado = '1';
        $categoria->save();
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
        /*$categoria = Categoria::findOrFail($request->Categoriaid);
        $categoria->nombre = $request->nombre;
        $categoria->estado = '1';
        $categoria->save();*/

        $id=$request->id;
        $nombre=$request->nombre;
        try{
            $categoria= Categoria::findOrFail($id);
            $categoria->nombre=$nombre;
            $categoria->estado = '1';
            $categoria->save();
            return 'Se ha modificado la categoria correctamente';
        }
        catch(\Exception $e){
            $response['error'] = $e->getMessage();
            return response()->json($response, 500);
        }

    }   
    public function drop(Categoria $categoria){
        try{
            $categoria->delete();
            return 'Se ha eliminado la categoria correctamente';
        }catch(\Exception $e){
            $response['error'] = $e->getMessage();
            return response()->json($response, 500);
        }
       
    }
    
    public function desactivar(Request $request)
    {
        $categoria = Categoria::findOrFail($request->id);
        $categoria->estado = '0';
        $categoria->save();
    }
    public function activar(Request $request)
    {
        $categoria = Categoria::findOrFail($request->id);
        $categoria->estado = '1';
        $categoria->save();
    }

}
