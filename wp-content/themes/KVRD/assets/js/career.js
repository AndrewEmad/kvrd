function moreCareers(){
    var data = {
        'page':$(this).data('page'),
        'action': 'more_careers',
    };
    var self = this;
    $.ajax({
        url : more_careers_params.ajaxurl, // AJAX handler
        data : data,
        type : 'POST',
        
        success : function( response ){
            response = response.substr(0,response.length-1);
            $(self).before(response);
            $(self).remove();
        }
    });
}