<?php
/* 
 * Process the Contact Form
 * I would normally use phpmail(), however, I need SMTP mail and
 * this is not available for localhost without internet connection.
 * Therefore, I'm just checking for a valid email address.
 * Return values from this page:
 * TRUE on success,
 * FALSE on fail.
 */

// Simulate processing delay.
sleep(2);


// Get the values from the form.
$name = trim( filter_input(INPUT_GET, 'ib-contact-name', FILTER_SANITIZE_STRING) );
$email = trim( filter_input(INPUT_GET, 'ib-contact-email', FILTER_SANITIZE_EMAIL) );
$subject = trim( filter_input(INPUT_GET, 'ib-contact-subject', FILTER_SANITIZE_STRING) );
$message = trim( filter_input(INPUT_GET, 'ib-contact-message', FILTER_SANITIZE_STRING) );

// phpmail() requires SMTP mail server, therefore, I can't 
// use it in this example.
// Instead, I will just validate the email and return success or failure.

$ib_regex = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
if ( preg_match($ib_regex, $email) ) {
    echo 'TRUE';
} else {
    echo 'FALSE';
}