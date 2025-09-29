let officeTypeList = new Map();
let countryList = new Map();
let officeBranchList = new Map();

function getOfficeTypeList() {
    $.ajax({

        url: base_url+'officeType',

        type: 'GET',

        async:false,

        caches:false,
      
        dataType: 'json',

        success: function (response) {
        

            if (response.status == 200) {

                if (response.data.length != 0) {
                    var options = '<option value="" disabled selected hidden>Please Choose...</option>';
                    
                    for (var i = 0; i < response.data.length; i++) {
                       
                       options+=`<option value="`+response.data[i].id+`">`+response.data[i].type+`</option>`;
                    }
                   
                   $('#office_type_id').html(options);
                }

            } else {
                // If there is no data or an error occurred
                var tableBody = $('#officeBranchList');
                var noDataRow = '<tr><td colspan="7" style="text-align: center;">No data available</td></tr>';
                tableBody.append(noDataRow);
            }

        }

    });
}
getOfficeTypeList();

function setHeadOfDeptDropdown(list) {

    var options = '<option value="" disabled selected hidden>Please Choose...</option>';
        options += '<option value="0">Self</option>';
    for (let k of list.keys()) {
        
        let hod = list.get(k);
        
          options+=`<option value="`+hod.id+`">`+hod.office_name+`</option>`;
        
        
      }
        
    
    $('#hod_id').html(options);
    
}

function setOfficeBranchList(list) {

    $('#officeBranchTable').dataTable().fnDestroy();
    $('#officeBranchList').empty();
    var tblData = '', badge, status;
    
    for (let k of list.keys()) {
        
        let branch = list.get(k);
        
        

        tblData += `
                <tr>
                        <td>${branch.id}</td>
                        <td>${branch.type}</td>
                        <td width="100%">
                        
                        <div class="media align-items-center">


                                                    
                                                    <div class="media-body">
                                                        <p>
                                                            <a href="#"><strong class="h6">${branch.office_name}</strong></a>
                                                            
                                                        </p>
                                                        <p><strong class="">Address:-</strong>${branch.address}</p>
                                                        <p><strong class="">Country:-</strong>${branch.country} <strong class="">State:-</strong>${branch.state} <strong class="">City:-</strong>${branch.city}</p>
                                                        <p><strong class="">Contact No.1:-</strong> ${branch.contact_number1} | <strong>Contact No.2:-</strong>${branch.contact_number2}</p>
                                                        <p> <strong class="">Email:</strong>${branch.email_id}</p>
                                                  </div>
                        
                        </td>
                        <td>${branch.created_at}</td>
                        <td> <a href="#" onclick="updateOfficeBranchDetails(${branch.id})" title="Update Branch" ><i class="mdi mdi-tooltip-edit" style="font-size: 20px;"></i></a>
                        
                        </td>
                </tr>
                `;
    }
    
    $('#officeBranchList').html(tblData);
    $('#officeBranchTable').DataTable();
}

function getOfficeBranchList() {
    $.ajax({

        url: base_url+' officeBranchDetails',

        type: 'GET',

        async:false,

        dataType: 'json',

        success: function (response) {
        

            if (response.status == 200) {

                if (response.data.length != 0) {
                    for (var i = 0; i < response.data.length; i++) {
                        officeBranchList.set(response.data[i].id, response.data[i]);
                    }
                    
                    setOfficeBranchList(officeBranchList);
                    // getOfficeTypeList();
                    setHeadOfDeptDropdown(officeBranchList);
                    
                }

            }else if(response.status==404){
                $('#hod_id').html('<option value="0">Self</option>');
            }

        }

    });
}

getOfficeBranchList();


$('#addOfficeBranchForm').on('submit', function (e) {

    e.preventDefault();

    var returnVal = $("#addOfficeBranchForm").valid();
    var formdata = new FormData(this);
    if (returnVal) {
        $.ajax({

            url: base_url+'officeBranchDetails',

            type: 'POST',

            data: formdata,

            cache: false,

            contentType: false,

            processData: false,

            dataType: 'json',

            success: function (response) {
                if (response.status == 200) {
                    $('#addOfficeBranchModal').modal('toggle');
                    swal("Good job!", response.message, "success");

                    let id=response.data.id;
                  
                
                 officeBranchList.set(id, response.data);
                 
                    setOfficeBranchList(officeBranchList);
                    
                    setTimeout(
                        $(location).attr('href',base_url+' officeBranch'),
                         8000
                         )

                } else {

                    swal("Good job!", response.message, "error");

                }

            }

        });
    }
});

