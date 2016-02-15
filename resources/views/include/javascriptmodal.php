<script>
    $( document ).on('click', '.solsoShowModal', function(){
        modalTitle = $(this).attr('data-modal-title')
        $.ajax({
            url: $(this).attr('data-href'),
            dataType: 'html',
            success:function(data) {
                $('.solsoModalTitle').text(modalTitle.toString());
                $('.solsoShowForm').html(data);
            }
        });
    });
</script>
<script>
    $( document ).on('click', '.solsoConfirm', function(){
        $("#solsoDeletForm").prop('action', $(this).attr('data-href'));
    });

    $( document ).on('click', '.solsoDelete', function(e){
        e.preventDefault();

        var solsoSelector	= $(this);
        var solsoFormAction = $('#solsoDeletForm').attr('action');

        $.ajax({
            url: 	solsoFormAction,
            type: 	'delete',
            cache: 	false,
            dataType: 'html',
            success:function(data) {
                $(".the-return").hide();
                $('#solsoDeleteModal').modal('hide');
                location.reload();
            }
        });
        return false;
    });
</script>