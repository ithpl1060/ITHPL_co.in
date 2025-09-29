function deleteProfileActivity(profileactivityid){
    swal({
        title: "Are you sure ??",
        text: "You want to delete this Activity", 
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
         deleteActivity(profileactivityid);
        
      } else {
        
      }
    });

    
}

function deleteActivity(activityid){
    
    $.ajax({

        url: base_url+'profileActivity/'+activityid+'/'+profileid,

        type: 'DELETE',

        async: false,

        headers: {
            "Authorization": token
        },

        dataType: 'json',

        success: function (response) {
            if (response.status == 200) {
                
                swal(response.message, {
                    icon: "success",
                  });
                  //setTimeout(function(){ location.reload(); }, 1000);
                  getProfileActivityList();
                  setProfileActivityList(profileActivityList);
            } else {

                swal(response.message, {
                    icon: "error",
                  });

            }

        }

    });
    
    
}