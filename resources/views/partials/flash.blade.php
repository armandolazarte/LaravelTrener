@if(Session::has('flash_message'))
    <div class="row">
        <div class="col-md-8">
            <div class="alert alert-success {{ Session::has('flash_message_important') ? 'alert-importante' : '' }}">
                @if(Session::has('flash_message_important'))
                    <button type="button" class="close" data-dismiss="alert" aria="true">&times;</button>
                @endif
                {{ Session::get('flash_message')}}
            </div>
        </div>
    </div>
@endif