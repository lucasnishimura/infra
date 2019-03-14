<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;

class funcionario extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        return view('admin.funcionario.inserir');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados_form = $_POST;
        
        $dados_form['data_nascimento'] = $this->format_date($dados_form['data_nascimento']);
        $dados_form['data_admissao'] = $this->format_date($dados_form['data_admissao']);

        unset($dados_form['_token']);
        
        DB::table('funcionarios')->insert($dados_form);

        return redirect('funcionarios');
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dados_form = $_POST;

        $dados_form['data_nascimento'] = $this->format_date($dados_form['data_nascimento']);
        $dados_form['data_admissao'] = $this->format_date($dados_form['data_admissao']);

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

    /**
     * format date in DB standard.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function format_date($data)
    {
        $data = explode('/',$data);
        $data = array_reverse($data);
        $data = implode('-',$data);
        $date = new DateTime($data);
        return $date->format('Y-m-d');
    }
}
