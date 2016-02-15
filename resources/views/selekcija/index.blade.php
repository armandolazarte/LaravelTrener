@extends('master')

@section('meniSredina')
    <ul class="breadcrumb">
        <li><a href="{!! url('/') !!}">{!! trans('meni/meni.home') !!}</a></li>
        <li class="active">{!! trans('meni/selekcije.selekcije') !!}</li>
    </ul>
@endsection

@section('content')

    <div class="page-title">
        <h2><span class="fa  fa-tasks"></span> {!! trans('meni/selekcije.seznam-selekcij') !!}</h2>
    </div>
    <!-- END PAGE TITLE -->

    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-4">
                            <a class="btn btn-success btn-block pull-left" href="{{ route('selekcije.create') }}"><span class="fa fa-plus"></span> {!! trans('meni/selekcije.nova-selekcija') !!}</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @if(count($selekcije) > 0)
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h3 class="panel-title">Responsive tables</h3>
                        </div>

                        <div class="panel-body panel-body-table">

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-actions">
                                    <thead>
                                    <tr>
                                        <th width="50">Št.</th>
                                        <th>{!! trans('meni/selekcije.naziv-selekcije') !!}</th>
                                        <th>{!! trans('meni/selekcije.starost') !!}</th>
                                        <th>{!! trans('meni/selekcije.stevilo-udelezencev') !!}</th>
                                        <th>{!! trans('meni/meni.trenerji') !!}</th>
                                        <th>{!! trans('meni/meni.status') !!}</th>
                                        <th>{!! trans('meni/selekcije.akcija') !!}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($selekcije as $key => $selekcija)
                                            <tr id="trow_1">
                                                <td class="text-center">{!! $key+1 !!}</td>
                                                <td>{!! $selekcija -> nazivSelekcije !!}</td>
                                                <td>{!! $selekcija -> starostSelekcije !!}</td>
                                                <td>
                                                    @if($selekcija->ucenec)
                                                        {!! count($selekcija->ucenec) !!}
                                                    @endif
                                                </td>
                                                <td>
                                                @if($selekcija->ucitelj)
                                                    @foreach($selekcija -> ucitelj as $ucitelj)
                                                     {!! $ucitelj->imeUcitelj !!}  {!! $ucitelj->priimekUcitelj !!}
                                                        <br/>
                                                     @endforeach
                                                @else

                                                @endif
                                                </td>
                                                <td>
                                                    @if($selekcija -> statusSelekcije === 1)
                                                        <span class="label label-success">{!! trans('meni/meni.aktiven') !!}</span>
                                                    @else
                                                        <span class="label label-danger">{!! trans('meni/meni.aktiven') !!}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a class="btn btn-default btn-rounded btn-condensed btn-sm" href="{{ route('selekcije.edit', $selekcija->id) }}"><span class="fa fa-pencil"></span> {!! trans('meni/ucenci.uredi') !!}</a>
                                                    <a class="btn btn-info btn-rounded btn-condensed btn-sm" href="{{ url('selekcije', $selekcija->id) }}"><span class="fa fa-info"></span> {!! trans('meni/ucenci.ogled') !!}</a>
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
                        <strong>{!! trans('meni/meni.napaka') !!}</strong>{!! trans('meni/selekcije.prazno') !!}
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

