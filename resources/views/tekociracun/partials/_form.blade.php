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
    <div class="form-group {{ $errors->has('naziv') ? 'has-error' : '' }}">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/trr.naziov')  !!}</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                {!! Form::text('naziv', null, ['class' => 'form-control'])   !!}
                {!! $errors->first('naziv', '<span class="help-block">:message</span>')  !!}
            </div>
        </div>
    </div>

    <div class="form-group {{ $errors->has('stevilka') ? 'has-error' : '' }}">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/trr.stevilka-trr') !!}<code>*</code></label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                {!! Form::text('stevilka', null, ['class' => 'form-control'])   !!}
                {!! $errors->first('stevilka', '<span class="help-block">:message</span>')  !!}
            </div>
        </div>
    </div>
    <div class="form-group {{ $errors->has('bic') ? 'has-error' : '' }}">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/trr.bic') !!}<code>*</code></label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                {!! Form::text('bic', null, ['class' => 'form-control'])   !!}
                {!! $errors->first('bic', '<span class="help-block">:message</span>')  !!}
            </div>
        </div>
    </div>
    <div class="form-group {{ $errors->has('nazivBanke') ? 'has-error' : '' }}">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/trr.nazivRacuna') !!}<code>*</code></label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                {!! Form::text('nazivBanke', null, ['class' => 'form-control'])   !!}
                {!! $errors->first('nazivBanke', '<span class="help-block">:message</span>')  !!}
            </div>
        </div>
    </div>
    <div class="form-group {{ $errors->has('naslovBanke') ? 'has-error' : '' }}">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/trr.naslov') !!}<code>*</code></label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                {!! Form::text('naslovBanke', null, ['class' => 'form-control'])   !!}
                {!! $errors->first('naslovBanke', '<span class="help-block">:message</span>')  !!}
            </div>
        </div>
    </div>
    <div class="form-group {{ $errors->has('posta_postanStevilka') ? 'has-error' : '' }}">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/meni.posta')  !!}<code>*</code></label>
        <div class="col-md-6 col-xs-12">
            {!! Form::select('posta_postanStevilka',$posta, null,['class' => 'form-control select']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/trr.aktiven')  !!}</label>
        <div class="col-md-6 col-xs-12">
            <label class="check">
                <div class="radio">
                    <label>
                        {!! Form::radio('aktiven', '1', true) !!}
                        {!! trans('meni/ucenci.aktiven')  !!}
                    </label>
                    <label>
                        {!! Form::radio('aktiven', '0', NULL) !!}
                        {!! trans('meni/ucenci.ne-aktiven')  !!}
                    </label>
                </div>
            </label>
            <span class="help-block"></span>
        </div>
    </div>

{{ Form::hidden('user_id', Auth::user()->id) }}
<div class="panel-footer">
    <button type='reset' class="btn btn-default pull-right">{!! trans('meni/meni.clear')  !!}</button>
    {!! Form::submit($submitButtonText,  ['class' => 'btn btn-primary'])   !!}
</div>
</div>