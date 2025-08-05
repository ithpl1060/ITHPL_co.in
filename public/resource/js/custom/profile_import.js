
//import setRoleProfileList script
var setRoleProfileList = document.createElement('script');
setRoleProfileList.src = base_url + 'resource/js/custom/setRoleProfileList.js';
setRoleProfileList.setAttribute("type", "text/javascript");
document.head.appendChild(setRoleProfileList);

//import addProfile script
var addProfile = document.createElement('script');
addProfile.src = base_url + 'resource/js/custom/addProfile.js';
addProfile.setAttribute("type", "text/javascript");
document.head.appendChild(addProfile);


//import setProfileList script
var setProfileList = document.createElement('script');
setProfileList.src = base_url + 'resource/js/custom/setProfileList.js';
setProfileList.setAttribute("type", "text/javascript");
document.head.appendChild(setProfileList);



function deleteProfile(id) {
    // console.log('idahe:', id);

    $.ajax({
        url: base_url + 'profile/' + id,
        type: 'delete',
        // headers: {
        //     "Authorization": etoken
        // },
        dataType: 'json',
        success: function (response) {
            if (response.status == 200) {

                swal("Good job!", response.message, "success").then(() => {
                    window.location.reload(); // Reload after SweetAlert confirmation
                });

            } else {
                swal("Error!", response.message, "error");

            }
        }
    });

}
