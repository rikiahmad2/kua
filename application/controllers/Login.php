<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Login extends CI_Controller {
    
    public function __construct()
	{
        parent::__construct();
        require APPPATH.'libraries/phpmailer/src/Exception.php';
        require APPPATH.'libraries/phpmailer/src/PHPMailer.php';
        require APPPATH.'libraries/phpmailer/src/SMTP.php';
        $this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('User');
		$this->load->library('session');

    }
    
    public function index() {
        $session = $this->session->all_userdata();
        if(isset($session["email"])){
            redirect("/Admin/index" , "refresh");
        }
        $this->load->view('admin/login');
    }

     public function submit(){
        $login = $this->User->get_user_data($this->input->post('username'), $this->input->post('password'));
        if($login == "ok"){    
            redirect("/Admin/" , "refresh");
        }
        else{
           $message = "Password/ Email Salah";
           echo "<script type='text/javascript'>alert('$message');</script>";
           redirect("/Login/", "refresh");
        }
    }

    public function forgot() {
        $this->load->view('admin/forgot');
    }

    public function submitSettings() {
        //PHPMailer Object
        $target = $this->input->post('forgot');
        $hasil = $this->User->display_data($target);
        $isi = "HALO KAKAK INI PASSWORD KAMU !! " . $hasil;
        $mail = new PHPMailer();

        if($hasil != null){
            //SMTP Configuration
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'ahmadriki9512@gmail.com';
            $mail->Password = 'eweanmalam95';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('ahmadriki9512@gmail.com','KUASukakarya');
            $mail->addReplyTo('info@example.com', 'KUASukakarya');
            $mail->addAddress($target);

            $mail->Subject = 'Password Recovery';
            $mail->isHTML(true);

            $mail->MsgHTML($isi);

            if(!$mail->send()){
                echo "MAILER ERROR" . $mail->ErrorInfo;
            }else{
                echo "<script type='text/javascript'>alert('Password sudah terkirim !!');</script>";
                redirect("Login/forgot","refresh");
            }
        }

        else{
            echo "<script type='text/javascript'>alert('email tidak valid !!');</script>";
            redirect("Login/forgot","refresh");
        }
    }
}