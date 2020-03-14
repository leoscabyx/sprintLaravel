<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pedido;
use App\User;
use App\Producto;
use Auth;


class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        //$usuarios = User::paginate(10);
        $productos = Producto::paginate(10);
        if(Auth::user()->idTipoUsuario == 1){
            $pedidos = Pedido::paginate(10);
            return view('adminPedidos');
        }else{
            $pedidos = Pedido::where('estatus', '=', 1)->paginate(10);
            return view('carrito', [ 'pedidos' => $pedidos, 'productos' => $productos]);
        }
        
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
        //
        
        $pedidoNuevo = new Pedido();
        
        
        $pedidoNuevo->idUsuario = $request["idUsuario"];
        $pedidoNuevo->cantidad = $request["cantidad"];
        $pedidoNuevo->idProducto = $request["idProducto"];
        $pedidoNuevo->estatus = 1;
        $pedidoNuevo->numeroVenta = 0;


        $pedidoNuevo->save();

        return redirect("/carrito");
        
        
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
        //
        $pedidos = Pedido::where('estatus','=',1)->where('idUsuario','=', $request["idUsuario"])->orderBy('numeroVenta', 'desc')->get();

        //obtener el ultimo numero de pedido 
        $numeroVenta = Pedido::orderBy('numeroVenta', 'desc')->get();
        //$numeroVenta = 0;
        //dd($numeroVenta[0]['numeroVenta']);
        if(count($numeroVenta) == 0){
            $numeroVenta = 1;
        }else{
            $numeroVenta = $numeroVenta[0]['numeroVenta'] + 1;
        }
        foreach($pedidos as $p){
            $p->numeroVenta = $numeroVenta;
            $p->estatus = 2;
        
        

            $p->save();
        }

        return redirect("/carrito");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $itemCarrito = Pedido::find($request["idPedido"]);

        $itemCarrito->delete();
        return redirect("/carrito");
    }

    
}
