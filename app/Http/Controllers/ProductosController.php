<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;
use App\Categoria;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listadoProductos()
    {
        //
        $productos = Producto::paginate(10);
        return view('productos', [ 'productos' => $productos]);
    }

    public function index()
    {
        //
        $productos = Producto::paginate(10);
        $categorias = Categoria::all();
        return view('adminProductos', [ 'productos' => $productos, 'categorias' => $categorias]);
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
        $productoNuevo = new Producto();

        /*if(isset($request["imagen"])){
            $ruta = $request->file("imagen")->store("public");
            $nombreArchivo = basename($ruta);
            $productoNuevo->imagen = $nombreArchivo;
        }else{
            $productoNuevo->imagen = "sinImagen.jpg";
        }*/

        $imageName = 'noDisponible.jpg';
        if( $request->file('imagen') ) {
            //$imageName = time().'.'.request()->prdImagen->getClientOriginalExtension();
            $imagen = $request->file('imagen');
            //$imagen->getClientOriginalExtension();
            $imageName = $request->imagen->getClientOriginalName();
            $request->imagen->move(public_path('img/'), $imageName);
        }

        $productoNuevo->nombre = $request["nombre"];
        $productoNuevo->precio = $request["precio"];
        $productoNuevo->idCategoria = $request["categoria"];
        $productoNuevo->descripcion = $request["descripcion"];
        $productoNuevo->estado = $request["estado"];
        $productoNuevo->imagen = $imageName;



        $productoNuevo->save();

        return redirect("/adminProductos");
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
        $producto = Producto::find($id);
        return view('detalle', [ 'producto' => $producto ]);
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
        $prodEditado = Producto::find($request["idProducto"]);

        /*if(isset($request["imagen"])){
            $ruta = $request->file("imagen")->store("public");
            $nombreArchivo = basename($ruta);
            $prodEditado->imagen = $nombreArchivo;
        }*/

        $imageName = 'noDisponible.jpg';
        if( $request->file('imagen') ) {
            //$imageName = time().'.'.request()->prdImagen->getClientOriginalExtension();
            $imagen = $request->file('imagen');
            //$imagen->getClientOriginalExtension();
            $imageName = $request->imagen->getClientOriginalName();
            $request->imagen->move(public_path('img/'), $imageName);
        }

        $prodEditado->nombre = $request["nombre"];
        $prodEditado->precio = $request["precio"];
        $prodEditado->idCategoria = $request["categoria"];
        $prodEditado->descripcion = $request["descripcion"];
        $prodEditado->estado = $request["estado"];
        $prodEditado->imagen = $imageName;

        $prodEditado->save();

        
        return redirect("/adminProductos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $prodBorrado = Producto::find($request["idProducto"]);

        $prodBorrado->delete();
        return redirect("/adminProductos");
    }
}
