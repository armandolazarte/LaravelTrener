@extends('master')

@section('meniSredina')
    <ul class="breadcrumb">
        <li><a href="{!! url('/') !!}">{!! trans('meni/meni.home') !!}</a></li>
    </ul>
@endsection

@section('content')
    <div class="page-title">
        <h1>{!! $klub->nazivKluba !!}</h1>
    </div>
    <div class="row">
        <div class="col-md-8">
            <!-- START SALES BLOCK -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>{!! trans('meni/meni.podatkiOsnovni') !!}</h3>
                        <span>{!! trans('meni/meni.podatkiOsnovniDva') !!}</span>
                    </div>
                </div>
                <div class="panel-body panel-body-table">
                    <div class="table-responsive">
                        <table class="table table-condensed table-bordered table-striped">
                            <tbody>
                            <tr>
                                <td><strong>{!! $klub->nazivKluba !!}</strong></td>
                            </tr>
                            <tr>
                                <td>{!! $klub->dejavnostKluba !!}</td>
                            </tr>
                            <tr>
                                <td>{!! $klub->naslovKluba !!}, {!! $klub->posta->postanStevilka !!} {!! $klub->posta->nazivPoste !!}</td>
                            </tr>
                            <tr>
                                <td>{!! $klub->emailKlub !!}</td>
                            </tr>
                            <tr>
                                <td>{!! $klub->telefonKlub !!}</td>
                            </tr>
                            <tr>
                                <td>Davčna št.: {!! $klub->davcnastevilka !!}</td>
                            </tr>
                            <tr>
                                <td>Matična št.: {!! $klub->maticnastevilka !!}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- END SALES BLOCK -->

        </div>
        <div class="col-md-4">

            <!-- START PROJECTS BLOCK -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>{!! trans('meni/meni.selekcije') !!}</h3>
                        <span>{!! trans('meni/meni.selekcijeDva') !!}</span>
                    </div>
                </div>
                <div class="panel-body panel-body-table">

                    <div class="table-responsive">
                        <table class="table table-condensed table-bordered table-striped">
                            <thead>
                            <tr>
                                <th width="50%">{!! trans('meni/meni.nazivselekcije') !!}</th>
                                <th width="20%">{!! trans('meni/meni.selekcijaStarost') !!}</th>
                                <th width="20%">{!! trans('meni/selekcije.stevilo-udelezencev') !!}</th>
                                <th width="20%">{!! trans('meni/meni.status') !!}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($klub->selekcijes as $selekcija)
                            <tr>
                                <td><strong><a href="{{ url('selekcije', $selekcija->id) }}"> {!! $selekcija->nazivSelekcije !!}</a></strong></td>
                                <td>{!! $selekcija->starostSelekcije !!}</td>
                                <td>{!! count($selekcija->ucenec) !!}</td>
                                <td><span class="label label-success">{!! trans('meni/meni.aktiven') !!}</span></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- END PROJECTS BLOCK -->

        </div>d
    </div>

    <div class="row">
        <div class="col-md-4">
            <!-- START SALES & EVENTS BLOCK -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>{!! trans('meni/meni.trenerji') !!}</h3>
                        <span>datumRojstva</span>
                    </div>
                </div>
                <div class="panel-body list-group list-group-contacts">
                    @foreach($trenerji as $trener)
                        <?php
                        if($trener->fotografija)  $fotografija= $trener->fotografija;
                        else $fotografija = 'no-image.jpg';
                        ?>
                        <a href="{{ url('coach', $trener->id) }}" class="list-group-item">
                            <div class="list-group-status status-online"></div>
                            <img src="assets/users/{!! $fotografija !!}" class="pull-left" />
                            <span class="contacts-title">{!! $trener->imeUcitelj !!} {!! $trener->priimekUcitelj !!}</span>
                                <?php
                                $letaVse = new \App\Model\Ucitelj();
                                ?>
                            <p>{!!  $trener->naslov !!}, {!! $trener->posta->postanStevilka !!}{!! $trener->posta->nazivPoste !!}, {!!  $letaVse->leta($trener->datumRojstva) !!} {!! trans('meni/meni.let') !!}</p>
                            <div class="list-group-controls">
                                <span class="label label-success">{!! trans('meni/meni.aktiven') !!}</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <!-- END SALES & EVENTS BLOCK -->

        </div>
        <div class="col-md-4">

            <!-- START USERS ACTIVITY BLOCK -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>Users Activity</h3>
                        <span>Users vs returning</span>
                    </div>
                </div>
                <div class="panel-body padding-0">
                    <div class="chart-holder" id="dashboard-bar-1" style="height: 200px;"></div>
                </div>
            </div>
            <!-- END USERS ACTIVITY BLOCK -->

        </div>

    </div>


@endsection
