<?php

namespace App\Http\Controllers;

use App\Model\Selekcije;
use App\Model\Ucenecposebnosti;
use Illuminate\Http\Request;
use App\Model\Posta;
use Auth;

use App\User;
use App\Model\Ucenec;
use App\lib\Costum;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUcenecRequest;

class UcenecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ucenci = Ucenec::All();

        return view('ucenec.index', compact('ucenci'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posta = Posta::orderBy('nazivPoste')->lists('nazivPoste', 'postanStevilka');
        $selekcije = Selekcije::where('statusSelekcije', 1)->lists('nazivSelekcije', 'id');

        return view('ucenec.create', compact('posta', 'selekcije'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUcenecRequest $request, Ucenec $ucenec)
    {

        $imageUpload = new Costum();
        $fotografija = '';

        if( $request->hasFile('fotografija')) {
            $img = $request->file('fotografija');
            $fotografija = $imageUpload->imageUpload($img);
        }

        $ucenecNov =  $ucenec->create($request->all());
        $ucenecNov->fill(['fotografija' => $fotografija])->save();

        $ucenecNov->selekcije()->attach($request->get('selekcije'));


        if($request->get('emailSkrbnik'))
        {
            $userUcenec = new Costum();
            $userUcenecIme = $userUcenec->insertUserUcenec($request->get('imeSkrbnik'), $request->get('priimekSkrbnik'), $request->get('emailSkrbnik'));

            $ucenecNov->userucenec()->attach($userUcenecIme->id);
        }

        flash( trans('meni/ucenci.ucenec-dodan') );

        return redirect('ucenec');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ucenec $ucenec)
    {
        $posebnosti = Ucenecposebnosti::where('ucenec_id', $ucenec->id)->get();
        return view('ucenec.show', compact('ucenec', 'posebnosti'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ucenec $ucenec)
    {
            $posta = Posta::orderBy('nazivPoste')->lists('nazivPoste', 'postanStevilka');
            $selekcije  = Selekcije::where('statusSelekcije', 1)->lists('nazivSelekcije', 'id');

            return view('ucenec.edit', compact('ucenec', 'posta', 'selekcije'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateUcenecRequest $request, Ucenec $ucenec)
    {
        $imageUpload = new Costum();

        if( $request->hasFile('fotografija')) {
            $img = $request->file('fotografija');
            $fotografija = $imageUpload->imageUpload($img);
            $ucenec->fill(['fotografija' => $fotografija])->save();
        }

        $ucenec->fill($request->input())->save();

        if(count($request->get('selekcije')) > 0)
            $ucenec->selekcije()->attach($request->get('selekcije'));

        if($request->get('emailSkrbnik'))
        {
            $userUcenec = new Costum();
            $userUcenecIme = $userUcenec->insertUserUcenec($request->get('imeSkrbnik'), $request->get('priimekSkrbnik'), $request->get('emailSkrbnik'));


            $ucenec->userucenec()->attach($userUcenecIme['0']->id);
        }

        flash( trans('meni/ucenci.ucenec-dodan') );

        return redirect('ucenec');
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
