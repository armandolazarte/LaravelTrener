@extends('master')

@section('meniSredina')
    <ul class="breadcrumb">
        <li><a href="{!! url('/') !!}">{!! trans('meni/meni.home') !!}</a></li>
        <li><a href="{!! url('/selekcije') !!}">{!! trans('meni/selekcije.selekcije') !!}</a></li>
        <li class="active">{!! trans('meni/selekcije.nova-selekcija') !!}</li>
    </ul>
@endsection

@section('content')

    <div class="page-title">
        <h2><span class="fa fa-users"></span> {!! trans('meni/selekcije.dodaj-novo-selekcijo') !!} </h2>
    </div>
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">

                {!! Form::open(['route' => 'selekcije.store', 'files' => 'true', 'class' => 'form-horizontal']) !!}
                <div class="panel panel-default">


                    @include('selekcija/partials/_form', ['submitButtonText' =>  trans('meni/selekcije.poslji'), 'naslovniTekst' => '<strong>' .trans('meni/selekcije.nova') .'</strong> ' .trans('meni/selekcije.selekcija')])

                </div>
                {!! Form::close() !!}

            </div>
        </div>

    </div>
@endsection
@section('javascript_file')
    <script type="text/javascript" src="{{URL::asset('assets/js/plugins/bootstrap/bootstrap-file-input.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/plugins/bootstrap/bootstrap-select.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>
@endsection