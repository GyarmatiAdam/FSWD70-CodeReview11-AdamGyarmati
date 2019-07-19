/**
  * these scripts disables or enables the input fields on admin.php
  * depends on event type
*/
$("#email").keyup(function(){

  var email = $("#email").val();
  var emptyemail = $("#email");
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if (!filter.test(email)) {

    $("#error_email").text(email+" is not a valid email");
    email.focus;
 }
 else {
     $("#error_email").text("");
 }
});

//prevent email from submission
$("#submit_register").click(function(){
  var email = $("#email").val();
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-]))+\.([a-zA-Z0-9]{2,4})+$/;
  if (!filter.test(email)) {
     alert('The email address you provide is not valid');
     $("#email").focus();
     return false;
  } else {
     
  }
});
////////////////inser into///////////////////////////////////////////////////////////
// var request;

// $("#insertForm").submit(function(event){
//    event.preventDefault();

//    if (request) {
//        request.abort();
//    }

//    var $form = $(this);

//    var $inputs = $form.find("input, select, button, textarea");

//    var serializedData = $form.serialize();
//    $inputs.prop("disabled", true);

//    request = $.ajax({
//        url: "admin.php",
//        type: "post",
//        data: serializedData
//    });

//    request.done(function (response, textStatus, jqXHR){
//        console.log("Success!");
//    });

//    request.fail(function (jqXHR, textStatus, errorThrown){

//        console.error(
//            "The following error occurred: "+
//            textStatus, errorThrown
//        );
//    });

//    request.always(function () {

//        $inputs.prop("disabled", false);
//    });
// });

