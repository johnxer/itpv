<?php
ini_set('display_errors', '1');
require_once('email_conf.php');

require_once('swiftmailer/swift_required.php');

//EMAIL TO SUBSCRIBER
	$transport = Swift_MailTransport::newInstance();

	$mailer = Swift_Mailer::newInstance($transport);

	$message = Swift_Message::newInstance()

	 // Give the message a subject
  ->setSubject('Thank you for applying to ITP Ventures')

  // Set the From address with an associative array
  ->setFrom(array('info@itpventures.com' => 'Thank you for applying to ITP Ventures'))

  // Set the To addresses with an associative array
  ->setTo(array($_POST['hiring_email']));

  // Give it a body
	
	$message->setBody(file_get_contents('to_subscriber_hiring.php'), 'text/html');

	$result = $mailer->send($message);





//EMAIL TO ADMIN
	$transport = Swift_MailTransport::newInstance();
	$mailer = Swift_Mailer::newInstance($transport);
	$message = Swift_Message::newInstance()
	 // Give the message a subject
  ->setSubject('ITPV Hiring Form Submit')
  // Set the From address with an associative array
  ->setFrom(array('info@itpventures.com' => 'ITPV Hiring Form Submit'))
  // Set the To addresses with an associative array
  ->setTo($send_to_admin);
  // Give it a body
	$the_body=file_get_contents('to_admin_hiring.php');

	$key_array=array('{name}','{email}','{phone}','{hiring_comments}');
	$value_array=array($_POST['hiring_name'],$_POST['hiring_email'],$_POST['hiring_phone'],$_POST['hiring_comments']);
	$the_body=str_replace($key_array, $value_array, $the_body);


	$message->setBody($the_body, 'text/html');
$message->attach(Swift_Attachment::fromPath($_FILES['hiring_cv']['tmp_name'])->setFilename($_FILES['hiring_cv']['name']));
	$result = $mailer->send($message);
 