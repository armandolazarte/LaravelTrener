<div class="modal fade" id="solsoDeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Potrditveno okno</h4>
            </div>

            <div class="modal-body">
                <p>Ali ste prepričani, da želite odstranit stikalo iz seznama?</p>
                <p>Odstranjenih podatkov ni mogoče obnovit!<p>
            </div>

            <div class="modal-footer">

                <!--
                /**
                  * === FORM UPDATE ===
                  * add solsoDeletForm in form ID
                */
                -->
                {{ Form::open(array('id' => 'solsoDeletForm')) }}

                <button type="button" class="btn btn-primary" data-dismiss="modal">NE</button>

                <!--
                /**
                  * === BUTTON DELETE ===
                  * add solsoDelete in button class
                  * place data-message-title, data-message-success in button code
                  * data-message-title 		= this text will appear as title text in notifications(alerts) window
                  * data-message-success	= this text will appear as success message in notifications(alerts) window
                */
                -->
                <button class="btn btn-danger solsoDelete" data-message-title="Delete notification" data-message-success="Podatki so bili odstranjeni">DA</button>

                {{ Form::close() }}

            </div>
        </div>
    </div>
</div>
