@extends('master')

@section('meniSredina')
    <ul class="breadcrumb">
        <li><a href="{!! url('/') !!}">{!! trans('meni/meni.home') !!}</a></li>
        <li><a href="{!! url('selekcije') !!}">{!! trans('meni/selekcije.selekcije') !!}</a></li>
        <li class="active">{!! trans('meni/selekcije.pregledSelekcije') !!}</li>
    </ul>
@endsection

@section('content')
    <div class="page-title">
        <h2>{!! trans('meni/selekcije.selekcijaV') !!}: <strong>{!! $selekcije->nazivSelekcije !!}</strong></h2>
    </div>

    <div class="row">
        <div class="col-md-6">
            <!-- START SALES BLOCK -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>{!! trans('meni/meni.podatkiOsnovni') !!} {!! $selekcije->nazivSelekcije !!}</h3>
                        <span>{!! trans('meni/selekcije.podatkiOsnovni') !!}</span>
                    </div>
                </div>
                <div class="panel-body panel-body-table">
                    <div class="table-responsive">
                        <table class="table table-condensed table-bordered table-striped">
                            <tbody>
                            <tr>
                                <td width="50"><strong>Naziv&nbsp;selekcije</strong></td>
                                <td>{!! $selekcije->nazivSelekcije !!}</td>
                            </tr>
                            <tr>
                                <td><strong>Opis</strong></td>
                                <td>{!! $selekcije->obrazlozitev !!}</td>
                            </tr>
                            <tr>
                                <td><strong>Starost</strong></td>
                                <td>{!! $selekcije->starostSelekcije !!}</td>
                            </tr>
                            <tr>
                                <td><strong>TRR</strong></td>
                                <td>{!! $selekcije->racun->naziv !!} ({!! $selekcije->racun->stevilka !!})</td>
                            </tr>
                            <tr>
                                <td><strong>Trenerji</strong></td>
                                <td>
                                    @if($selekcije -> ucitelj)
                                        @foreach($selekcije -> ucitelj as $ucitelj)
                                            <a href="{{ url('coach', $ucitelj->id) }}">{!! $ucitelj->imeUcitelj !!}  {!! $ucitelj->priimekUcitelj !!}</a>,
                                        @endforeach
                                    @else

                                    @endif

                                </td>
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
                        <h3>Treningi</h3>
                        <span>Zadnjih 10 treningov</span>
                    </div>
                </div>
                <div class="panel-body panel-body-table">

                    <div class="table-responsive">
                        <table class="table table-condensed table-bordered table-striped">
                            <thead>
                            <tr>
                                <th width="50%">Project</th>
                                <th width="20%">Status</th>
                                <th width="30%">Activity</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><strong>Atlant</strong></td>
                                <td><span class="label label-danger">Developing</span></td>
                                <td>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Gemini</strong></td>
                                <td><span class="label label-warning">Updating</span></td>
                                <td>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">40%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Taurus</strong></td>
                                <td><span class="label label-warning">Updating</span></td>
                                <td>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">72%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Leo</strong></td>
                                <td><span class="label label-success">Support</span></td>
                                <td>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Virgo</strong></td>
                                <td><span class="label label-success">Support</span></td>
                                <td>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Aquarius</strong></td>
                                <td><span class="label label-success">Support</span></td>
                                <td>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- END PROJECTS BLOCK -->

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- START TABS -->
            <div class="panel panel-default tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">{!! trans('meni/selekcije.fotografijePreged') !!}</a></li>
                    <li><a href="#tab-second" role="tab" data-toggle="tab">{!! trans('meni/selekcije.tabelaPregled') !!}</a></li>
                </ul>
                <div class="panel-body tab-content">
                    <div class="tab-pane active" id="tab-first">
                        @if($selekcije->ucenec)
                            <div class="row">
                                @foreach($selekcije->ucenec as $ucenec)
                                    <div class="col-md-3">
                                        <!-- CONTACT ITEM -->
                                        <div class="panel panel-default">
                                            <div class="panel-body profile">
                                                <div class="profile-image">
                                                    <?php
                                                    if($ucenec->fotografija)
                                                        $fotografija= $ucenec->fotografija;
                                                    else
                                                        $fotografija = 'no-image.jpg';
                                                    ?>

                                                    <img src="/assets/users/{!! $fotografija !!}" >

                                                </div>
                                                <div class="profile-data">
                                                    <div class="profile-data-name">{!! $ucenec->imeUcenec !!} {!! $ucenec->priimekUcenc !!}</div>
                                                    <div class="profile-data-title">
                                                        @if($ucenec->spol === 1)
                                                            {!! trans('meni/selekcije.ucenecMoski') !!}
                                                        @elseif($ucenec->spol === 2)
                                                            {!! trans('meni/selekcije.ucenecZenslka') !!}
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="profile-controls">
                                                    <a href="{{ url('ucenec', $ucenec->id) }}" class="profile-control-left"><span class="fa fa-info"></span></a>
                                                    @if( Auth::user()->role->roleValue >= 11110)
                                                        <a href="{{ route('ucenec.edit', $ucenec->id) }}" class="profile-control-right"><span class="fa fa-edit"></span></a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div class="contact-info">
                                                    <p><small>{!! trans('meni/ucenci.datumRojstva') !!}</small><br/>{!!  date('j.n.Y', strtotime($ucenec->datumRojstva))  !!}
                                                        <?php
                                                         $leta = new \App\Model\Ucitelj();
                                                         print '('.$leta->leta($ucenec->datumRojstva).' let)';
                                                            ?>
                                                    </p>
                                                    <p><small>{!! trans('meni/meni.naslov') !!}</small><br/>{!! $ucenec->naslov !!}, {!! $ucenec->posta->postanStevilka !!} {!! $ucenec->posta->nazivPoste !!}</p>
                                                    <p><small>{!! trans('login/login.email') !!}</small><br/>
                                                        @if($ucenec->emailNaslov)
                                                           {!!  $ucenec->emailNaslov !!}
                                                        @else
                                                            Ni podatkov
                                                        @endif
                                                    <p><small>{!! trans('meni/meni.status') !!}</small><br/>
                                                        @if($ucenec->status === 1)
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
                        <div class="col-md-12">
                            <div class="alert alert-warning " role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">{!! trans('meni/meni.close') !!}</span></button>
                                <strong>{!! trans('meni/meni.napaka') !!}</strong>{!! trans('meni/selekcije.prazno') !!}
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="tab-pane" id="tab-second">
                        @if($selekcije->ucenec)

                        @else
                            <div class="col-md-12">
                                <div class="alert alert-warning " role="alert">
                                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">{!! trans('meni/meni.close') !!}</span></button>
                                    <strong>{!! trans('meni/meni.napaka') !!}</strong>{!! trans('meni/selekcije.prazno') !!}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- END TABS -->
        </div>
    </div>

@endsection
@section('javascript_file')
    <script type="text/javascript" src="{{URL::asset('assets/js/plugins/icheck/icheck.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
@endsection

