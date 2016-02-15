@extends('master')

@section('meniSredina')
    <ul class="breadcrumb">
        <li><a href="{!! url('/') !!}">{!! trans('meni/meni.home') !!}</a></li>
        <li class="active">{!! trans('meni/ucenci.seznam-ucencev') !!}</li>
    </ul>
@endsection

@section('content')

    <div class="page-title">
        <h2><span class="fa fa-group"></span> {!! trans('meni/ucenci.seznam-ucencev') !!}</h2>
    </div>
    <!-- END PAGE TITLE -->

    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                                <div class="col-md-4">
                                    <a class="btn btn-success btn-block pull-left" href="{{ route('ucenec.create') }}"><span class="fa fa-plus"></span> {!! trans('meni/ucenci.nov-ucenec') !!}</a>
                                </div>
                    </div>
                </div>

            </div>
        </div>

        @if(count($ucenci) > 0)
        <div class="row">
            <div class="col-md-12">
                <!-- START DEFAULT DATATABLE -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{!! trans('meni/ucenci.seznam-ucencev') !!}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table datatable table-bordered table-striped table-actions">
                                <thead>
                                <tr>
                                    <th width="10">{!! trans('meni/ucenci.fotografija-prikaz') !!}</th>
                                    <th> {!! trans('meni/ucenci.ime-priimek') !!}</th>
                                    <th> {!! trans('meni/ucenci.spol') !!}</th>
                                    <th> {!! trans('meni/ucenci.datumRojstva') !!}</th>
                                    <th> {!! trans('meni/ucenci.naslov') !!}</th>
                                    <th> {!! trans('meni/ucenci.selekcija') !!}</th>
                                    <th> {!! trans('meni/ucenci.akcija') !!}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ucenci as $ucenec)
                                <tr>
                                    <td>
                                        @if($ucenec->fotografija)
                                            <div class="user">
                                                <img src="assets/users/{!! $ucenec->fotografija !!}" >
                                            </div>
                                        @else
                                            <div class="user">
                                                <img src="assets/users/no-image.jpg" >
                                            </div>
                                        @endif

                                    </td>
                                    <td>{!! $ucenec->imeUcenec. ' ' .$ucenec->priimekUcenc  !!}</td>
                                    <td>
                                        @if($ucenec->spol === 1)
                                            Moški
                                        @else
                                            Ženska
                                        @endif
                                    </td>
                                    <td>{!! $ucenec->datumRojstva  !!}</td>
                                    <td>{!! $ucenec->naslov .', '.  $ucenec->posta->postanStevilka .' '. $ucenec->posta->nazivPoste!!}</td>
                                    <td>
                                       @if( $ucenec->selekcije)
                                            @foreach( $ucenec->selekcije as $selekcije)
                                                {!! $selekcije->nazivSelekcije !!}<br/>
                                            @endforeach
                                       @else
                                        /
                                       @endif

                                    </td>
                                    <td>
                                        <a class="btn btn-default btn-rounded btn-condensed btn-sm" href="{{ route('ucenec.edit', $ucenec->id) }}"><span class="fa fa-pencil"></span> {!! trans('meni/ucenci.uredi') !!}</a>
                                        <a class="btn btn-info btn-rounded btn-condensed btn-sm" href="{{ url('ucenec', $ucenec->id) }}"><span class="fa fa-info"></span> {!! trans('meni/ucenci.ogled') !!}</a>
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
                        <strong>{!! trans('meni/meni.napaka') !!}</strong>{!! trans('meni/meni.ucitelj_prazno') !!}
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

