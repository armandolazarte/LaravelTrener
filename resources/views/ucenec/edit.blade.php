@extends('master')

@section('meniSredina')
    <ul class="breadcrumb">
        <li><a href="{!! url('/') !!}">{!! trans('meni/meni.home') !!}</a></li>
        <li><a href="{!! url('/ucenec') !!}">{!! trans('meni/ucenci.seznam-ucencev') !!}</a></li>
        <li class="active">{!! trans('meni/ucenci.uredi-ucenca') !!}</li>
    </ul>
@endsection

@section('content')

    <div class="page-title">
        <h2><span class="fa fa-users"></span> {!! trans('meni/meni.trener-uredi') !!} </h2>
    </div>
    <div class="page-content-wrap">

        <div class="row">
            <div class="col-md-12">



                {!! Form::model($ucenec, ['method' => 'PATCH', 'route' => ['ucenec.update', $ucenec->id], 'files' => 'true', 'class' => 'form-horizontal']) !!}
                <div class="panel panel-default">


                    @include('ucenec/partials/_form', ['submitButtonText' =>  trans('meni/meni.uredi-ucitelja'), 'vrednost'=> 2,'naslovniTekst' => '<strong>' .trans('meni/meni.trener-uredi-big') .'</strong>'])

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