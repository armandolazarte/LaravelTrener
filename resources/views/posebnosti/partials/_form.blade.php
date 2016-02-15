
    <div class="panel-body form-group-separated">
        <div class="form-group ">
            <label class="col-md-3 col-xs-12 control-label">Naziv posebnosti</label>
            <div class="col-md-8 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    {!! Form::text('posebnost', null, ['class' => 'form-control'])   !!}
                </div>
            </div>
        </div>
        <div class="form-group">
             <label class="col-md-3 col-xs-12 control-label">Opis posebnosti</label>
             <div class="col-md-8 col-xs-12">
                 {!! Form::textarea('obrazlozitev' , null , ['class' => 'form-control']) !!}
             </div>
         </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Vidno starši:</label>
            <div class="col-md-6 col-xs-12">
                <div class="radio">
                    <label>
                        {!! Form::radio('statusPosebnosti', '1', true) !!}
                       Vidno staršem
                    </label>
                    <label>
                        {!! Form::radio('statusPosebnosti', '0', NULL) !!}
                       Ni vidno
                    </label>
                </div>
                <span class="help-block"></span>
            </div>
        </div>
        {{ Form::hidden('users_id', Auth::user()->id) }}
        {{ Form::hidden('ucenec_id', $ucenec->id ) }}
    <div class="modal-footer">
        {!! Form::submit('Vnesi posebnosti',  ['class' => 'btn btn-primary  pull-left'])   !!}
        <button type="button" class="btn btn-default" data-dismiss="modal">Zapri</button>
    </div>
</div>