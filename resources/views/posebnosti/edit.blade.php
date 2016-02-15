{!! Form::model($ucenecposebnosti, ['method' => 'PATCH', 'route' => ['ucenecposebnosti.update', $ucenecposebnosti->id], 'class' => 'form-horizontal']) !!}
<div class="panel panel-default">
    @include('posebnosti/partials/_form', ['submitButtonText' =>  trans('meni/ucenci.poslji'), 'vrednost'=> 1,  'naslovniTekst' => '<strong>' .trans('meni/meni.nov') .'</strong> ' .trans('meni/ucenci.trener_dva')])
</div>
{!! Form::close() !!}