
    var toastrOptions = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-center", //"toast-top-center", "toast-top-full-width", 
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "1000",
        "hideDuration": "1000",
        "timeOut": "0",
        "extendedTimeOut": "10000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      };
var handleAjaxResponse = function( response ){


toastr.clear();

if(  ! response.success )
{
    toastr.options = toastrOptions;

    toastr['error']( response.error.message, response.error.title );
}
else if( ! response.error )
{
    toastr.options = toastrOptions;

    toastr['success'](response.success.message, response.success.title );

    
}
}
      
var loginApplicant = function( email, password, role, callback ){

  $.ajax({
    type:"POST", 
    url:"/Login/loginApplicant",
    data:"email=" + email + "&psw=" + password + "&role=" + role + "&login-btn=true",
    dataType:"json",
    encode:true
  })
  .done( function(response){

    callback(response);

  })
  .fail( function(error){

    console.log(error);

  })
  .always( function(response){

  })
};



var loginButton = document.getElementById('login-btn');

loginButton.addEventListener( 'click', function(){


  var role = this.getAttribute('name');

  var email = document.getElementById('inputEmail').value;
  
  var password = document.getElementById('password').value;

  toastr.options = toastrOptions;
  toastr['info']('Connecting...please wait', 'Connecting');

  //submitButton.setAttribute('disabled', true);
  loginApplicant( email, password, role, function( response ){
//console.log(response);
    toastr.clear();

    if( ! response.success )
    {
      toastr.options = toastrOptions;

      toastr['error']( response.error, 'Error' );
    }
    else if( ! response.error )
    {
        toastr.options = toastrOptions;

        toastr['success']('Redirecting...please wait', 'Success');

        window.location  = response.success.dashboard;
    }
  });
});

