
var base_url = sessionStorage.getItem('eurl');
var token = sessionStorage.getItem('etoken');
var type = sessionStorage.getItem('etype');
// var type = sessionStorage.getItem('empDetails');
var empdetails = JSON.parse(sessionStorage.getItem("empDetails"));
console.log('base_url:', base_url);
console.log('token:', token);
console.log('type:', type);
console.log(empdetails);

// alert(etoken);
if (token == null) {
    window.location.replace('/');
}

$('#userRole').text(empdetails.is_admin == 1 ? 'Admin' : 'User');
$('#pageTitle').text(empdetails.is_admin == 1 ? 'Admin Login' : 'User Login');
// $('#userName').text(`${empdetails.first_name} ${empdetails.last_name}`);

let first = empdetails.first_name?.trim() || '';
let last = empdetails.last_name?.trim() || '';

let fullName = '';

if (first && last) {
    fullName = `${first} ${last}`;
} else if (first || last) {
    fullName = first || last;
} else {
    fullName = 'Guest'; // fallback name if both are missing (optional)
}

$('#userName').text(fullName);



// import logout script
var logout = document.createElement('script');
logout.src = base_url + 'resource/js/custom/logout.js';
document.head.appendChild(logout);
