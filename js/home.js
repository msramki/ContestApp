 ClassicEditor
        .create( document.querySelector( '#article' ) )
        .catch( error => {
            console.error( error );
        } );

$("#contestants").validate({
        rules: {
            name: "required",
            email: {
            required: true,
            email:true
            }
        },
        messages: {
            name: "Please specify your name"
        },
        submitHandler: function(form) {
            // disable your button here
            $('form button[type=submit]').attr('disabled', 'disabled');
            form.submit();
        },
        invalidHandler: function() {
            // re-enable the button here as validation has failed
            $('form button[type=submit]').attr("disabled", false);
        }
        });