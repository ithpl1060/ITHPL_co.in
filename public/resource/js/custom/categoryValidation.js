

$(function() {

    $("#addCategoryForm").validate( {

        ignore: [], rules: {

            categoryName: {

                required: true, minlength: 2, maxlength: 255

            }
            
        }

        , messages: {

            categoryName: {

                required: 'Enter Category', minlength: 'please enter more word', maxlength: 'length is exceed'

            }
          
        }

    });

});



