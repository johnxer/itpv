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
  ->setTo(array($_POST['entrepreneur_email']));

  // Give it a body
	
	$message->setBody(file_get_contents('to_subscriber_entrepreneur.php'), 'text/html');

	$result = $mailer->send($message);





//EMAIL TO ADMIN
	$transport = Swift_MailTransport::newInstance();
	$mailer = Swift_Mailer::newInstance($transport);
	$message = Swift_Message::newInstance()
	 // Give the message a subject
  ->setSubject('ITPV Entrepreneur Form Submit')
  // Set the From address with an associative array
  ->setFrom(array('info@itpventures.com' => 'ITPV Entrepreneur Form Submit'))
  // Set the To addresses with an associative array
  ->setTo($send_to_admin);
  // Give it a body
	$the_body=file_get_contents('to_admin_entrepreneur.php');

	$key_array=['{name}','{title}','{company}','{email}','{phone}','{entrepreneur_startups}','{entrepreneur_mentor}','{entrepreneur_demo}','{entrepreneur_comments}'];
	$value_array=[$_POST['entrepreneur_name'],$_POST['entrepreneur_title'],$_POST['entrepreneur_cname'],$_POST['entrepreneur_email'],$_POST['entrepreneur_phone'],$_POST['entrepreneur_list'],$_POST['entrepreneur_mentor'],$_POST['entrepreneur_demo'],$_POST['entrepreneur_comments']];
	$the_body=str_replace($key_array, $value_array, $the_body);


	$message->setBody($the_body, 'text/html');

	$result = $mailer->send($message);
 