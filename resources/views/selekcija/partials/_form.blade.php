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

    <div class="form-group {{ $errors->has('nazivSelekcije') ? 'has-error' : '' }}">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/selekcije.naziv-selekcija') !!}<code>*</code></label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                {!! Form::text('nazivSelekcije', null, ['class' => 'form-control'])   !!}
                {!! $errors->first('nazivSelekcije', '<span class="help-block">:message</span>')  !!}
            </div>
        </div>
    </div>
    <div class="form-group {{ $errors->has('starostSelekcije') ? 'has-error' : '' }}">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/selekcije.starost-dva') !!}<code></code></label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                {!! Form::text('starostSelekcije', null, ['class' => 'form-control'])   !!}
                {!! $errors->first('starostSelekcije', '<span class="help-block">:message</span>')  !!}
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/selekcije.dodaj-trenerja')  !!}</label>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <select name="trener[]" multiple class="form-control select">
                    @foreach($trener as $trene)
                        <option value="{!! $trene->id !!}">{!! $trene->priimekUcitelj !!} {!! $trene->imeUcitelj !!}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/selekcije.status-skupine')  !!}</label>
        <div class="col-md-6 col-xs-12">
            <label class="check">
                <div class="radio">
                    <label>
                        {!! Form::radio('statusSelekcije', '1', true) !!}
                        {!! trans('meni/selekcije.aktivan-selekcija')  !!}
                    </label>
                </div>
                <div class="radio">
                    <label>
                        {!! Form::radio('statusSelekcije', '0', NULL) !!}
                        {!! trans('meni/selekcije.neaktivna-selekcija')  !!}
                    </label>
                </div>
            </label>
            <span class="help-block"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/selekcije.izberi-trr')  !!}</label>
        <div class="col-md-6 col-xs-12">
            <div class="form-group">
                {!! Form::select('racun_id', $tekociracun, 'Izberi račun',['class' => 'form-control select']) !!}
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">{!! trans('meni/selekcije.opis-skupine')  !!}</label>
        <div class="col-md-6 col-xs-12">
            {!! Form::textarea('obrazlozitev' , null , ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
{{ Form::hidden('klub_id', 1) }}
<div class="panel-footer">
    <button type='reset' class="btn btn-default pull-right">{!! trans('meni/meni.clear')  !!}</button>
    {!! Form::submit($submitButtonText,  ['class' => 'btn btn-primary'])   !!}
</div>
</div>