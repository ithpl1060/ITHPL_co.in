let roleList = new Map();

function getRoleList() {
    $.ajax({

        url: base_url+'role',

        type: 'GET',

        async:false,

        headers: {
            "Authorization": token
        },

        dataType: 'json',

        success: function (response) {
        

            if (response.status == 200) {

                if (response.data.lenght != 0) {
                    for (var i = 0; i < response.data.length; i++) {
                        roleList.set(response.data[i].id, response.data[i]);
                    }
                    setRoleProfileList(roleList);
                }

            }

        }

    });
}
getRoleList();








function setRoleProfileList(list) {
// console.log('roleprofilelist:',list);

    var options = '';
    
    for (let k of list.keys()) {
        
        let role = list.get(k);
        // console.log(role.id);
        
          options+=`<option value="`+role.id+`">`+role.name+`</option>`;
        
        
      }
        
    
    $('#role_id').html(options);
    
}

