<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index(){
        $jogos = Jogo::all();
        return view('jogos.index', ['jogos' => $jogos]);
    }

    public function create(){
        return view('jogos.create');
    }

    public function store(Request $request){
        Jogo::create($request->all());
        return redirect()->route('jogos-index');
    }

    public function edit($id){
        
        $jogos = Jogo::where('id', $id)->first();

        if(!empty($jogos)){
            return view('jogos.edit', ['jogos' => $jogos]);
        } else {
            return redirect()->route('jogos-index');
        }
    }

    public function update(Request $request, $id){
        
        $data = [
            'nome' => $request->nome,
            'ano_criacao' => $request->ano_criacao,
            'valor' => $request->valor
        ];

        Jogo::where('id', $id)->update($data);
        return redirect()->route('jogos-index');
    }

    public function destroy($id){
    
        Jogo::where('id', $id)->delete($id);
        return redirect()->route('jogos-index');
    }
	
	//api Get All
	public function getAll(){
        $jogos = Jogo::all();
        return response($jogos, 200);
    }
	
	// api get
	
	public function get($id){
        $jogos = Jogo::where('id', $id)->first();
         return response($jogos, 200);
    }
	

}
