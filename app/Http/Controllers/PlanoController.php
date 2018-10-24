<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanoController extends Controller
{
	
	public function __construct () {
	}
    public function create() {
    	$campos = \App\Campoexperiencia::all();
    	$areas = \App\Areaconhecimento::all();
    	$componentes = \App\Componentecurricular::all();
    	$unidades = \App\Areatematica::all();
    	
		return view("novoPlano", [
				"campos"=> $campos,
				"areas" => $areas,		
				"componentes" => $componentes,
				"unidades" => $unidades,
		
		]);    
    }
    
    public function main() {
	    return view('main');
    }
    
    public function store(Request $request) {
    	
     	if($request->hasFile('file') && $request->file('file')->isValid()) {
    		$upload = $request->file('file')->store('planos');
    		
    		$dados = $request->all();
    		$dados['arquivo'] = $upload;
    		
    		echo $upload;
    		
 			$plano = new \App\Plano($request->all());
 			$plano->arquivo = $upload;
 			
 			if(isset($request->campoexperiencia_id) && $request->campoexperiencia_id != 0)
 				$plano ->campoexperiencia_id = $request->campoexperiencia_id;
 				
 			if(isset($request->areaconhecimento_id) && $request->areaconhecimento_id != 0)
 				$plano ->areaconhecimento_id = $request->areaconhecimento_id;
 				
 			if(isset($request->componentecurricular_id) && $request->componentecurricular_id != 0)
 				$plano ->componentecurricular_id = $request->componentecurricular_id;
 				
 			if(isset($request->areatematica_id) && $request->areatematica_id != 0)
 				$plano ->areatematica_id = $request->areatematica_id;
 			
 			$plano->save();
 			
 			return "foi";
			//Arquivo    	
		//dd($request->all());
		return "foi";   		
    	} else {
				return "arquivo invalido";
		}
    }
    
    public function listar(Request $request) {
		$planos = \App\Plano::all();
		return view("listarPlanos", ["planos" => $planos]);
    }
    
    public function listarCampo(Request $request){
		$planos = \App\Plano::where([['nivel', '=', 1], ['campoexperiencia_id', '=', $request->id]])->get();
		return view("listarPlanos", ["planos" => $planos]);
    }
 
    public function listarUnidade(Request $request){
		$planos = \App\Plano::where([['nivel', '=', 2], ['areatematica_id', '=', $request->id]])->get();
		return view("listarPlanos", ["planos" => $planos]);
    }
	
    public function busca(Request $request){
		$planos = \App\Plano::where('software', 'ilike', '%' . $request->termo . '%')->get();
		return view("listarPlanos", ["planos" => $planos]);
    }


	 public function exibir(Request $request) {
		$plano = \App\Plano::find($request->id);
		if(isset($plano->fonte)) {
			if(!substr( $plano->fonte , 0, 7 ) === "http://")
				$plano->fonte = "http://" . $plano->fonte;		
		}
		return view("exibirPlano", ["plano" => $plano]);
    }
    
}
