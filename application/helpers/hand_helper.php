<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function set_confirmation_msg($data, $true_msg, $false_msg)
{
	$mx = &get_instance();
	$confirm = 0;
	if ($data == FALSE) {
		$mx->session->set_flashdata('error', $false_msg);
	} else {
		$mx->session->set_flashdata('success', $true_msg);
		$confirm = 1;
	}
	return $confirm;
}
function numberToWorld($number)
{
	$search_array = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
	$replace_array = array("One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Zero");
	$wordN = str_replace($search_array, $replace_array, $number);

	return $wordN;
}


function alert_check()
{
	$mx = &get_instance();

	if ($success = $mx->session->flashdata('success')) {
?>
		<div class="alert alert-info alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4> <?= $success; ?></h4>
		</div>
	<?php } ?>

	<?php
	if ($error = $mx->session->flashdata('error')) {
	?>
		<div class="alert alert-danger">
			<strong>Error!</strong> <?= $error; ?>
		</div>
	<?php }
}

function alert_check_for_delete()
{
	$mx = &get_instance();

	if ($success = $mx->session->flashdata('success')) {
	?>
		<script>
			alert("Successfully deleted Selected Item's")
		</script>
		<div class="alert alert-sm alert-info alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4> <?= $success; ?></h4>
		</div>
	<?php } ?>

	<?php
	if ($error = $mx->session->flashdata('error')) {
		echo '<script>alert("Select At Least One Checkbox")</script>';
	?>

	<?php }
}

function pegination_genarate($links)
{
	?>
	<div style="padding: 60px;">
		<nav aria-label="Page navigation">
			<div class="pagination">
				<ul class="pagination">
					<?php foreach ($links as $link) {
						echo "<li>" . $link . "</li>";
					} ?>
			</div>
		</nav>
	</div>


<?php

}

function timeformater($getTime)
{
	return date("Y-m-d", strtotime($getTime));
}

function shorten_string($string, $wordsreturned)
{
	$retval = $string;
	$array = explode(" ", $string);
	if (count($array) <= $wordsreturned) {
		$retval = $string;
	} else {
		array_splice($array, $wordsreturned);
		$retval = implode(" ", $array) . " ";
	}
	return $retval;
}

function active_nav($nav, $check_nav)
{
	if ($nav == $check_nav) {
		return "active";
	}
}

function active_open($nav, $check_nav)
{
	if ($nav == $check_nav) {
		return "menu-open";
	}
}

function bn_date($str)
{
	$en = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
	$bn = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০');
	$str = str_replace($en, $bn, $str);
	$en = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	$en_short = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
	$bn = array('জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর');
	$str = str_replace($en, $bn, $str);
	$str = str_replace($en_short, $bn, $str);
	$en = array('Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
	$en_short = array('Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri');
	$bn_short = array('শনি', 'রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহঃ', 'শুক্র');
	$bn = array('শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার');
	$str = str_replace($en, $bn, $str);
	$str = str_replace($en_short, $bn_short, $str);
	$en = array('am', 'pm');
	$bn = array('পূর্বাহ্ন', 'অপরাহ্ন');
	$str = str_replace($en, $bn, $str);
	return $str;
}

function date_tine_formater($get_date)
{
	$dt = new DateTime($get_date, new DateTimezone('Asia/Dhaka'));
	return $dt->format('l, d M Y, h:i a');
}

function x_debug($data)
{
	echo '<pre>';
	print_r($data);
	echo "<br>";
	exit();
}


function get_current_time()
{

	$date = new DateTime('now', new DateTimezone('Asia/Dhaka'));
	$current_time = $date->format('Y-m-d H:i') . "\n";
	return $current_time;
}

function get_current_date()
{

	$date = new DateTime('now', new DateTimezone('Asia/Dhaka'));
	$current_time = $date->format('Y-m-d') . "\n";
	return $current_time;
}
function get_compare_datetime_year($datetime_1, $date_time_2)
{

	$diff = abs(strtotime($date_time_2) - strtotime($datetime_1));

	$years = floor($diff / (365 * 60 * 60 * 24));
	return $years;
}

function get_compare_datetime_month($datetime_1, $date_time_2)
{

	$diff = abs(strtotime($date_time_2) - strtotime($datetime_1));
	$years = floor($diff / (365 * 60 * 60 * 24));
	$months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
	return $months;
}

function get_compare_datetime_day($datetime_1, $date_time_2)
{
	$diff = abs(strtotime($date_time_2) - strtotime($datetime_1));
	$years = floor($diff / (365 * 60 * 60 * 24));
	$months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
	$days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
	return $days;
}

//---------------------------------------//

function y_m_1()
{
	$start_date = date('Y-m-1');
	return $start_date;
}

function current_day()
{
	$current_day = date('d');
	return $current_day;
}

function current_date()
{
	$current_day = date('d');
	return $current_day;
}

function y_m()
{
	$start_date = date('Y-m-');
	return $start_date;
}

function year()
{
	$start_date = date('Y');
	return $start_date;
}
function month()
{
	$start_date = date('m');
	return $start_date;
}

function start_date_savings()
{
	$start_date = date('Y-m-1 24:00:00');
	return $start_date;
}


function x_call()
{
	$driverInstanse = &get_instance();
	echo '<pre>';
	print_r($driverInstanse->input->post());
	echo "<br>";
	exit();
}
function checkSimilarity($new, $old)
{
	if ($new != $old) {
		echo 'background:chocolate';
	}
}

function quickAccessB()
{
	$xcaliver = &get_instance();
	$data['nothing'] = '';
	$xcaliver->load->view('reports_b/quickaccess_b', $data);
}
?>
<!-- have wrong in here  -->
<script>
	function getCurrentDatejs(f_id) {
		var d = new Date();
		var n = d.getFullYear();
		document.getElementById(f_id).innerHTML = n;
	}
</script>