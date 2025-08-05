function logout(){
    
    
    sessionStorage.clear();
        swal({   
           title: "Logout!",   
           text: "Logout Successful!!!",   
           timer: 1000,   
           showConfirmButton: false 
       });
   
   setTimeout(function(){ window.location.replace(base_url); },1500);

}