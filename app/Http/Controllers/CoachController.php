<?php

namespace App\Http\Controllers;

use App\Model\Kraji;
use App\Model\Posta;
use Auth;
use App\User;
use App\Model\Ucitelj;
use Illuminate\Http\Request;

use App\lib\Costum;

use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCoachRequest;
use Session;

class CoachController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ucitelji = Ucitelj::where('id', '>', 0)->get();

        return  view('ucitelj.index', compact('ucitelji'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posta = Posta::orderBy('nazivPoste')->lists('nazivPoste', 'postanStevilka');
        return  view('ucitelj.create', compact('posta', 'kraji'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCoachRequest $request, Ucitelj $ucitelj)
    {
        $imageUpload = new Costum();
        $geslo = $imageUpload->passwordGenerate();
        $fotografija = '';

        if( $request->hasFile('fotografija')) {
            $img = $request->file('fotografija');
            $fotografija = $imageUpload->imageUpload($img);
        }

        $trener =  $ucitelj->create($request->all());

        $trener->fill(['fotografija' => $fotografija])->save();



        User::create([
            'name'          =>  $request->get('imeUcitelj'),
            'surname'       =>  $request->get('priimekUcitelj'),
            'status'        =>  1,
            'role_id'       =>  3,
            'email'         =>  $request->get('emailUcitelj'),
            'words_id'      =>  $geslo['id'],
            'ucitelj_id'    =>  $trener->id,
            'password'      =>  bcrypt($geslo['words'].$geslo['id']),
            ]);


        flash( trans('meni/meni.ucitelj_ok') );

        return redirect('coach');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ucitelj = Ucitelj::find($id);

        //return $ucitelj->selekcije;
        return view('ucitelj.show', compact('ucitelj'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if( Auth::user()->role->roleValue >= 11110) {


            $posta = Posta::orderBy('nazivPoste')->lists('nazivPoste', 'postanStevilka');
            $ucitelj = Ucitelj::findOrFail($id);


            return view('ucitelj.edit', compact('ucitelj', 'posta'));

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCoachRequest $request, $id)
    {
        $ucitelj = Ucitelj::findOrFail($id);

        $ucitelj->fill($request->input())->save();

        $imageUpload = new Costum();

        if( $request->hasFile('fotografija')) {
            $img = $request->file('fotografija');
            $fotografija = $imageUpload->imageUpload($img);
            $ucitelj->fill(['fotografija' => $fotografija])->save();
        }


        flash()->success(trans('meni/meni.trener_urejen') . $ucitelj->imeUcitelj." " . $ucitelj->priimekUcitelj  )->important();

        return redirect('coach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "OK";
    }
}
