<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class funcionario extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = DB::select('select * from funcionarios where id > ?', [0]);
        // $users = DB::table('funcionarios')->get();
        $func = DB::table('funcionarios')->where('id','>',0)->get();

        return view('admin.funcionario.listar',['funcionarios'=>$func]); //ao inves de varra coloca ponto
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $func = DB::table('funcionarios')->where('id',$id)->first();
        
        return view('admin.funcionario.ver',['func'=>$func]);
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
    public function update(Request $request, $id)
    {
        $dados_form = $_POST;

        $dados_form['data_nascimento'] = date('Y-d-m',strtotime($dados_form['data_nascimento']));

        unset($dados_form['_token']);

        DB::table('funcionarios')
            ->where('id', $id)
            ->update($dados_form);

        return redirect('funcionarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
