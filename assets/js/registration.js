$(document).ready(function(){
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

var registerStudents = function(form,callback ){
    //console.log(course);
    $.ajax({
		type:"POST", 
		url:"/Applicants/registration",
		data: $(form).serialize() + "&register-btn=true",
		dataType:"json",
		encode:true
	  })
	  .done( function(response){
		console.log(response);
		callback(response);

	  })
	  .fail( function(error){

		console.log(error);

	  })
	  .always( function(response){

	  })
};
$('#register-btn').on('click', function(event){
    var form = $(this).closest('form');
    registerStudents(form, handleAjaxResponse);
});

});