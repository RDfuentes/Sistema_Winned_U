<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Facturacion;
use App\Http\Requests\FacturacionRequest; 
use Illuminate\Support\Facades\Redirect; 
use DB;

class FacturacionController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
        }
    
        public function index(Request $request)
        {
            if($request)
            {
                $query=trim($request->get('searchText'));
                $facturacion=DB::table('facturacion as f')
                ->join('clientes as c','f.id_cliente','=','c.id_cliente')
                ->join('productos as p','f.id_producto','=','p.id_producto')

                ->select('f.id_factura', 'f.no_factura', 'f.id_cliente', 'f.fecha', 'f.id_producto', 'f.precio', 'f.cantidad', 'f.total', 'f.ai',
                'c.nombre as clientes', 'c.apellido as clientess', 
                'p.producto as productos', 'p.marca as productoss', 'p.modelo as productosss')

                ->orwhere('f.no_factura','LIKE','%'.$query.'%')
                ->where('f.ai','=','1')
                ->orwhere('c.nombre','LIKE','%'.$query.'%')
                ->where('f.ai','=','1')
                ->orwhere('p.producto','LIKE','%'.$query.'%')
                ->where('f.ai','=','1')
                ->orwhere('f.fecha','LIKE','%'.$query.'%')
                ->where('f.ai','=','1') 
    
                ->orderBy('f.id_factura','asc')
                ->paginate(7);
                return view('facturacion.index',["facturacion"=>$facturacion,"searchText"=>$query]);
            }
        }

    
        public function create() 
        { 
             //agregado 2 lineas
            $clientes=DB::table('clientes')->where('ai','=','1')->get();
            $productos=DB::table('productos')->where('ai','=','1')->get();
            return view("facturacion.create",["clientes"=>$clientes],["productos"=>$productos]);// retorna a la vista principal que se ha creado en resource
            
        }
    
        public function store(FacturacionRequest $request) 
        {
            $facturacion=new Facturacion;
            $facturacion->no_factura=$request->get('no_factura');
            $facturacion->id_cliente=$request->get('id_cliente');
            $facturacion->fecha=$request->get('fecha');
            $facturacion->id_producto=$request->get('id_producto');
            $facturacion->precio=$request->get('precio'); 
            $facturacion->cantidad=$request->get('cantidad');
            $facturacion->total=$request->get('total');
            $facturacion->ai='1';
            $facturacion->save();
            return Redirect::to('facturacion');
        }
    
        public function show($id_factura) 
        {
            return view("facturacion.show",["facturacion"=>Facturacion::findOrFail($id_factura)]);
        }
    
    
        public function edit($id_factura) 
        {   
            //Agregado 3 lineas
            $facturacion=Facturacion::findOrFail($id_factura);
            $clientes=DB::table('clientes')->where('ai','=','1')->get();
            $productos=DB::table('productos')->where('ai','=','1')->get();
            return view("facturacion.edit",["facturacion"=>$facturacion,"clientes"=>$clientes,"productos"=>$productos]);
        }
    
        public function update(FacturacionRequest $request,$id_factura) 
        {   
            $facturacion=Facturacion::findOrFail($id_factura); 
            $facturacion->no_factura=$request->get('no_factura');
            $facturacion->id_cliente=$request->get('id_cliente');
            $facturacion->fecha=$request->get('fecha');
            $facturacion->id_producto=$request->get('id_producto');
            $facturacion->precio=$request->get('precio'); 
            $facturacion->cantidad=$request->get('cantidad');
            $facturacion->total=$request->get('total');
            $facturacion->update();
            return Redirect::to('facturacion');
        }
    
        public function destroy($id_factura) 
        {
            $facturacion=Facturacion::findOrFail($id_factura);
            $facturacion->ai='0';  
            $facturacion->update();
            return Redirect::to('facturacion');
        }
}
