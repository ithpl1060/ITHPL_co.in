

$(function() {

    $("#addUnitForm").validate( {

        ignore: [], rules: {

            unitName: {

                required: true, minlength: 2, maxlength: 255

            }
           
            
        }

        , messages: {

            unitName: {

                required: 'Enter Unit', minlength: 'please enter more word', maxlength: 'length is exceed'

            }

        }

    });

});



