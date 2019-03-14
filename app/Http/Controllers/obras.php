<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;

class obras extends Controller
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
        $obras = DB::table('obras')->where('id','>',0)->get();

        return view('admin.obras.listar',['obras'=>$obras]); //ao inves de varra coloca ponto
    }
    
    
    public function create()
    {
        return view('admin.obras.inserir'); //ao inves de varra coloca ponto
    }
}
