<?php

namespace App\Http\Controllers;

use App\Models\Faculdade;
use App\Models\LstSalas;
use Illuminate\Http\Request;


class UniversidadeController extends Controller
{
    private $faculdade;
    private $lstSalas;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->faculdade = new Faculdade();
        $this->lstSalas = new LstSalas();
    }

    public function index()
    {

        $faculdade = $this->faculdade->all();
        return view('index', compact('faculdade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salas = $this->lstSalas->all();
        $faculdade = $this->faculdade->all();

        return view('create', compact('salas','faculdade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->faculdade->create([
            'sigla'=>$request->sigla,
            'bloco'=>$request->bloco,
            'orcamento'=>$request->orcamento,
            'nome'=>$request->nome
        ]);

        return view('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $faculdade = $this->faculdade->find($id);
//        return view('show', compact('faculdade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salas = $this->lstSalas->all();
        $faculdade=$this->faculdade->find($id);
        return view('create',compact('salas','faculdade'));

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
        $this->faculdade->where(['id'=>$id])->update([
            'sigla'=>$request->sigla,
            'bloco'=>$request->bloco,
            'orcamento'=>$request->orcamento,
            'nome'=>$request->nome
        ]);

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
