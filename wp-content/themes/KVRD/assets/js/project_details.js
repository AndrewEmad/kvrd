jQuery(function($){
    $('#kv_more_details').on('submit',function(e){
    e.preventDefault();
    var data = {
        'name':$("#kv_more_details input[type='text']").val(),
        'email':$("#kv_more_details input[type='email']").val(),
        'phone':$("#kv_more_details input[type='tel']").val(),
        'action': 'project_details',
    };

    $.ajax({
        url : project_details_params.ajaxurl, // AJAX handler
        data : data,
        type : 'POST',
        
        success : function( response ){
            //response = JSON.parse(response);
            alert(response);
        }
    });
});
});