<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_controllers extends CI_Controller
{

	public $limit_news = "3";
	public $start_news = "0";

	public $start_comissions = "0";
	public $limit_comissions = "6";

	public $path_images_news = "assets/admin/upload/news/";
	public $path_images_gallery = "assets/admin/upload/gallery/";
	public $path_images_comissions = "assets/admin/upload/comissions/";

	public function __construct()
	{
		parent::__construct();
		$this->load->model('front/home_model');
		$this->load->library('session');
		$this->load->helper('tanggal_indonesia');
		$this->load->library('user_agent');
		if (preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|playbook|sagem|sharp|sie-|silk|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT'])) {
			$this->limit_news = "4";
		} else {
			$this->limit_news = "3";
		}
	}

	public function index()
	{
		//echo json_encode($this->limit_news);exit();

		//GET DATA ABOUT
		$content['about'] =  $this->home_model->select_data_about();

		//GET DATA NEWS
		$content['limit_news'] = $this->limit_news;
		$content['start_news'] = $this->start_news;
		$content['news'] =  $this->home_model->select_all_news($this->limit_news, $this->start_news);
		$news_all =  $this->home_model->select_all_news_data();
		$content['count_data_news'] = sizeof($news_all);

		//GET DATA GALLERY
		$content['gallery'] =  $this->home_model->select_all_gallery();

		//GET DATA COMMISSIONS
		$content['limit_comissions'] = $this->limit_comissions;
		$content['start_comissions'] = $this->start_comissions;
		$content['commisions'] =  $this->home_model->select_all_comissions($this->limit_comissions, $this->start_comissions);
		$commissions_all =  $this->home_model->select_all_commissions_data();
		$content['count_data_commisions'] = sizeof($commissions_all);


		$content['is_home'] = true;
		$content['is_detail'] = false;
		$content['view_content']		= 'front/home_view';
		$this->load->view('front/template_general_view', $content);
	}

	/*
	========================================
	** COMISSIONS
	========================================
	*/
	public function load_more_comissions()
	{
		$commissions_all =  $this->home_model->select_all_commissions_data();
		//echo json_encode(sizeof($commissions_all));exit();
		$data = $_POST;
		$comissions =  $this->home_model->select_all_comissions($this->limit_comissions, $data['start_comissions']);
		//echo json_encode(sizeof($comissions) > 0);exit();

		if (sizeof($comissions) > 0) {
			$html_data = '';
			foreach ($comissions as $value) {
				// $html_data .= '<div class="col-md-4 col-sm-6 col-xs-6">';

				// $html_data .= '<a href='.base_url() . "comissions_detail/" . $value['id'].' style="text-decoration: none;">';
				// $html_data .= '<div class="content" style="padding: 5px;">';
				// $html_data .= '<center><img src='.base_url().$this->path_images_comissions.$value['image'].' alt="Blair" style="max-width:100%; max-height:250px;" class="img-responsive"></center>';
				// $html_data .= '<div style="padding-left: 20px; padding-right:20px;">';

				// $html_data .= '<center class="title_item_comissions">' . strip_tags($value['title']) . '</center>';
				// if(strlen($value['description']) > 110) { 
				// 	$html_data .= '<center class="desc_item_comissions"><span class="desc_item_comissions">' . substr(strip_tags($value['description']),0,110) . "...". '</span></center>';
				// }else{
				// 	$html_data .= '<center class="desc_item_comissions"><span class="desc_item_comissions">' . strip_tags($value['description']) . '</span></center>';
				// }

				// $html_data .= ' </div></div></a></div>';

				$html_data .= '<div class="col-md-4 col-sm-6 col-xs-6 margintopcardnews">';
				$html_data .= '<a href=' . base_url() . "comissions_detail/" . $value['id'] . ' style="text-decoration: none;">';

				$html_data .= '<div class=" containercardcommisions">';
				$html_data .= '<div class="containeropacity_news" style="align-items: normal !important; padding:5px !important;">';
				$html_data .= '<center>';
				$html_data .= '<img src=' . base_url() . $this->path_images_comissions . $value['image'] . ' alt="Blair" style="max-width:100%; max-height:250px;" class="img-responsive">';
				$html_data .= '</center>';
				$html_data .= '</div>';

				$html_data .= '<div class="containerdesc_news" style="padding-bottom: 10px;">';
				$html_data .= '<div><span class="title_item_comissions titlenews_item">' . strip_tags($value['title']) . '</span></div>';

				if (strlen($value['description']) > 110) {
					$html_data .= '<div><span class="desc_item_comissions descnews_item">' . substr(strip_tags($value['description']), 0, 110) . "..." . '</span></div>';
				} else {
					$html_data .= '<div><span class="desc_item_comissions descnews_item">' . strip_tags($value['description']) . '</span></div>';
				}
				$html_data .= '</div>';
				$html_data .= '</div>';
				$html_data .= '</a>';
				$html_data .= '</div>';
			}

			$html_data .= '';
			$status_code = "1";
			//if(sizeof($comissions) < $data['start_comissions']){
			if (sizeof($commissions_all) <= ((int) $data['start_comissions'] + (int) $this->limit_comissions)) {
				$count_data = "0";
			} else {
				$count_data = "1";
			}
		} else {
			$html_data = "";
			$status_code = "0";
			$count_data = "0";
		}


		$balikan = array(
			'data_' => array(
				"data_comissions" => $html_data,
				"start_comissions" => $data['start_comissions'],
				"limit_comissions" => $data['limit_comissions'],
				"count_data" => $count_data,
			),
			'status' => $status_code,
			'message' => 'Data Ada'
		);
		echo json_encode($balikan);
	}
	public function comissions_detail($id)
	{
		$content['detail_commisions'] = $this->home_model->select_detail_comissions($id);
		$content['view_content']		= 'front/comissions_detail_view';
		$content['comissions_related'] = $this->home_model->select_comissions_related($id);
		$content['is_home'] = false;
		$content['is_detail'] = true;
		$this->load->view('front/template_general_view', $content);
	}

	/*
	========================================
	** NEWS
	========================================
	*/
	public function load_more_news()
	{
		$news_all =  $this->home_model->select_all_news_data();
		//echo json_encode(sizeof($news_all));exit();

		$data = $_POST;
		$news =  $this->home_model->select_all_news($this->limit_news, $data['start_news']);
		//echo json_encode($news);exit();

		if (sizeof($news) > 0) {
			$html_data = '';
			foreach ($news as $value) {
				// $html_data .= '<div class="col-md-4 col-sm-6 col-xs-6">';

				// $html_data .= '<a href=' .base_url() . "detail/news/" . $value['id'].' style="text-decoration: none;">';
				// $html_data .= '<div class="content">';
				// $html_data .= '<img src='.base_url().$this->path_images_news.$value['image'].' alt="Blair" style="width:100%;" class="img-responsive">';
				// $html_data .= '<div style="padding-left: 5px; padding-right:5px;">';

				// $html_data .= '<center class="title_item_comissions">' . strip_tags($value['title']) . '</center>';
				// if(strlen($value['description']) > 40) { 
				// 	$html_data .= '<center class="desc_item_comissions">' . substr(strip_tags($value['description']),0,110) . "...". '</center>';
				// }else{
				// 	$html_data .= '<center class="desc_item_comissions">' . $value['description']. '</center>';
				// }

				// $html_data .= ' </div></div></a></div>';


				// $html_data .= '<div class="col-md-4 col-sm-6 col-xs-6">';

				// $html_data .= '<a href=' .base_url() . "detail/news/" . $value['id'].' style="text-decoration: none;">';
				// $html_data .= '<div class="content">';
				// $html_data .= '<img src='.base_url().$this->path_images_news.$value['image'].' alt="Blair" style="width:100%;" class="img-responsive">';
				// $html_data .= '<div style="padding-left: 5px; padding-right:5px;">';

				// $html_data .= '<center class="title_item_comissions">' . strip_tags($value['title']) . '</center>';
				// if(strlen($value['description']) > 40) { 
				// 	$html_data .= '<center class="desc_item_comissions">' . substr(strip_tags($value['description']),0,110) . "...". '</center>';
				// }else{
				// 	$html_data .= '<center class="desc_item_comissions">' . $value['description']. '</center>';
				// }

				// $html_data .= ' </div></div></a></div>';


				$html_data .= '<div class="col-md-4 col-sm-6 col-xs-6 margintopcardnews">';
				$html_data .= '<a href=' . base_url() . "detail/news/" . $value['id'] . ' style="text-decoration: none;">';
				$html_data .= '<div class=" containercardgallery" style="border-radius:5px; background: url(' . base_url() . $this->path_images_news . $value['image'] . ') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">';
				$html_data .= '<div class="containeropacity_news">';
				$html_data .= '</div>';

				$html_data .= '<div class="containerdesc_news" style="padding-bottom: 10px;">';
				$html_data .= '<div><span class="title_item_comissions titlenews_item">' . strip_tags($value['title']) . ' </span></div>';

				if (strlen($value['description']) > 110) {
					$html_data .= '<div><span class="desc_item_comissions descnews_item">' . substr(strip_tags($value['description']), 0, 110) . "..." . '</span></div>';
				} else {
					$html_data .= '<div><span class="desc_item_comissions descnews_item">' . strip_tags($value['description']) . '</span></div>';
				}

				$html_data .= '</div></div></a></div>';
			}
			$html_data .= '';
			$status_code = "1";
			if (sizeof($news_all) <= ((int) $data['start_news'] + (int) $this->limit_news)) {
				$count_data = "0";
			} else {
				$count_data = "1";
			}
		} else {
			$html_data = "";
			$status_code = "0";
			$count_data = "0";
		}


		$balikan = array(
			'data_' => array(
				"data_news" => $html_data,
				"start_news" => $data['start_news'],
				"limit_news" => $data['limit_news'],
				"count_data" => $count_data,
			),
			'status' => $status_code,
			'message' => 'Data Ada'
		);
		echo json_encode($balikan);
	}


	/*
	========================================
	** KONTAK KAMI
	========================================
	*/
	public function kirim_kontak_kami()
	{
		$nama_data = $this->input->post('name');
		$email_data = $this->input->post('email');
		$subject_data = $this->input->post('subject');
		$message_data = $this->input->post('message');
		//echo $nama_data. '=='.$email_data, '=='. $subject_data. '=='. $message_data;exit();
		if (!empty($nama_data) && !empty($email_data) && !empty($subject_data) && !empty($message_data)) {
			$config['useragent']    = 'CodeIgniter';
			$config['protocol']    = 'smtp';
			//$config['mailpath']    = '/usr/sbin/sendmail';
			$config['smtp_host'] = 'ssl://smtp.gmail.com';
			$config['smtp_user']    = 'infohalo2020@gmail.com';
			$config['smtp_pass']    = 'thecyber20';
			$config['smtp_port']    = '465';
			$config['smtp_keepalive']    = TRUE;
			$config['smtp_crypto'] = 'SSL'; // or html
			$config['wordwrap'] = TRUE;
			$config['wrapchars'] = 80;
			$config['mailtype'] = 'html';
			$config['charset'] = 'utf-8';
			$config['validate'] = TRUE;
			$config['crlf'] = "\r\n";
			$config['newline'] = "\r\n";
			$this->email->initialize($config);
			$this->load->library('email', $config);


			//$to2 = "yohputra02@gmail.com";
			$toemail = array('yukyyusmilanda@seatech.com','hello@blairtownsendstudio.com');
			//$toemail = array('yohputra02@gmail.com');

			$subject = $subject_data;

			$message = '
			<html>
			<head>
			<title>Blair Townsend Studio</title>
			</head>

			<body>
			<p>Contact Me,<p>
			<p>Name : ' . $nama_data . '</p>
			<p>Email : ' . $email_data . '</p>
			<p>Subject : ' . $subject_data . '</p>
			<p>Message : ' . (!empty($message_data) ? $message_data : '-') . '</p>


			</body>
			</html>
			';
			$this->email->from('infohalo2020@gmail.com', 'Blair Townsend');
			$this->email->to($toemail);
			$this->email->subject($subject);
			$this->email->message($message);
			$this->email->send();

			// $this->load->helper('url');
			// redirect('', 'refresh');
			$json = array(
				'status' => 1,
				'message' => 'Success'
			);


			echo json_encode($json);
		} else {
			$json = array(
				'status' => 1,
				'message' => 'gagal'
			);
			//echo "email";exit();
			//redirect('', 'refresh');
		}
		echo json_encode($json);
	}

	public function detail_page($type, $id)
	{
		if ($type == "gallery") {
			$content['detail_gallery'] = $this->home_model->select_detail_gallery_by_id($id);
			$content['gallery_related'] = $this->home_model->select_gallery_related($id);
			$content['post_date'] = tanggal_indonesia_lengkap(substr($content['detail_gallery']['modified_date'], 0, -9));
			$content['post_time'] =  date('h:i A', strtotime(substr($content['detail_gallery']['modified_date'], -9)));
			//echo json_encode($content['post_time']);exit();
		} else {
			$content['detall_news'] = $this->home_model->select_detail_news_by_id($id);
			$content['news_related'] = $this->home_model->select_news_related($id);
			$content['post_date'] = tanggal_indonesia_lengkap(substr($content['detall_news']['modified_date'], 0, -9));
			$content['post_time'] =  date('h:i A', strtotime(substr($content['detall_news']['modified_date'], -9)));
		}
		$content['view_content']		= 'front/detail_page_view';
		$content['type'] = $type;
		$content['is_home'] = false;
		$content['is_detail'] = true;


		$this->load->view('front/template_general_view', $content);
	}
}
