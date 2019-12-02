<?php

namespace App\Http\Controllers;

use App\Services\ContatoService;
use Illuminate\Http\Request;

class ContatoController extends Controller
{

    protected $contatoService;

    /**
     * ContatoController constructor.
     */
    function __construct(ContatoService $contatoService)
    {
        $this->contatoService = $contatoService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $contatos = $this->contatoService->listarContato();


        foreach ($contatos as $contato)
        {
            echo $contato->con_st_nome;
            echo "<br/>";
                foreach ($contato->telefones as $telefone)
                {
                    echo $telefone->tel_in_telefone;
                    echo "<br/>";
                }

                echo "<hr/>";
        }

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
        $request->validate([
            'con_st_nome'=>'required',
            'con_st_email'=>'required'
        ]);

        return $this->contatoService->salvarContato($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $request->validate([
            'con_st_nome'=>'required',
            'con_st_email'=>'required'
        ]);

        return $this->contatoService->updateContato($request->all(),$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->contatoService->deleteContato($id);
    }
}
