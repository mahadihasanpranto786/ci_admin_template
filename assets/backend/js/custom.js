
$(document).ready(function () {
    //Mobile number check
    $(".input_phone_number").on("keyup paste", function (e) {
        e.preventDefault();
        var phone = $(this).val().length;

        if (phone == 11) {
            $(this).css('border', '1px solid green');
            $("#incorrectPhoneNumber").text('');
            $("#submitButton").attr('disabled', false);
        } else {
            $(this).css('border', '1px solid red');
            $("#incorrectPhoneNumber").text('(Invalid Phone Number)');
            $("#submitButton").attr('disabled', true);
        }
    });
});

//update data
form_submit_alert(".update__data", "Update", "Updated", "Your data has been Updated")
//insert data
form_submit_alert(".submit__data", "Submit", "Submitted", "Your data has been Submitted")
function form_submit_alert(submit__data, message, messaged, message_type) {
    $("form " + submit__data).on("click",function(e) {
        e.preventDefault();
        let $form = $(this).closest("form");
        Swal.fire({
            title: "Are you sure?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#2c9b10",
            cancelButtonColor: "#e42061",
            confirmButtonText: message,
            padding: "2em",
        }).then(function(result) {
            if (result.value) {
                $form.submit();
                Swal.fire(messaged, message_type, "success");
            }
        });
    });
}

// anchor tag update data
 // Trash Data
link_submit_alert(".item_delete_alert", "Yes, delete it!", "Deleted","You won't be able to revert this!", "Your data has been Updated")
 
function link_submit_alert(confirm_submit,  message, messaged, textmassage,  message_type) {
    $(document).on("click", confirm_submit, function(e) {
        e.preventDefault();
        var link = $(this).attr("href");
        Swal.fire({
            title: "Are you sure?",
            text: textmassage,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#2c9b10",
            cancelButtonColor: "#e42061",
            confirmButtonText: message,
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire(messaged, message_type, "success");
            }
        });
    });
}
//success massage toster alert
function success_massage(){
    toastr.options = {
        "closeButton": true,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "2500",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }
    toastr.success(
        "<h5><b>Status Updated Successfully!</h5></b>"
    );

}
//error massage toster alert
function error_massage(){
    toastr.options = {
        "closeButton": true,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "2500",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }
    toastr.error(
        '<h5><b>Something Went wrong!</h5></b>'
    );
}
//number validate numeric value check
$(".input__number").on('keyup change paste keypress', function(e) {
    var data, i;
    data = document.querySelectorAll(".input__number"); //HTML DOM querySelector() Method
    for (i = 0; i < data.length; i++) {
        data[i].value = data[i].value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');
    }
});


