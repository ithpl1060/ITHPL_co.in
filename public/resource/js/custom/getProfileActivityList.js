
let profileActivityList = new Map();

function getProfileActivityList() {
    profileActivityList.clear();
    $.ajax({

        url: base_url + 'profileActivity/' + profileid,

        type: 'GET',

        async: false,

        headers: {
            "Authorization": token
        },

        dataType: 'json',

        success: function (response) {


            if (response.status == 200) {

                if (response.data.length != 0) {
                    for (var i = 0; i < response.data.length; i++) {
                        // console.log('profileActivityList: ', response.data[i].activity_id);
                        profileActivityList.set(response.data[i].activity_id, response.data[i]);
                    }

                    
                }

            }

        }

    });
}
getProfileActivityList();
setProfileActivityList(profileActivityList);




