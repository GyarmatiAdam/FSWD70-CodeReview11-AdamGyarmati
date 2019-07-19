/**
 * these scripts disables or enables the input fields on admin.php
 * depends on event type
 */
$('#eventType').change(function() {
    if( $(this).val() == 1) {
        $('#city').prop( "disabled", true );
    } else {       
        $('#city').prop( "disabled", false );
    }
  });