@extends('master')

@section('meniSredina')
    <ul class="breadcrumb">
        <li><a href="{!! url('/') !!}">{!! trans('meni/meni.home') !!}</a></li>
        <li class="active">{!! trans('meni/trr.tekoracun') !!}</li>
    </ul>
@endsection

@section('content')

    <div class="page-title">
        <h2><span class="fa fa fa-eur"></span> {!! trans('meni/trr.tekoracun') !!}</h2>
    </div>
    <!-- END PAGE TITLE -->

    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                                <div class="col-md-4">
                                    <a class="btn btn-success btn-block pull-left" href="{{ route('tekociracun.create') }}"><span class="fa fa-plus"></span> {!! trans('meni/trr.nov-ucenec') !!}</a>
                                </div>
                    </div>
                </div>

            </div>
        </div>

        @if(count($trr) > 0)
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h3 class="panel-title">{!! trans('meni/trr.vneseni-trr') !!}</h3>
                        </div>

                        <div class="panel-body panel-body-table">

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-actions">
                                    <thead>
                                    <tr>
                                        <th width="50">Št.</th>
                                        <th> {!! trans('meni/trr.naziov') !!}</th>
                                        <th> {!! trans('meni/trr.stevilka-trr') !!}</th>
                                        <th> {!! trans('meni/trr.bic') !!}</th>
                                        <th> {!! trans('meni/trr.nazivRacuna') !!}</th>
                                        <th> {!! trans('meni/trr.naslov') !!}</th>
                                        <th> {!! trans('meni/trr.aktiven') !!}</th>
                                        <th> {!! trans('meni/selekcije.akcija') !!}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($trr as $key => $tekoracun)
                                        <tr id="trow_1">
                                            <td class="text-center">{!! $key+1 !!}</td>
                                            <td>{!! $tekoracun -> naziv !!}</td>
                                            <td>{!! $tekoracun -> stevilka !!}</td>
                                            <td>{!! $tekoracun -> bic !!}</td>
                                            <td>{!! $tekoracun -> nazivBanke !!}</td>
                                            <td>{!! $tekoracun -> naslovBanke !!}, {!! $tekoracun -> posta->postanStevilka !!}{!! $tekoracun -> posta->nazivPoste !!}</td>
                                            <td>
                                                @if($tekoracun -> aktiven === 1)
                                                    <span class="label label-success">{!! trans('meni/meni.aktiven') !!}</span>
                                                @else
                                                    <span class="label label-danger">{!! trans('meni/meni.neAktiven') !!}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-default btn-rounded btn-condensed btn-sm" href="{{ route('tekociracun.edit', $tekoracun->id) }}"><span class="fa fa-pencil"></span> {!! trans('meni/ucenci.uredi') !!}</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        @else
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">{!! trans('meni/meni.close') !!}</span></button>
                        <strong>{!! trans('meni/meni.napaka') !!}</strong>{!! trans('meni/trr.trr-prazno') !!}
                    </div>
                </div>
            </div>
        @endif

    </div>
@endsection
@section('javascript_file')
    <script type="text/javascript" src="{{URL::asset('assets/js/plugins/icheck/icheck.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
@endsection

