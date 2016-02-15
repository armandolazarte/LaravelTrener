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

    <div class="form-group {{ $errors->has('imeUcitelj') ? 'has-error' : '' }}">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/meni.ime') !!}<code>*</code></label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                {!! Form::text('imeUcitelj', null, ['class' => 'form-control'])   !!}
                {!! $errors->first('imeUcitelj', '<span class="help-block">:message</span>')  !!}
            </div>
        </div>
    </div>
    <div class="form-group {{ $errors->has('priimekUcitelj') ? 'has-error' : '' }}">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/meni.priimek') !!}<code>*</code></label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                {!! Form::text('priimekUcitelj', null, ['class' => 'form-control'])   !!}
                {!! $errors->first('priimekUcitelj', '<span class="help-block">:message</span>')  !!}
            </div>
        </div>
    </div>
    <div class="form-group {{ $errors->has('emailUcitelj') ? 'has-error' : '' }}">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('login/login.email')  !!}<code>*</code></label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                {!! Form::text('emailUcitelj', null, ['class' => 'form-control'])   !!}
                {!! $errors->first('emailUcitelj', '<span class="help-block">:message</span>')  !!}
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
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/meni.statusUciteljAktiva')  !!}</label>
        <div class="col-md-6 col-xs-12">
            <label class="check">
                <div class="radio">
                    <label>
                        {!! Form::radio('statusAktiven', '1', true) !!}
                        {!! trans('meni/meni.statu-dopis')  !!}
                    </label>
                </div>
                <div class="radio">
                    <label>
                        {!! Form::radio('statusAktiven', '0', NULL) !!}
                        {!! trans('meni/meni.statu-dopis_ne')  !!}
                    </label>
                </div>
            </label>
            <span class="help-block"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/meni.opis-ucitelja')  !!}</label>
        <div class="col-md-6 col-xs-12">
            {!! Form::textarea('opis_trener' , null , ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/meni.licenca')  !!}</label>
        <div class="col-md-6 col-xs-12">
            <label class="check">
                {!! Form::checkbox('licenca', '1', true, ['class' => 'icheckbox']) !!}
            </label>
            <span class="help-block">{!! trans('meni/meni.licenca_potrjena')  !!}</span>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/meni.fotografija')  !!}</label>
        <div class="col-md-6 col-xs-12">
            {!! Form::file('fotografija',  ['class' => 'fileinput btn-primary', 'title' => trans('meni/meni.izberi-datoteko')]) !!}
            <span class="help-block">{!! trans('meni/meni.izberi-fotografijo')  !!}</span>
        </div>
    </div>
</div>
<div class="panel-footer">
    <button type='reset' class="btn btn-default pull-right">{!! trans('meni/meni.clear')  !!}</button>
    {!! Form::submit($submitButtonText,  ['class' => 'btn btn-primary'])   !!}
</div>
</div>