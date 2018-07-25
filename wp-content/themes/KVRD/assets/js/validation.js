jQuery(document).ready(function() {

        // Initialise the validator
        jQuery('#post').validate();
        alert('sdfsdfsd');
        // Add the rules to the classname hooks
        jQuery.validator.addClassRules({
            max_100: {
                maxlength: 100
            },
            max_4000: {
                maxlength: 4000
            },
            number: {
                number: true
            }

        });
});