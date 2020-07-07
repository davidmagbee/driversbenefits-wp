<?php
/*
Plugin Name: Drivers Benefits Verify Member Form
Plugin URI: https://driversbenefits.org/
Description: Drivers Benefits Verify Member Form
Version: 1.0
*/
function html_form_code() {
  echo '<form action="http://localhost:9000/api/member/verify" method="post">';
  echo '<p>';
  echo 'TLC Number (required) <br />';
  echo '<input type="text" name="vmf-tlc" pattern="[a-zA-Z0-9 ]+" value="' . ( isset( $_POST["vmf-tlc"] ) ? esc_attr( $_POST["vmf-tlc"] ) : '' ) . '" />';
  echo '</p>';
  echo '<p>';
  echo 'Your Date of Birth (required) <br />';
  echo '<input type="text" name="vmf-dob" value="' . ( isset( $_POST["vmf-dob"] ) ? esc_attr( $_POST["vmf-dob"] ) : '' ) . '" size="12" />';
  echo '</p>';
  echo '<p>';
  echo '<p><input type="submit" name="vmf-submitted" value="Verify"/></p>';
  echo '</form>';
}

function send() {

  // if the submit button is clicked, send the email
  if ( isset( $_POST['vmf-submitted'] ) ) {

    // sanitize form values
    $memberId = sanitize_text_field( $_POST["vmf-tlc"] );
    $dob  = sanitize_text_field( $_POST["vmf-dob"] );

    // get the blog administrator's email address
    // $to = get_option( 'admin_email' );

    // $headers = "From: $name <$email>" . "\r\n";

    // If email has been process for sending, display a success message
    // if ( wp_mail( $to, $dob, $message, $headers ) ) {
    //     echo '<div>';
    //     echo '<p>Thanks for contacting me, expect a response soon.</p>';
    //     echo '</div>';
    // } else {
    //     echo 'An unexpected error occurred';
    // }
  }
}

function cf_shortcode() {
  ob_start();
  send();
  html_form_code();

  return ob_get_clean();
}

add_shortcode( 'verify_member_form', 'cf_shortcode' );

?>