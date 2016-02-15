<?php

namespace App\Http\Controllers;

use App\Model\Tekociracun;
use App\Model\Ucitelj;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\http\Requests\CreateSelekcijaRequest;
use App\Http\Controllers\Controller;
use App\Model\Selekcije;
use Symfony\Component\HttpKernel\Tests\Debug\TraceableEventDispatcherTest;

class SelekcijeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selekcije =  Selekcije::all();
        return view('selekcija.index', compact('selekcije'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tekociracun = Tekociracun::where('aktiven', 1)->lists('naziv', 'id');
        $trener = Ucitelj::where('statusAktiven', '=', 1)->get();

        return view('selekcija.create', compact('trener', 'tekociracun'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSelekcijaRequest $request, Selekcije $selekcija)
    {

        $selekcija =  $selekcija->create($request->all());
        $trenerji = $request->get('trener');

        if($selekcija)
            $selekcija->ucitelj()->attach($trenerji);


        flash('Uspešno ste vnesli novo selekcijo.');

        return redirect('selekcije');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Selekcije $selekcije)
    {

        return view('selekcija.show', compact('selekcije'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Selekcije $selekcije)
    {
        $tekociracun = Tekociracun::where('aktiven', 1)->lists('naziv', 'id');
        $trener = Ucitelj::where('statusAktiven', '=', 1)->get();
        return view('selekcija.edit', compact('selekcije', 'trener', 'tekociracun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateSelekcijaRequest $request, Selekcije $selekcije)
    {

        $selekcije->update($request->all());

        if($request->input('trener'))
            $selekcije->ucitelj()->sync($request->input('trener'));

        return redirect('selekcije');
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
