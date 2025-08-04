function setProfileRoleList(list) {
        
    var data = '';
    
    data +=`<div class="row">`;
    for (let k of list.keys()) {
        
        let role = list.get(k);
        
        // console.log('role:',role.role_id);
        
        data += `<div class="col-md-3 p-10">
        
        <a href="#" id="ctrl_`+role.role_id+`" onclick="deleteProfileRole(`+role.role_id+`)" title="Delete Tab" >`+role.name+`&nbsp;&nbsp;<i class="fa fa-trash text-danger"></i></a>
        </div>`;

       
       
    }
    data +=`</div>`;
    
$('#profileRoleListId').html(data);    

}

console.log('profileid:', profileid);


