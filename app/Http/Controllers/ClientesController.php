<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Clientes;
use App\Http\Requests\ClientesRequest; 
use Illuminate\Support\Facades\Redirect; 
use DB;

class ClientesController extends Controller
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
                $Clientes=DB::table('clientes')
                ->orwhere('nit','LIKE','%'.$query.'%')
                ->where('ai','=','1')
                ->orwhere('nombre','LIKE','%'.$query.'%')
                ->where('ai','=','1')
                ->orwhere('apellido','LIKE','%'.$query.'%')
                ->where('ai','=','1')     
    
                ->orderBy('id_cliente','asc')
                ->paginate(7);
                return view('clientes.index',["clientes"=>$Clientes,"searchText"=>$query]);
            }
        }

    
        public function create() 
        { 
            return view("clientes.create");
        }
    
        public function store(ClientesRequest $request) 
        {
            $clientes=new Clientes;
            $clientes->nit=$request->get('nit');
            $clientes->nombre=$request->get('nombre');
            $clientes->apellido=$request->get('apellido');
            $clientes->direccion=$request->get('direccion');
            $clientes->telefono=$request->get('telefono'); 
            $clientes->correo=$request->get('correo');
            $clientes->ai='1';
            $clientes->save();
            return Redirect::to('clientes');
        }
    
        public function show($id_cliente) 
        {
            return view("clientes.show",["clientes"=>Clientes::findOrFail($id_cliente)]);
        }
    
    
        public function edit($id_cliente) 
        {
            return view("clientes.edit",["clientes"=>Clientes::findOrFail($id_cliente)]);
        }
    
        public function update(ClientesRequest $request,$id_cliente) 
        {   
            $clientes=Clientes::findOrFail($id_cliente); 
            $clientes->nit=$request->get('nit');
            $clientes->nombre=$request->get('nombre');
            $clientes->apellido=$request->get('apellido');
            $clientes->direccion=$request->get('direccion');
            $clientes->telefono=$request->get('telefono'); 
            $clientes->correo=$request->get('correo');
            $clientes->update();
            return Redirect::to('clientes');
        }
    
        public function destroy($id_cliente) 
        {
            $clientes=Clientes::findOrFail($id_cliente);
            $clientes->ai='0';  
            $clientes->update();
            return Redirect::to('clientes');
        }
}
