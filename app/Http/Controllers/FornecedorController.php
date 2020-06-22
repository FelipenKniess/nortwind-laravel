<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FornecedorController extends Controller
{

    public function index(){
        $fornecedores = \App\Fornecedor::paginate(10);

        return view('fornecedores.index', compact('fornecedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $fornecedor = DB::table('fornecedores')->select('IDFornecedor')->orderBy('IDFornecedor','DESC')->limit(1)->get();
        return view('fornecedores.create', compact('fornecedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $data = $request->all();

        $fornecedores = \App\Fornecedor::create($data);

        return redirect()->route('fornecedores.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $fornecedor = \App\Fornecedor::find($id);


        return view('fornecedores.edit', compact('fornecedor'));
    }

    public function update(Request $request, $id){
        $data = $request->all();

        $fornecedor = \App\Fornecedor::find($id);
        $fornecedor->update($data);

        return redirect()->route('fornecedores.index');
    }


    public function destroy($id)
    {
        $fornecedor = \App\Fornecedor::find($id);
        $fornecedor->delete();

        return redirect()->route('fornecedores.index');
    }
}
