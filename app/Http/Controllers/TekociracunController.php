<?php

namespace App\Http\Controllers;

use App\Model\Posta;
use App\Model\Tekociracun;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTekociracunRequest;

class TekociracunController extends Controller
{
    public function index()
    {
        $trr = Tekociracun::all();
        return view('tekociracun.index', compact('trr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posta = Posta::orderBy('nazivPoste')->lists('nazivPoste', 'postanStevilka');
        return view('tekociracun.create', compact('posta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTekociracunRequest $request, Tekociracun $tekociracun)
    {
        $tekociracun->create($request->all());


        flash('Uspešno ste vnesli nov tekoči račun.');

        return redirect('tekociracun');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tekociracun $tekociracun)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tekociracun $tekociracun)
    {
        $posta = Posta::orderBy('nazivPoste')->lists('nazivPoste', 'postanStevilka');
        return view('tekociracun.edit', compact('tekociracun', 'posta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateTekociracunRequest $request, Tekociracun $tekociracun)
    {
        $tekociracun->update($request->all());
        flash('Uspešno ste uredili podatke tekočega računa.');

        return redirect('tekociracun');
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
