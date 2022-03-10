<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function count_and_echo($variable)
{
	if ($variable->result()) {
		echo count($variable->result());
	} else {
		echo "No Data Found!";
	};
}

function monthGraph($monthList)
{
	$cluster = array();
	foreach ($monthList as $month) {
		if ('January' == $month->Month) {
			$cluster['January'] = $month->Total_Patient;
		} elseif ('February' == $month->Month) {
			$cluster['February'] = $month->Total_Patient;
		} elseif ('March' == $month->Month) {
			$cluster['March'] = $month->Total_Patient;
		} elseif ('April' == $month->Month) {
			$cluster['April'] = $month->Total_Patient;
		} elseif ('May' == $month->Month) {
			$cluster['May'] = $month->Total_Patient;
		} elseif ('June' == $month->Month) {
			$cluster['June'] = $month->Total_Patient;
		} elseif ('July' == $month->Month) {
			$cluster['July'] = $month->Total_Patient;
		} elseif ('August' == $month->Month) {
			$cluster['August'] = $month->Total_Patient;
		} elseif ('September' == $month->Month) {
			$cluster['September'] = $month->Total_Patient;
		} elseif ('October' == $month->Month) {
			$cluster['October'] = $month->Total_Patient;
		} elseif ('November' == $month->Month) {
			$cluster['November'] = $month->Total_Patient;
		} elseif ('December' == $month->Month) {
			$cluster['December'] = $month->Total_Patient;
		}
	}
	return $cluster;
}

function showYearName()
{
	$dataDriver = &get_instance();
	if ($dataDriver->input->post("yearName")) {
		$getYear = $dataDriver->input->post("yearName");
	} else {
		$getYear = Date("Y");
	};
	return $getYear;
}
function showMonthName()
{
	$dataDriver = &get_instance();
	if ($dataDriver->input->post("monthName")) {
		$getMonth = $dataDriver->input->post("monthName");
	} else {
		$getMonth = Date("m");
	};
	return $getMonth;
}

function findPatientGenders($patientId)
{
	$dataDriver = &get_instance();
	$dataDriver->db->select('*')->where('p_id', $patientId)->where('p_gender', 'male')->get('patient_basic_info');
}


function getSum($value, $totalValue)
{
	if ($value != 0) {
		return number_format((float)($value + $totalValue));
	} else {
		return 0;
	}
}


function getParentageMod($value, $totalValue)
{
	if ($totalValue != 0) {
		return number_format((float)($value / $totalValue) * 100, 2, '.', '');
	} else {
		return 0;
	}
}

function avarage($value, $totalValue)
{
	return number_format((float)($totalValue / $value), 2, '.', '');;
}