function updateOfficeBranchDetails(id) {
    
    let branch = officeBranchList.get(id.toString());
    //clear all fields
    $("#addOfficeBranchForm").trigger("reset");
    $('.error').text('');
    //set details
    $('#id').val(id);
    $('#office_type_id').val(branch.office_type_id).change();
    $('#office_name').val(branch.office_name);
    $('#hod_id').val(branch.hod_id).change();
    $('#contact_number1').val(branch.contact_number1);
    $('#contact_number2').val(branch.contact_number2);
    $('#email_id').val(branch.email_id);
    $('#country_id').val(branch.country_id).change();
    $('#state_id').val(branch.state_id).change();
    $('#city_id').val(branch.city_id).change();
    $('#address').val(branch.address);
    $('#pincode').val(branch.pincode);
    $('#firmDisc').val(branch.FirmDisc);
    $('#GSTIN').val(branch.FirmGSTIN);
    $('#firmTAN').val(branch.FirmTAN);
    $('#firmPAN').val(branch.FirmPAN);
    $('#invoicePrefix').val(branch.InvoicePrefix);
    $('#otherdpre').attr('src',base_url+'resource/images/avatar-custom.png');
    // (employee.profile_image != null) ? $('#otherdpre').attr('src', base_url + employee.profile_image) : '';
    (branch.LogoAddress != null) ? $('#otherdpre').attr('src', base_url + branch.LogoAddress.replace(/\\/g, '/')) : '';
    //$('#otherdpre').attr('src',base_url+'resource/images/avatar-custom.png');
    // $('#pincode').val(branch.pincode);
    
    $('#addOfficeBranchModal').modal('toggle');
}


$('#addOfficeBranchBtn').click(function () {
    $('#addOfficeBranchModal').modal('toggle');
    $("#addOfficeBranchForm").trigger("reset");
    //$('#state_id').prop('disabled',true);
    $('#id').val('');
    $('.error').text('');
});


//setCountryList

function setOfficeCountryDropdown(list) {

    //var options = '<option value="" disabled selected hidden>India</option>';
    let options='<option value="" disable selected hidden>Please choose...</option>';
    
    for (let k of list.keys()) {
        
        let country = list.get(k);
        
          options+=`<option value="`+country.id+`">`+country.country+`</option>`;
        
        
      }        
    
    $('#country_id').html(options);
    // $('#state_id').prop('disabled',true);
    // $('#city_id').prop('disabled',true);
}

// getCountryList
function getOfficeCountryList() {
    $.ajax({

        url: base_url+'country',

        type: 'GET',

        async:false,

        dataType: 'json',

        success: function (response) {
        

            if (response.status == 200) {

               var options = '<option value="" disabled selected hidden>Please Choose...</option>';
                    
                for (var i = 0; i < response.data.length; i++) {
                   
                //    options+=`<option value="`+response.data[i].id+`">`+response.data[i].country	+`</option>`;

                   countryList.set(response.data[i].id, response.data[i]);
                }
               
                setOfficeCountryDropdown(countryList);
            //    $('#country_id').html(options);
              $('#state_id').prop('disabled',true);
              $('#city_id').prop('disabled',true);

            }

        }

    });
}
getOfficeCountryList();

//setClientState

$("#country_id").change(function() {
    var countryid=this.value;
    $('#state_id').html('');
    $.ajax({

        url: base_url+'state/'+countryid,

        type: 'GET',

        async:false,

        dataType: 'json',

        success: function (response) {
        
         
            if (response.status == 200) {
                let option='<option value="" disable selected hidden>Please choose...</option>';
                       
                if (response.data.length != 0) {
                    for (var i = 0; i < response.data.length; i++) {
                        if(response.data[i].is_active==1){
                        option +=`<option value="${response.data[i].state_id}">${response.data[i].state}</option>`;
                        //console.log(response.data[i].state_id);
                     }
                    }
                    
                }
                $('#state_id').html(option);
               // $('#city_id').html('');
               $('#state_id').prop('disabled',false);
                $('#city_id').prop('disabled',true);

            }

        }

    });
});

//setClientCity

$("#state_id").change(function() {
    var countryid=this.value;
    $('#city_id').html('');
    $.ajax({

        url: base_url+'statecity/'+countryid,

        type: 'GET',

        async:false,

        headers: {
            "Authorization": token
        },

        dataType: 'json',

        success: function (response) {
        

            if (response.status == 200) {
                let option='<option value="" disabled selected hidden>Please Choose...</option>';
                if (response.data.length != 0) {
                    for (var i = 0; i < response.data.length; i++) {
                        option +=`<option value="${response.data[i].state_id}">${response.data[i].city}</option>`;
                    }
                    
                }
                $('#city_id').html(option);
                 $('#city_id').prop('disabled',false);
            }

        }

    });
});
//import officeBranchbValidation script
var officeBranchbValidation = document.createElement('script');
officeBranchbValidation.src = base_url + 'resource/js/custom/officeBranchbValidation.js';
officeBranchbValidation.setAttribute("type", "text/javascript");
document.head.appendChild(officeBranchbValidation);
