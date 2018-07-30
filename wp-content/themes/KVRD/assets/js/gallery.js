function populatePhotos(id,name){

    var data = {
        'id':id,
        'action': 'gallery_photos',
    };

    $.ajax({
        url : gallery_photos_params.ajaxurl, // AJAX handler
        data : data,
        type : 'POST',

        success : function( response ){
            var photos = JSON.parse(response);
            var slider = $('#photos-slider');
            slider.empty();
            for(var i=0;i<photos.length;++i){
                slider.append(
                    '<li class="position-relative galleryHover">\n' +
                    '                                    <div class="imgContainer">\n' +
                    '                                        <img src="'+photos[i]+'" alt="">\n' +
                    '                                    </div>\n' +
                    '                                    <div class="mainColorBg centerDetails clearfix">\n' +
                    '                                    <span class="f-big float-left">\n' +
                    '                                        '+name+'\n' +
                    '                                    </span>\n' +
                    '                                        <p class="f-normal float-right">\n' +
                    '                                            <span class="current">'+(i+1)+' / </span>\n' +
                    '                                            <span class="total">'+photos.length+'</span>\n' +
                    '                                            Photos\n' +
                    '                                        </p>\n' +
                    '                                    </div>\n' +
                    '                                </li>'
                );

            }
            $('.flexslider').removeData("flexslider");
            $('.flexslider').flexslider({
                animation: "slide",
                loop: false,
            });
        }
    });
}