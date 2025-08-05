$('#addRecordSharingForm').on('submit', function (e) {

    e.preventDefault();

    var returnVal = $("#addRecordSharingForm").valid();
    var formdata = new FormData(this);
    // formdata.append("profile_id",profileid)
    if (returnVal) {
        $.ajax({

            url: base_url+'profileRole',

            type: 'POST',

            headers: {
                "Authorization": token
            },

            data: formdata,

            cache: false,

            contentType: false,

            processData: false,

            dataType: 'json',

            success: function (response) {
                if (response.status == 200) {
                    $('#addProfileRoleModal').modal('toggle');
                    swal("Good job!", response.message, "success");

                    //setTimeout(function(){ location.reload(); }, 1000);
                    getProfileRoleList();
                   setProfileRoleList(profileRoleList);

                } else {

                    swal("Good job!", response.message, "error");

                }

            }

        });
    }
});


$('#addRecordSharingBtn').click(function () {
    $('#addRecordSharingModal').modal('toggle');
    $("#addRecordSharingForm").trigger("reset");
    
});

console.log('own_by:', empdetails.own_by);
console.log('created_by:', empdetails.created_by);
console.log('updated_by:', empdetails.updated_by);
