@extends('master')

@section('meniSredina')
    <ul class="breadcrumb">
        <li><a href="{!! url('/') !!}">{!! trans('meni/meni.home') !!}</a></li>
        <li class="active">{!! trans('meni/meni.seznam-uciteljev') !!}</li>
    </ul>
@endsection

@section('content')
    <div class="page-title">
        <h2><span class="fa fa-users"></span> {!! trans('meni/meni.seznam-uciteljev') !!} <small>{!! count($ucitelji) !!} {!! trans('meni/meni.contacts-nember') !!}</small></h2>
    </div>
    <!-- END PAGE TITLE -->

    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">

        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>{!! trans('meni/meni.iskanje-ucitelji') !!}</p>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="fa fa-search"></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="{!! trans('meni/meni.iskanjeKriterij') !!}"/>
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary">{!! trans('meni/meni.iskanje') !!}</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a class="btn btn-success btn-block" href="{{ route('coach.create') }}"><span class="fa fa-plus"></span> {!! trans('meni/meni.nov-ucitelj') !!}</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
       @if(count($ucitelji) > 0)
        <div class="row">
            @foreach($ucitelji as $ucitelj)
                <div class="col-md-3">
                    <!-- CONTACT ITEM -->
                    <div class="panel panel-default">
                        <div class="panel-body profile">
                            <div class="profile-image">
                                <?php
                                    if($ucitelj->fotografija)
                                        $fotografija= $ucitelj->fotografija;
                                    else
                                        $fotografija = 'no-image.jpg';
                                    ?>
                                <img src="assets/users/{!! $fotografija !!}" alt="{!! $ucitelj->imeUcitelj !!} {!! $ucitelj->priimekUcitelj !!}"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">{!! $ucitelj->imeUcitelj !!} {!! $ucitelj->priimekUcitelj !!}</div>
                                <div class="profile-data-title">Trener</div>
                            </div>
                            <div class="profile-controls">
                                <a href="{{ url('coach', $ucitelj->id) }}" class="profile-control-left"><span class="fa fa-info"></span></a>
                                @if( Auth::user()->role->roleValue >= 11110)
                                 <a href="{{ route('coach.edit', $ucitelj->id) }}" class="profile-control-right"><span class="fa fa-edit"></span></a>
                                @endif
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="contact-info">
                                <p><small>{!! trans('meni/meni.telefon') !!}</small><br/>{!! $ucitelj->telefon !!}</p>
                                <p><small>{!! trans('login/login.email') !!}</small><br/>{!! $ucitelj->emailUcitelj !!}</p>
                                <p><small>{!! trans('meni/meni.naslov') !!}</small><br/>{!! $ucitelj->naslov !!}, {!! $ucitelj->posta->postanStevilka !!} {!! $ucitelj->posta->nazivPoste !!}</p>
                                <p><small>{!! trans('meni/meni.status') !!}</small><br/>
                                @if($ucitelj->statusAktiven === 1)
                                    <span class="label label-success">{!! trans('meni/meni.aktiven') !!}</span></p>
                                @else
                                    <span class="label label-danger">{!! trans('meni/meni.neAktiven') !!}</span></p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- END CONTACT ITEM -->
                </div>
            @endforeach
        </div>
        @else
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">{!! trans('meni/meni.close') !!}</span></button>
                        <strong>{!! trans('meni/meni.napaka') !!}</strong>{!! trans('meni/meni.ucitelj_prazno') !!}
                    </div>
                </div>
            </div>
        @endif

    </div>
    <!-- END PAGE CONTENT WRAPPER -->
    </div>

@endsection
