<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/phpmailer.php');

		// *** SMTP *** //

		//		 require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/smtp.php');
		//		 const HOST = '';
		//		 const LOGIN = '';
		//		 const PASS = '';
		//		 const PORT = '';

		// *** /SMTP *** //
   
    const SENDER = 'zakaz@creant.ru';
	const CATCHER = 'info@creant.ru';
    const SUBJECT = 'Заявка с сайта #';
    const CHARSET = 'UTF-8';
    