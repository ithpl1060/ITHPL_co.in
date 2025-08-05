var etoken = sessionStorage.getItem('etoken');
if (etoken == null) {

    $('#loginForm').on('submit', function (e) {

        e.preventDefault();

        var returnVal = $("#loginForm").valid();
        var formdata = new FormData(this);
        if (returnVal) {
            $.ajax({

                url: 'login',

                type: 'POST',

                data: formdata,

                cache: false,

                contentType: false,

                processData: false,

                dataType: 'json',

                success: function (response) {
                    if (response.status == 200) {
                        console.log(response);
                        swal("Good job!", response.msg, "success");

                        sessionStorage.setItem("empDetails", JSON.stringify(response.empDetails));
                        sessionStorage.setItem("eurl", response.url);
                        sessionStorage.setItem("etoken", response.token);
                        sessionStorage.setItem("etype", response.type);

                        if (response.empDetails.is_admin == 1) {
                            // Redirect admin users to users page
                            window.location.replace("users");
                        } else {
                            // Redirect non-admin users to seo page
                            window.location.replace("seo");
                        }



                    } else if (response.status == 401) {

                        swal("Login Error!", response.message, "error");

                    }

                },
                error: function (xhr) {
                    if (xhr.status === 401) {
                        swal("Unauthorized", xhr.responseJSON.error, "error");
                    } else {
                        swal("Server Error", xhr.responseJSON?.message || "Something went wrong!", "error");
                    }
                }

            });
        }
    });
}//if ends
else {
    window.location.replace("login");
}
