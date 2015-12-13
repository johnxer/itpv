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
  ->setTo(array($_POST['demo_email']));

  // Give it a body
	
	$message->setBody(file_get_contents('to_subscriber_demo.php'), 'text/html');

	$result = $mailer->send($message);





//EMAIL TO ADMIN
	$transport = Swift_MailTransport::newInstance();
	$mailer = Swift_Mailer::newInstance($transport);
	$message = Swift_Message::newInstance()
	 // Give the message a subject
  ->setSubject('ITPV demo Form Submit')
  // Set the From address with an associative array
  ->setFrom(array('info@itpventures.com' => 'ITPV demo Form Submit'))
  // Set the To addresses with an associative array
  ->setTo($send_to_admin);
  // Give it a body
	$the_body=file_get_contents('to_admin_demo.php');

	$key_array=array('{name}','{title}','{company}','{email}','{phone}','{demo_list}','{demo_demo}','{demo_comments}');
	$value_array=array($_POST['demo_name'],$_POST['demo_title'],$_POST['demo_cname'],$_POST['demo_email'],$_POST['demo_phone'],$_POST['demo_list'],$_POST['demo_demo'],$_POST['demo_comments']);
	$the_body=str_replace($key_array, $value_array, $the_body);


	$message->setBody($the_body, 'text/html');

	$result = $mailer->send($message);
 