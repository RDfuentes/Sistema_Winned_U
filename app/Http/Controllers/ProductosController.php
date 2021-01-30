<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Productos;
use App\Http\Requests\ProductosRequest; 
use Illuminate\Support\Facades\Redirect; 
use DB;

class ProductosController extends Controller
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
                $Productos=DB::table('productos')
                ->orwhere('producto','LIKE','%'.$query.'%')
                ->where('ai','=','1')
                ->orwhere('marca','LIKE','%'.$query.'%')
                ->where('ai','=','1')    
    
                ->orderBy('id_producto','asc')
                ->paginate(7);
                return view('productos.index',["productos"=>$Productos,"searchText"=>$query]);
            }
        }

    
        public function create() 
        { 
            return view("productos.create");
        }
    
        public function store(ProductosRequest $request) 
        {
            $productos=new Productos;
            $productos->producto=$request->get('producto');
            $productos->marca=$request->get('marca');
            $productos->modelo=$request->get('modelo');
            $productos->caracteristicas=$request->get('caracteristicas');
            $productos->precio=$request->get('precio'); 
            $productos->descuento=$request->get('descuento');
            $productos->ai='1';
            $productos->save();
            return Redirect::to('productos');
        }
    
        public function show($id_producto) 
        {
            return view("productos.show",["productos"=>Productos::findOrFail($id_producto)]);
        }
    
    
        public function edit($id_producto) 
        {
            return view("productos.edit",["productos"=>Productos::findOrFail($id_producto)]);
        }
    
        public function update(ProductosRequest $request,$id_producto) 
        {   
            $productos=Productos::findOrFail($id_producto); 
            $productos->producto=$request->get('producto');
            $productos->marca=$request->get('marca');
            $productos->modelo=$request->get('modelo');
            $productos->caracteristicas=$request->get('caracteristicas');
            $productos->precio=$request->get('precio'); 
            $productos->descuento=$request->get('descuento');
            $productos->update();
            return Redirect::to('productos');
        }
    
        public function destroy($id_producto) 
        {
            $productos=Productos::findOrFail($id_producto);
            $productos->ai='0';  
            $productos->update();
            return Redirect::to('productos');
        }
}
