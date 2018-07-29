jQuery(function($){
    $('#kv_subscribe').on('submit',function(e){
    e.preventDefault();
    var data = {
        'email':$("#kv_subscribe input[type='email']").val(),
        'action': 'subscribe',
    };

    $.ajax({
        url : subscribe_params.ajaxurl, // AJAX handler
        data : data,
        type : 'POST',
        
        success : function( response ){
            response = JSON.parse(response);
            alert(response['message']);
        }
    });
});
});