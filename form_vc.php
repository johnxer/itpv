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
  ->setTo(array($_POST['vc_email']));

  // Give it a body
	
	$message->setBody(file_get_contents('to_subscriber_vc.php'), 'text/html');

	$result = $mailer->send($message);





//EMAIL TO ADMIN
	$transport = Swift_MailTransport::newInstance();
	$mailer = Swift_Mailer::newInstance($transport);
	$message = Swift_Message::newInstance()
	 // Give the message a subject
  ->setSubject('ITPV VC Form Submit')
  // Set the From address with an associative array
  ->setFrom(array('info@itpventures.com' => 'ITPV VC Form Submit'))
  // Set the To addresses with an associative array
  ->setTo($send_to_admin);
  // Give it a body
	$the_body=file_get_contents('to_admin_vc.php');

	$key_array=array('{name}','{title}','{company}','{email}','{phone}','{vc_ifocus}','{vc_startups}','{vc_mentor}','{vc_demo}','{vc_comments}');
	$value_array=array($_POST['vc_name'],$_POST['vc_title'],$_POST['vc_cname'],$_POST['vc_email'],$_POST['vc_phone'],$_POST['vc_ifocus'],$_POST['vc_list'],$_POST['vc_mentor'],$_POST['vc_demo'],$_POST['vc_comments']);
	$the_body=str_replace($key_array, $value_array, $the_body);


	$message->setBody($the_body, 'text/html');

	$result = $mailer->send($message);
 