
    function setProfileData() {
        $.ajax({

            url: base_url+'/profile/'+profileid,

            type: 'GET',

            async:false,

            headers: {
                "Authorization": token
            },

            dataType: 'json',

            success: function (response) {
            

                if (response.status == 200) {
                    
                    switch (response.data.is_active) {
                        case '1':
                            
                            $("#statusInfo").removeClass("badge badge-pill badge-danger");
                            $("#statusInfo").addClass("badge badge-pill badge-success");
                            $("#statusInfo").html('Active');
                            break;
            
                        case '0':
                            $("#statusInfo").removeClass("badge badge-pill badge-success");
                            $("#statusInfo").addClass("badge badge-pill badge-danger");
                            $("#statusInfo").html('Inactive');
                            break;
            
                    }
                    $('#roleInfo').html(response.data.name);//role displayname
                    $('#profileInfo').html(response.data.profile_name);// profile name
                    // console.log('abcd:', response.data);
                    
                    
                    profileData.set(response.data.profile_id, response.data);
                    

                }

            }

        });
    }
    setProfileData();

    


    



