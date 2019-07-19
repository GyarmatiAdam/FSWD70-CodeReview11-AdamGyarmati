/**
 * these scripts disables or enables the input fields on admin.php
 * depends on event type
 */

 //if Place to GO choosed
$('#eventType').change(function() {
    if( $(this).val() == 1) {
        $('#con_name').prop( "disabled", true );
        $('#con_datetime').prop( "disabled", true );
        $('#price').prop( "disabled", true );
        $('#rest_name').prop( "disabled", true );
        $('#phone').prop( "disabled", true );
        $('#rest_type').prop( "disabled", true );
        $('#rest_descript').prop( "disabled", true );
        $('#rest_url').prop( "disabled", true );
    } 
    else {       
        $('#con_name').prop( "disabled", false );
        $('#con_datetime').prop( "disabled", false );
        $('#price').prop( "disabled", false );
        $('#rest_name').prop( "disabled", false );
        $('#phone').prop( "disabled", false );
        $('#rest_type').prop( "disabled", false );
        $('#rest_descript').prop( "disabled", false );
        $('#rest_url').prop( "disabled", false );
    }

  });

  //if Concert choosed
  $('#eventType').change(function() {
    if( $(this).val() == 2) {
        $('#ev_name').prop( "disabled", true );
        $('#ev_type').prop( "disabled", true );
        $('#ev_descript').prop( "disabled", true );
        $('#ev_url').prop( "disabled", true );
        $('#rest_name').prop( "disabled", true );
        $('#phone').prop( "disabled", true );
        $('#rest_type').prop( "disabled", true );
        $('#rest_descript').prop( "disabled", true );
        $('#rest_url').prop( "disabled", true );
    } 

  });

    //if Restaurant choosed
    $('#eventType').change(function() {
        if( $(this).val() == 3) {
            $('#ev_name').prop( "disabled", true );
            $('#ev_type').prop( "disabled", true );
            $('#ev_descript').prop( "disabled", true );
            $('#ev_url').prop( "disabled", true );
            $('#con_name').prop( "disabled", true );
            $('#con_datetime').prop( "disabled", true );
            $('#price').prop( "disabled", true );
        }
    
      });