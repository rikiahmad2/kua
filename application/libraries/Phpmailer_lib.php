<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
/**
PHP MAILER LIBRARY AUTHOR : RIKI
*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class PHPMailer_Lib
{
	public  function __construct(){
		log_message('Debug', 'PHPMailer class Loaded');
	}

	public function load(){
		include_once APPATH . 'third_party/PHPMailer/Exception.php';
		include_once APPATH . 'third_party/PHPMailer/PHPMailer.php';
		include_once APPATH . 'third_party/PHPMailer/SMTP.php';

		$mail = new PHPMailer;
		return $mail;
	}
}

?>