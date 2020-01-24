<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Matcher\Ducktype;

class PetsController extends Controller
{
    public function index(){
        
        $pets = \App\Pet::all();
        // return view('petsIndex', ['pets'=> $pets]);
        return view('petsIndex', compact('pets'));
    }

    public function create(){
        $owners = \App\Owner::all();
        return view('petsCreate', compact('owners'));
    }

    public function store(Request $request){
        $dados = $request->all();
        
        $pet = new \App\Pet();
        $pet->name = $dados['name'];
        $pet->rga = $dados['rga'];
        $pet->data_nascimento = $dados['data_nascimento'];
        $pet->owner_id = $dados['owner_id'];
        

        $pet->save();   
        return back();
    }

    public function edit(Request $request, $id){
        // Model que pega todos os owner
        $owners = \App\Owner::all();

        // Model para buscar o pet
        $pet =\App\Pet::find($id);

        return view('petsEdit', compact('owners', 'pet'));
    }

    public function update(Request $request, $id){
        $dados = $request->all();
        
        $pet = \App\Pet()::find($id);
        $pet->name = $dados['name'];
        $pet->rga = $dados['rga'];
        $pet->data_nascimento = $dados['data_nascimento'];
        $pet->owner_id = $dados['owner_id'];

        $pet->save();   
    }

    public function destroy($id){
        $pet = \App\Pet()::find($id);
        $pet->delete();

        return back();
    }
}
