@extends('master')

@section('meniSredina')
    <ul class="breadcrumb">
        <li><a href="{!! url('/') !!}">{!! trans('meni/meni.home') !!}</a></li>
        <li><a href="{!! url('/ucenec') !!}">{!! trans('meni/ucenci.seznam-ucencev') !!}</a></li>
        <li class="active">{!! trans('meni/trr.nov-trr-nov') !!}</li>
    </ul>
@endsection

@section('content')

    <div class="page-title">
        <h2><span class="fa fa-users"></span> {!! trans('meni/trr.nov-trr-nov') !!} </h2>
    </div>
    <div class="page-content-wrap">

        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => 'tekociracun.store', 'files' => 'true', 'class' => 'form-horizontal']) !!}
                <div class="panel panel-default">
                    @include('tekociracun/partials/_form', ['submitButtonText' =>  trans('meni/trr.tekociRacunala-vnesi'), 'naslovniTekst' => '<strong>' .trans('meni/meni.nov') .'</strong> ' .trans('meni/trr.tekociRacunala')])
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