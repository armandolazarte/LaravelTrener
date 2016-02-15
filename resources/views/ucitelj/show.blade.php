@extends('master')

@section('meniSredina')
    <ul class="breadcrumb">
        <li><a href="{!! url('/') !!}">{!! trans('meni/meni.home') !!}</a></li>
        <li><a href="{!! url('/coach') !!}">{!! trans('meni/meni.seznam-uciteljev') !!}</a></li>
        <li class="active">{!! $ucitelj->imeUcitelj . '' . $ucitelj->priimekUcitelj !!}</li>
    </ul>
@endsection

@section('content')

    <div class="page-title">
        <h2><span class="fa fa-user"></span> {!! trans('meni/meni.pregled-trenerja') !!}</h2>
    </div>
    <!-- END PAGE TITLE -->

    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
        <!--
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <strong>Important!</strong> Main feature of this page is "Change photo" function. Press button "Change photo" and try to use this awesome feature.
                </div>
            </div>
        </div>-->

        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-5">

                <form action="#" class="form-horizontal">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3><span class="fa fa-user"></span> {!! $ucitelj->imeUcitelj . ' ' . $ucitelj->priimekUcitelj !!}</h3>
                            <p>{!! trans('meni/meni.strokovniDelavec') !!}</p>
                            <div class="text-center" id="user_image">
                                @if($ucitelj->fotografija)
                                    <img src="/assets/users/{!! $ucitelj->fotografija !!}"  width="200px" class="img-thumbnail">
                                @else
                                    <img src="/assets/users/no-image.jpg"/>
                                @endif

                            </div>
                        </div>
                        <div class="panel-body form-group-separated">
                            <div class="form-group">
                                <label class="col-md-4 col-xs-5 control-label">#ID</label>
                                <div class="col-md-8 col-xs-7 line-height-30">{!! $ucitelj->id  !!}</div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-xs-5 control-label">{!! trans('meni/meni.status') !!}</label>
                                <div class="col-md-8 col-xs-7 line-height-30">
                                    @if($ucitelj->statusAktiven === 1)
                                        <span class="label label-success">{!! trans('meni/meni.aktiven') !!}</span></p>
                                    @else
                                        <span class="label label-danger">{!! trans('meni/meni.neAktiven') !!}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-xs-5 control-label">{!! trans('login/login.email') !!}</label>
                                <div class="col-md-8 col-xs-7 line-height-30">{!! $ucitelj->emailUcitelj  !!}</div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-xs-5 control-label">{!! trans('meni/meni.datum') !!}</label>
                                <div class="col-md-8 col-xs-7 line-height-30">{!! date('j.n.Y', strtotime($ucitelj->datumRojstva))  !!}</div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-xs-5 control-label">{!! trans('meni/meni.telefon') !!}</label>
                                <div class="col-md-8 col-xs-7 line-height-30">{!! $ucitelj->telefon  !!}</div>
                            </div>

                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-6 col-sm-8 col-xs-7">

                <form action="#" class="form-horizontal">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3><span class="fa fa-search"></span> {!! trans('meni/meni.profile') !!}</h3>
                        </div>
                        <div class="panel-body form-group-separated">
                            <div class="form-group">
                                <label class="col-md-3 col-xs-5 control-label">{!! trans('meni/meni.ime') !!}</label>
                                <div class="col-md-8 col-xs-7 line-height-30">{!! $ucitelj->imeUcitelj  !!}</div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-5 control-label">{!! trans('meni/meni.priimek') !!}</label>
                                <div class="col-md-8 col-xs-7 line-height-30">{!! $ucitelj->priimekUcitelj  !!}</div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-5 control-label">{!! trans('meni/meni.naslov') !!}</label>
                                <div class="col-md-8 col-xs-7 line-height-30">{!! $ucitelj->naslov  !!}, {!! $ucitelj->posta->postanStevilka  !!} {!! $ucitelj->posta->nazivPoste  !!}</div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-5 control-label">{!! trans('meni/meni.opis-ucitelja') !!}</label>
                                <div class="col-md-8 col-xs-7 line-height-30">{!! $ucitelj->opis_trener  !!}</div>
                            </div>
                        </div>
                    </div>
                </form>

               <div class="panel panel-default tabs">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">{!! trans('meni/meni.selekcije') !!}</a></li>
                        <li><a href="#tab2" data-toggle="tab">Send Message</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane panel-body active" id="tab1">
                            <div class="list-group list-group-contacts border-bottom">
                                @if(count($ucitelj->selekcije)>0 )
                                    @foreach($ucitelj->selekcije as $selekcije)
                                        <a href="#" class="list-group-item">
                                            <div class="list-group-status status-online"></div>
                                            <span class="contacts-title">{!! $selekcije->nazivSelekcije !!}</span>
                                            <p>{!! $selekcije->obrazlozitev !!}</p>
                                            <div class="list-group-controls">
                                                <form method="get" action="{{ url('selekcije', $selekcije->id) }}">
                                                    <button class="btn btn-primary btn-rounded"><span class="fa fa-info"></span></button>
                                                </form>
                                            </div>
                                        </a>
                                    @endforeach
                                @else
                                    <div class="alert alert-warning " role="alert">
                                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">{!! trans('meni/meni.close') !!}</span></button>
                                        <strong>{!! trans('meni/meni.opozorilo') !!}</strong> {!! trans('meni/meni.trener-ni-selekcije') !!}
                                    </div>
                                @endif
                            </div>

                        </div>
                        <div class="tab-pane panel-body" id="tab2">
                            <p>Feel free to contact us for any issues you might have with our products.</p>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" class="form-control" placeholder="youremail@domain.com">
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="email" class="form-control" placeholder="Message subject">
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" placeholder="Your message" rows="3"></textarea>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-3">
                <div class="panel panel-default form-horizontal">
                    <div class="panel-body">
                        <h3><span class="fa fa-info-circle"></span> {!! trans('meni/meni.informacije') !!}</h3>
                    </div>
                    <div class="panel-body form-group-separated">
                        <div class="form-group">
                            <label class="col-md-4 col-xs-5 control-label">{!! trans('meni/meni.register') !!}</label>
                            <div class="col-md-8 col-xs-7 line-height-30">{!! date('j.n.Y H:i:s', strtotime($ucitelj->created_at))  !!}</div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 col-xs-5 control-label">{!! trans('meni/meni.lastLogin') !!}</label>
                            <div class="col-md-8 col-xs-7 line-height-30">01:15 21.11.2015</div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 col-xs-5 control-label">{!! trans('meni/meni.skupina') !!}</label>
                            <div class="col-md-8 col-xs-7 line-height-30">Trener</div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
