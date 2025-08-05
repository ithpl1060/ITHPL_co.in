function deleteProfileRole(profileroleid) {
    swal({
        title: "Are you sure ??",
        text: "You want to delete this Tab",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                deleteRole(profileroleid);

            } else {

            }
        });


}

function deleteRole(id) {
    console.log('roleid:', id);
    

    $.ajax({

        url: base_url + 'profileRole/' + profileid + '/' +id,

        type: 'DELETE',

        async: false,

        headers: {
            "Authorization": token
        },

        dataType: 'json',

        success: function (response) {
            if (response.status == 200) {


                profileRoleList.delete(id.toString());
                setProfileRoleList(profileRoleList);
                swal(response.message, {
                    icon: "success",
                });

            } else {

                swal(response.message, {
                    icon: "error",
                });

            }

        }

    });


}