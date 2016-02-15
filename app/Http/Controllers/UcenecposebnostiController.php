<?php

namespace App\Http\Controllers;

use App\Model\Ucenecposebnosti;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UcenecposebnostiController extends Controller
{
    public function index()
    {
        //
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
    public function store(Request $request, Ucenecposebnosti $cenecposebnosti)
    {
        $cenecposebnosti::create($request->all());



        flash( 'Uspešno ste vnesli posebnosti učenca.');

        return redirect(url('ucenec', $request->get('ucenec_id')));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ucenecposebnosti $ucenecposebnosti)
    {

        return View('posebnosti.show', compact('ucenecposebnosti') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ucenecposebnosti $ucenecposebnosti)
    {
         return View('posebnosti.edit', compact('ucenecposebnosti', 'ucenec') );
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
        return $request->all();
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
