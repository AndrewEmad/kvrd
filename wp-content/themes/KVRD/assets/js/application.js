jQuery(function($){
    $('#kv_application').on('submit',function(e){
    e.preventDefault();
    var data = {
        'data':$("#kv_application").serialize(),
        'action': 'application',
    };
    $.ajax({
            url : application_params.ajaxurl, // AJAX handler
            data : $("#kv_application").serialize(),
            type : 'POST',

            success : function( response ){
                //response = JSON.parse(response);
                alert(response);
            }
        });
    });
});