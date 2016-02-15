<div class="panel-heading">
    <h3 class="panel-title">  {!! $naslovniTekst !!}</h3>
    <ul class="panel-controls">
        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
    </ul>
</div>
<div class="panel-body">
    <p>Add class <code>*</code> to form wrapper to get rows separated</p>
</div>
<div class="panel-body form-group-separated">

    <div class="form-group {{ $errors->has('imeUcenec') ? 'has-error' : '' }}">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/meni.ime') !!}<code>*</code></label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                {!! Form::text('imeUcenec', null, ['class' => 'form-control'])   !!}
                {!! $errors->first('imeUcenec', '<span class="help-block">:message</span>')  !!}
            </div>
        </div>
    </div>
    <div class="form-group {{ $errors->has('priimekUcenc') ? 'has-error' : '' }}">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/meni.priimek') !!}<code>*</code></label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                {!! Form::text('priimekUcenc', null, ['class' => 'form-control'])   !!}
                {!! $errors->first('priimekUcenc', '<span class="help-block">:message</span>')  !!}
            </div>
        </div>
    </div>
    <div class="form-group {{ $errors->has('datumRojstva') ? 'has-error' : '' }}">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/meni.datum')  !!}</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                {!! Form::text('datumRojstva', null, ['class' => 'form-control datepicker'])   !!}
                {!! $errors->first('datumRojstva', '<span class="help-block">:message</span>')  !!}
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/ucenci.spol')  !!}</label>
        <div class="col-md-6 col-xs-12">
            <div class="radio">
                    <label>
                        {!! Form::radio('spol', '1', true) !!}
                        {!! trans('meni/ucenci.moski')  !!}
                    </label>
                    <label>
                        {!! Form::radio('spol', '0', NULL) !!}
                        {!! trans('meni/ucenci.zenska')  !!}
                    </label>
            </div>
            <span class="help-block"></span>
        </div>
    </div>
    <div class="form-group {{ $errors->has('naslov') ? 'has-error' : '' }}">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/meni.naslov')  !!}<code>*</code></label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                {!! Form::text('naslov', null, ['class' => 'form-control'])   !!}
                {!! $errors->first('naslov', '<span class="help-block">:message</span>')  !!}
            </div>
        </div>
    </div>
    <div class="form-group {{ $errors->has('posta_postanStevilka') ? 'has-error' : '' }}">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/meni.posta')  !!}<code>*</code></label>
        <div class="col-md-6 col-xs-12">
            {!! Form::select('posta_postanStevilka',$posta,null,['class' => 'form-control select']) !!}
            {!! $errors->first('posta_postanStevilka', '<span class="help-block">:message</span>')  !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('telefon') ? 'has-error' : '' }}">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/meni.telefon')  !!}</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                {!! Form::text('telefon', null, ['class' => 'form-control'])   !!}
                {!! $errors->first('telefon', '<span class="help-block">:message</span>')  !!}
            </div>
        </div>
    </div>
    <div class="form-group {{ $errors->has('emailNaslov') ? 'has-error' : '' }}">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('login/login.email')  !!}</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                {!! Form::text('emailNaslov', null, ['class' => 'form-control'])   !!}
                {!! $errors->first('emailNaslov', '<span class="help-block">:message</span>')  !!}
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/meni.izberi-selekcije')  !!}</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    {!! Form::select('selekcije[]', $selekcije, null, ['class' => 'form-control select', 'multiple']) !!}
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/ucenci.statusUceneca')  !!}</label>
        <div class="col-md-6 col-xs-12">
            <label class="check">
                <div class="radio">
                    <label>
                        {!! Form::radio('status', '1', true) !!}
                        {!! trans('meni/ucenci.aktiven')  !!}
                    </label>
                    <label>
                        {!! Form::radio('status', '0', NULL) !!}
                        {!! trans('meni/ucenci.ne-aktiven')  !!}
                    </label>
                </div>
            </label>
            <span class="help-block"></span>
        </div>
    </div>
    <!--<div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/ucenci.posebnosti') !!}</label>
        <div class="col-md-6 col-xs-12">
            {!! Form::text('posebnosti', null, ['class' => 'form-control'])   !!}
        </div>
    </div>-->
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/meni.fotografija')  !!}</label>
        <div class="col-md-6 col-xs-12">
            {!! Form::file('fotografija',  ['class' => 'fileinput btn-primary', 'title' => trans('meni/meni.izberi-datoteko')]) !!}
            @if($vrednost ==2)
                <span class="help-block">{!! trans('meni/ucenci.zsamenjaj-fotografijo')  !!}</span>
            <div class="user">
                @if($ucenec->fotografija)
                    <img src="/assets/users/{!! $ucenec->fotografija !!}" >
                @else
                    <img src="/assets/users/no-image.jpg" >
                @endif
            </div>
            @endif
            <span class="help-block"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/ucenci.podatkiSkrbnika')  !!}</label>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <table class="table">
                    <tr>
                        <td>{!! Form::text('imeSkrbnik', null, ['class' => 'form-control',  'placeholder' => trans('meni/ucenci.podatkiSkrbnika-ime')])   !!}</td>
                        <td>{!! Form::text('priimekSkrbnik', null, ['class' => 'form-control',  'placeholder' => trans('meni/ucenci.podatkiSkrbnika-priimek')])   !!}</td>
                        <td>{!! Form::text('emailSkrbnik', null, ['class' => 'form-control',  'placeholder' => trans('meni/ucenci.podatkiSkrbnika-ime')])   !!}</td>
                    </tr>
                </table>
            </div>
        </div>
        <span class="help-block"></span>
    </div>
</div>

{{ Form::hidden('user_id', Auth::user()->id) }}
<div class="panel-footer">
    <button type='reset' class="btn btn-default pull-right">{!! trans('meni/meni.clear')  !!}</button>
    {!! Form::submit($submitButtonText,  ['class' => 'btn btn-primary'])   !!}
</div>
</div>