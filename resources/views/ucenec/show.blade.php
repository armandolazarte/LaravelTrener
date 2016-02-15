@extends('master')

@section('meniSredina')
    <ul class="breadcrumb">
        <li><a href="{!! url('/') !!}">{!! trans('meni/meni.home') !!}</a></li>
        <li><a href="{!! url('/ucenec') !!}">{!! trans('meni/ucenci.seznam-ucencev') !!}</a></li>
        <li class="active">{!! trans('meni/ucenci.ucenec-pregled-profila') !!}</li>
    </ul>
@endsection

@section('content')

    <div class="page-title">
        <h2><span class="fa fa-user"></span> {!! trans('meni/ucenci.ucenec-pregled-profila') !!}</h2>
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
                            <h3><span class="fa fa-user"></span> {!! $ucenec->imeUcenec . ' ' . $ucenec->priimekUcenc !!}</h3>
                            <p>{!! trans('meni/meni.strokovniDelavec') !!}</p>
                            <div class="text-center" id="user_image">
                                @if($ucenec->fotografija)
                                    <img src="/assets/users/{!! $ucenec->fotografija !!}"  width="200px" class="img-thumbnail">
                                @else
                                    <img src="/assets/users/no-image.jpg"/>
                                @endif

                            </div>
                        </div>
                        <div class="panel-body form-group-separated">
                            <div class="form-group">
                                <label class="col-md-4 col-xs-5 control-label">#ID</label>
                                <div class="col-md-8 col-xs-7 line-height-30">{!! $ucenec->id  !!}</div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-xs-5 control-label">{!! trans('meni/meni.status') !!}</label>
                                <div class="col-md-8 col-xs-7 line-height-30">
                                    @if($ucenec->status === 1)
                                        <span class="label label-success">{!! trans('meni/meni.aktiven') !!}</span></p>
                                    @else
                                        <span class="label label-danger">{!! trans('meni/meni.neAktiven') !!}</span></p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-xs-5 control-label">{!! trans('login/login.email') !!}</label>
                                <div class="col-md-8 col-xs-7 line-height-30">{!! $ucenec->emailNaslov  !!}</div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-xs-5 control-label">{!! trans('meni/meni.datum') !!}</label>
                                <div class="col-md-8 col-xs-7 line-height-30">{!! date('j.n.Y', strtotime($ucenec->datumRojstva))  !!}
                                    <?php
                                    $leta = new \App\Model\Ucitelj();
                                    print '('.$leta->leta($ucenec->datumRojstva).' let)';
                                    ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 col-xs-5 control-label">{!! trans('meni/meni.telefon') !!}</label>
                                <div class="col-md-8 col-xs-7 line-height-30">{!! $ucenec->telefon  !!}</div>
                            </div>

                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-6 col-sm-8 col-xs-7">
                <form action="#" class="form-horizontal">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3><span class="fa fa-search"></span> {!! trans('meni/ucenci.profile-ucenci') !!}</h3>
                        </div>
                        <div class="panel-body form-group-separated">
                            <div class="form-group">
                                <label class="col-md-3 col-xs-5 control-label">{!! trans('meni/meni.ime') !!}</label>
                                <div class="col-md-8 col-xs-7 line-height-30">{!! $ucenec->imeUcenec  !!}</div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-5 control-label">{!! trans('meni/meni.priimek') !!}</label>
                                <div class="col-md-8 col-xs-7 line-height-30">{!! $ucenec->priimekUcenc  !!}</div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-5 control-label">{!! trans('meni/meni.naslov') !!}</label>
                                <div class="col-md-8 col-xs-7 line-height-30">{!! $ucenec->naslov  !!}, {!! $ucenec->posta->postanStevilka  !!} {!! $ucenec->posta->nazivPoste  !!}</div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-5 control-label">{!! trans('meni/ucenci.posebnosti') !!}</label>
                                <div class="col-md-9 col-xs-7 line-height-30">
                                   @if(count($posebnosti) > 0)
                                       @foreach($posebnosti as $key => $posebnost)
                                            <a href="#" class="list-group-item">
                                                <span class="contacts-title">    {!! $posebnost->posebnost !!}</span>
                                                <div class="list-group-controls">

                                                    <button type="button" class="btn btn-primary btn-rounded solsoShowModal" data-toggle="modal" data-target="#solsoCrudModal" data-href="{!! route('ucenecposebnosti.edit', $posebnost->id) !!}" data-modal-title="test modal"><span class="fa fa-pencil"></span></button>
                                                    <button class="btn btn-danger btn-rounded"><span class="fa fa-eraser"></span></button>
                                                    @if(count($posebnosti) == $key+1)
                                                        <button class="btn btn-info btn-rounded" data-toggle="modal" data-target="#modal_large"><span class="fa fa-plus"></span></button>
                                                    @endif
                                                </div>
                                            </a>

                                       @endforeach
                                   @else
                                       Ni posebnosti
                                    <div class="list-group-controls">
                                        <button class="btn btn-info btn-rounded" data-toggle="modal" data-target="#modal_large"><span class="fa fa-plus"></span></button>
                                    </div>
                                    @endif
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-md-12 col-xs-5">
                                        <a class="btn btn-primary btn-rounded pull-left" href="{{ route('ucenec.edit', $ucenec->id) }}"><span class="fa fa-pencil"></span>{!! trans('meni/ucenci.urediUcenca') !!}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

               <div class="panel panel-default tabs">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">{!! trans('meni/ucenci.kontakt') !!}</a></li>
                        <li><a href="#tab2" data-toggle="tab">Send Message</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane panel-body active" id="tab1">
                            <div class="list-group list-group-contacts border-bottom">
                                @if(count($ucenec->userucenec) > 0 )
                                    @foreach($ucenec->userucenec as $ucenecKontakt)
                                        <a href="#" class="list-group-item">
                                            <div class="list-group-status status-online"></div>
                                            <span class="contacts-title"> {!! $ucenecKontakt->name !!}  {!! $ucenecKontakt->surname !!}</span>
                                            <p>{!! $ucenecKontakt->email !!}</p>
                                            <div class="list-group-controls">
                                                <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
                                                <button class="btn btn-danger btn-rounded"><span class="fa fa-eraser"></span></button>
                                            </div>
                                        </a>
                                    @endforeach
                                @else
                                    {!! trans('meni/ucenci.niPodatkovKontakt') !!}
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
                            <div class="col-md-8 col-xs-7 line-height-30">{!! date('j.n.Y H:i:s', strtotime($ucenec->created_at))  !!}</div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 col-xs-5 control-label">{!! trans('meni/ucenci.placiloObveznosti') !!}</label>
                            <div class="col-md-8 col-xs-7 line-height-30"><span class="label label-danger label-form">Plačilo zapadlo</span> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 col-xs-5 control-label">{!! trans('meni/ucenci.skupinaSelekcije') !!}</label>
                            <div class="col-md-8 col-xs-7 line-height-30">
                                @if(count($ucenec->selekcije) > 0 )
                                    @foreach( $ucenec->selekcije as $selekcijaUcenec)
                                        {!! $selekcijaUcenec->nazivSelekcije !!}<br/>
                                    @endforeach
                                @else
                                    /
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    @include('modal.modal-delete-stikalo')
    @include('modal.modal-crud')

    <div class="modal" id="modal_large" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="largeModalHead">Posebnosti učenca</h4>
                    </div>
                    <div class="modal-body">
                       {!! Form::open(['route' => 'ucenecposebnosti.store', 'files' => 'true', 'class' => 'form-horizontal']) !!}
                        @include('posebnosti/partials/_form', ['submitButtonText' =>  trans('meni/ucenci.poslji'), 'vrednost'=> 1,  'naslovniTekst' => '<strong>' .trans('meni/meni.nov') .'</strong> ' .trans('meni/ucenci.trener_dva')])
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


@endsection
@section('javascript_file')
            @include('include.javascriptmodal')
@endsection
