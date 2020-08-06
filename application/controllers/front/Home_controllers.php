<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_controllers extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0, false');
        header('Pragma: no-cache');

        $this->load->helper(array('url', 'file', 'cookie'));
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('image_lib');
      

        $this->load->library('email');

        $this->load->model('front/home_model');
        // $this->load->model('admin/product_model');
    }

    public function index()
    {
        $content['data_banner'] = $this->home_model->get_data("banner");
        $content['data_service'] = $this->home_model->get_data("service");
        $content['data_product'] = $this->home_model->get_data("product");
        $content['data_client'] = $this->home_model->get_data("client");
        $content['data_about'] = $this->home_model->get_data("about");
        $content['data_contactus'] = $this->home_model->get_data("contactus");

        $data_sub_detail = $this->home_model->getSpesifikasiProdukFooter("1"); // GET SPESIFIKASI FOR DATA FOOTER
        $content['data_produk_spesifikasi'] = $data_sub_detail;

        $content['header'] = "front/header_view";
        $content['footer'] = "front/footer_view";
        $content['content_section'] = "front/home_view";

        $content['menu_active'] = "Beranda";
        // echo json_encode($content['data_contactus']);exit();
        $this->load->view('front/template_view', $content);
    }

    public function detail_page($typepage, $param)
    {
        $content['data_about'] = $this->home_model->get_data("about");
        $content['data_contactus'] = $this->home_model->get_data("contactus");

        $content['data_detail'] = $this->home_model->get_data_by_slug($param, $typepage);
        $content['header'] = "front/header_view";
        $content['footer'] = "front/footer_view";
        $content['content_section'] = "front/detailpage_view";

        $data_sub_detail = $this->home_model->getSpesifikasiProdukFooter("1"); // GET SPESIFIKASI FOR DATA FOOTER
        $content['data_produk_spesifikasi'] = $data_sub_detail;
        if ($typepage == "service") {
            $content['title_content'] = "Services";
            $content['menu_active'] = "services";
            $content['path_image'] = base_url() . "assets/admin/upload/service/";
        } else if ($typepage == "product") {
            $arr_sub_detail = array();
            $data_sub_detail = $this->home_model->get_detail_produk($content['data_detail']['id'], "by_id_produk");

            if ($data_sub_detail[0]['product_id'] == "1") { // JIKA GENSET PORTABLE
                foreach ($data_sub_detail as $value) {
                    $data_spesifikasi = $this->home_model->get_spesifikasi_produk($value['id']);
                    $value['spesifikasi'] = $data_spesifikasi;
                    array_push($arr_sub_detail, $value);
                }
                $content['data_sub_detail'] = $data_sub_detail;
            } else {
                //array_push($arr_sub_detail, $data_sub_detail);
                $content['data_sub_detail'] = $data_sub_detail;
            }

            $content['title_content'] = "Product";
            $content['menu_active'] = "product";
            $content['path_image'] = base_url() . "assets/admin/upload/product/";
        } else if ($typepage == "client") {
            $content['title_content'] = "Clients";
            $content['menu_active'] = "clients";
            $content['path_image'] = base_url() . "assets/admin/upload/client/";
        }
        $this->load->view('front/template_view', $content);
    }

    public function spesifikasi_produk($param)
    {
        $data_sub_detail = $this->home_model->get_detail_produk($param, "by_id_sub_produk");
        $content['data_sub_detail'] = $data_sub_detail;

        $content['data_about'] = $this->home_model->get_data("about");
        $content['data_contactus'] = $this->home_model->get_data("contactus");
        $content['data_detail'] = $this->home_model->get_header_produk($data_sub_detail[0]['product_id'], "product");
        $data_sub_detail = $this->home_model->getSpesifikasiProdukFooter("1"); // GET SPESIFIKASI FOR DATA FOOTER
        $content['data_produk_spesifikasi'] = $data_sub_detail;
        $content['header'] = "front/header_view";
        $content['footer'] = "front/footer_view";
        $content['content_section'] = "front/spesifikasi_produk_view";

        // $content['data_spesifikasi'] = $this->home_model->get_spesifikasi_produk($param);
        $content['data_spesifikasi'] = $this->home_model->getdetailSpec($param);
        //echo json_encode($content['data_spesifikasi']);exit();

        $content['title_content'] = "Product Specification";
        $content['menu_active'] = "product";
        $content['path_image'] = base_url() . "assets/admin/upload/product/";

        $this->load->view('front/template_view', $content);
    }
    public function sendContactUs()
    {
        if (
            empty($_POST['name']) ||
            empty($_POST['email']) ||
            empty($_POST['phone']) ||
            empty($_POST['message']) ||
            !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
        ) {
            echo "No arguments Provided!";
            return false;
        }

        $data['nama'] = strip_tags(htmlspecialchars($_POST['name']));
        $data['email'] = strip_tags(htmlspecialchars($_POST['email']));
        $data['telp'] = strip_tags(htmlspecialchars($_POST['phone']));
        $data['pesan'] = strip_tags(htmlspecialchars($_POST['message']));
        $contactus = $this->home_model->get_data("contactus");
        // Create the email and send the message
        $to = $contactus[0]['email']; // Add your email address in between the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
        $email_subject = "Avilla - Contact Us";
        // $email_body = "You have received a new message from your website Menuqu.\n\n" . "Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
        $headers = "From: noreply@avillapower.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
        $headers .= "Reply-To: " . $data['email'];
        // mail($to, $email_subject, $email_body, $headers);
        $template_email = $this->load->view('front/emailsendformat', $data, true);
        $config['useragent'] = 'CodeIgniter';
        $config['protocol'] = 'smtp';
        //$config['mailpath']    = '/usr/sbin/sendmail';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_user'] = 'emailuntukproject@gmail.com';
        $config['smtp_pass'] = '@project123';
        $config['smtp_port'] = '465';
        $config['smtp_keepalive'] = true;
        $config['smtp_crypto'] = 'ssl'; // or html
        $config['wordwrap'] = true;
        $config['wrapchars'] = 80;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['validate'] = true;
        $config['crlf'] = "\r\n";
        $config['newline'] = "\r\n";
        $this->email->initialize($config);
        $this->load->library('email', $config);

        //$toemail = array($data['email_toko']);
        $toemail = array($to);
        // $toccemail = array('yohanes.warindyo@gmail.com','yukyyusmilanda@seatech.com', 'yohanesputra@seatech.com');
        //$toccemail = array('dyaz@massindo.com');
        $subject = $email_subject;
        //$message = 'hallo';
        $this->email->from($data['email']);
        $this->email->to($toemail);
        // $this->email->cc($toccemail);
        $this->email->subject($subject);

        $this->email->message($template_email);
        //$this->email->send();
        if (!$this->email->send()) {
            echo $this->email->print_debugger();
            return false;
        } else {
            echo $this->email->print_debugger();
            return true;
        }
    }

}
