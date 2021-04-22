<?php

namespace App\Http\Controllers;

use App\Models\Faculdade;
use App\Models\LstSalas;
use Illuminate\Http\Request;


class UniversidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        
    }

    public function index()
    {
        $faculdade = Faculdade::all();
        return view('universidade.index', compact('faculdade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salas = LstSalas::all();

        return view('universidade.create', compact('salas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->toArray());
        Faculdade::create([
            'sigla' => $request->get('sigla'),
            'bloco' => $request->get('bloco'),
            'orcamento' => $request->get('orcamento'),
            'nome' => $request->get('nome'),
        ]);

        return redirect('faculdade');
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
    public function edit(Faculdade $faculdade)
    {
        $salas = LstSalas::all();
        
        return view('universidade.edit', compact('salas', 'faculdade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculdade $faculdade)
    {
        Faculdade::where('id', $faculdade->id)->update([
            'sigla' => $request->get('sigla'),
            'bloco' => $request->get('bloco'),
            'orcamento' => $request->get('orcamento'),
            'nome' => $request->get('nome'),
        ]);

        return redirect('faculdade');
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
