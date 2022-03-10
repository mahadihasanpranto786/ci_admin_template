<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Engine extends CI_Controller
{
	public function __construct()
	{
		$xcaliver = &get_instance();
	}


	public function image_upload($file_name, $file_path)
	{
		$xcaliver = &get_instance();
		$config['upload_path'] = $file_path;
		$config['allowed_types'] = 'gif|jpg|png|JPG|JEPG';

		$xcaliver->load->library('upload', $config);
		if (!$xcaliver->upload->do_upload($file_name)) {
			$error = array('error' => $xcaliver->upload->display_errors());
			print_r($error);
			echo $file_path;
			echo "<br>";
			echo "<script>alert('image does not supported ')</script>";
			echo $path;
			//return "demoproduct-500x500.jpg";
			exit();
		} else {
			return $xcaliver->upload->data('file_name');
		}
	}

	public function image_upload_mod($file_name, $file_path, $extra)
	{
		$xcaliver = &get_instance();
		$config['upload_path'] = $file_path;
		$config['allowed_types'] = 'gif|jpg|png';

		$xcaliver->load->library('upload', $config);
		if (!$xcaliver->upload->do_upload($file_name)) {
			/*$error = array('error' => $xcaliver->upload->display_errors());
			echo "<script>alert('image does not supported ')</script>";*/
		} else {

			return $xcaliver->upload->data('file_name');
		}
	}


	public function sms($phone, $sms)
	{
		$url = 'http://api.riasatharif.com/sentsms?' . http_build_query(
			[
				"api_key" => "",
				"type" => "",
				"contacts" => $phone,
				"msg" => $sms,
			]
		);
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
	}

	public function backup_system()
	{

		$this->load->dbutil();
		$prefs = array(
			'format'      => 'zip',
			'filename'    => 'my_db_backup.sql'
		);
		$backup = &$this->dbutil->backup($prefs);
		$db_name = 'backup-on-' . date("Y-m-d-H-i-s") . '.zip';
		$save = 'backupdb/' . $db_name;
		$this->load->helper('file');
		write_file($save, $backup);
		$this->load->helper('download');
		force_download($db_name, $backup);
		echo 'backup Complete';
	}

	public function create_pdf($print_design, $data)
	{
		$xcaliver = &get_instance();
		$html_content = $xcaliver->load->view($print_design, $data, true);
		$xcaliver->load->library('pdf');
		$xcaliver->pdf->loadHtml($html_content);
		$xcaliver->pdf->render();
		$output = $xcaliver->pdf->output();
		file_put_contents('Brochure.pdf', $output);
	}

	public function store_nav($main_nav, $sub_nav, $tittle)
	{
		$data['main_nav'] = $main_nav;
		$data['sub_nav'] = $sub_nav;
		$data['tittle'] = $tittle;
		return $data;
	}


	public function render_view($data, $content, $side_menu, $main_content)
	{
		$xcaliver = &get_instance();
		$data['side_menu'] = $xcaliver->load->view($side_menu, $data, TRUE);
		$data['main_content'] = $xcaliver->load->view($content, $data, TRUE);
		$xcaliver->load->view($main_content, $data);
	}
}
