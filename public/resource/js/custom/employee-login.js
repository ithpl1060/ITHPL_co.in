var etoken = sessionStorage.getItem('etoken');
console.log('etoken:', etoken);

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

                        sessionStorage.setItem("empDetails", response.empDetails);
                        sessionStorage.setItem("eurl", response.url);
                        sessionStorage.setItem("etoken", response.token);
                        sessionStorage.setItem("etype", response.type);

                        window.location.replace("dashboard");

                    } else if (response.status == 400) {

                        swal("Login Error!", response.message, "error");

                    }

                }

            });
        }
    });
}//if ends
else {
    window.location.replace("dashboard");
}
