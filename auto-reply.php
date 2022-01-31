<?php

// Action to handle Fusion Form Data.
add_action( 'fusion_form_submission_data', 'fusion_handle_form_data', 10, 2 );

function fusion_handle_form_data( $data, $id ) {
  /* IMPORTANT: Replace email_address with your field name. */
  $email = $data['data']['email_address'];
  
  /**
  *
  * You can get data of any field same way by replacing key value in array -> $data['data']['FIELD_NAME']
  *
  */
  
  // Send an email. Basic usage example.
  wp_mail( $email, 'Avada Enquiry Confirmation', 'Thank you for your enquiry, we will get back to you shortly.' );
}
