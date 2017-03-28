<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lanche;
use App\Http\Requests\LancheRequest;

class LancheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lanches = Lanche::all();

        return view('index', ['lanches' => $lanches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LancheRequest $request)
    {
        Lanche::create($request->all());

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     *O metodo show geralmente é usado para exibir algo individual
     */
    public function show($id)
    {
      $lanche = Lanche::find($id);

      return view('show', ['lanche' => $lanche]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lanche= Lanche::find($id);

        return view('edit', ['lanche' => $lanche]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LancheRequest $request, $id)
    {
      Lanche::find($id)->update($request->all());

      return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lanche::find($id)->delete();
        return redirect('/');
    }
}
