$(document).ready(function(){

//Validate image size before upload
function validateTypeAndSize(uploadCtrl) {
    // Get uploaded file extension
    var extension = $(uploadCtrl).val().split('.').pop().toLowerCase();
    // Create array with the files extensions that we wish to upload

    var validFileExtensions = ['jpeg', 'jpg', 'png', 'bmp'];

    //Check file extension in the array.if -1 that means the file extension is not in the list.
    if ($.inArray(extension, validFileExtensions) == -1) {
        $('#spnMessage').text("Sorry!! Upload only jpg, jpeg, png, bmp image").show();
        // Clear fileuload control selected file
        $(uploadCtrl).replaceWith($(uploadCtrl).val('').clone(true));
        //Disable Submit Button
        $('#btnSubmit').prop('disabled', true);
        //Clear Image preview
        $('#blah').prop('src', '');
    }
    else {
        // Check and restrict the file size to 32 KB.
        if ($(uploadCtrl).get(0).files[0].size > (32768)) {
            $('#spnMessage').text("Sorry!! Max allowed image size is 32 kb").show();
            // Clear fileuload control selected file
            $(uploadCtrl).replaceWith($(uploadCtrl).val('').clone(true));
            //Disable Submit Button
            // $('#btnSubmit').prop('disabled', true);
            //Clear Image preview
            $('#blah').prop('src', '');
        }
        else {
            //Clear and Hide message span
            $('#spnMessage').text('').hide();
            //Enable Submit Button
            // $('#btnSubmit').prop('disabled', false);
            //Preview Image if valid
            previewImage(uploadCtrl);
        }
    }
}
//Preview image before upload
function previewImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah')
            .attr('src', e.target.result)
            .width(100)
            .height(119);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

});