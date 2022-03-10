<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function patientDemographics()
{
	$sql
		= "SELECT count(p_gender)as total, count(case p_gender when 'male' then 1 else null end) as malePatieant, count(case p_gender when 'female' then 1 else null end) as femalePatieant, count(case p_gender when 'others' then 1 else null end) as otherPatieant  FROM patient_basic_info Where p_status=1";
	return $sql;
}

// Patient Enrolled Visit Type Report B
function patientsEnrolleGet($year)
{
	$sql
		= "SELECT par_vt_type,par_vt_type enroll, MONTHNAME(par_prescription_date) as month_name,Year(par_prescription_date) as year_name,count(par_id) as Total
	FROM patient_appointment_register
	WHERE par_vt_type IN (25,26,29) AND YEAR(par_prescription_date) = '$year' AND par_doctor_seen_status = 1 
	GROUP BY YEAR(par_prescription_date), MONTH(par_prescription_date),par_vt_type";
	return $sql;
}

// Track Program Outcomes Fluid Follow up Get Data Sql
function trackProgramOutcomesFluidCalls($year)
{
	$sql
		= "SELECT fluid_restriction,id as fluid, MONTHNAME(oc_created_at)as month_name,Year(oc_created_at) as year_name,count(id) as Total
		FROM follow_up
		WHERE fluid_restriction IN (1,2,3) AND YEAR(oc_created_at) = '$year' AND oc_status = 1
		GROUP BY YEAR(oc_created_at), MONTH(oc_created_at),fluid_restriction";
	return $sql;
}
// Track Program Outcomes Diet Follow up Get Data Sql
function trackProgramOutcomesDietCalls($year)
{
	$sql
		= "SELECT diet_restriction,id as diet, MONTHNAME(oc_created_at)as month_name,Year(oc_created_at) as year_name,count(id) as Total
		FROM follow_up
		WHERE diet_restriction IN (1,2,3) AND YEAR(oc_created_at) = '$year' AND oc_status = 1
		GROUP BY YEAR(oc_created_at), MONTH(oc_created_at),diet_restriction";
	return $sql;
}


function patient_status_wise_telephone_call($year, $day, $month)
{
	$sql
		= "SELECT pswtc_remark,pswtc_remark as calling, DAY(pswtc_tel_date)as day_name,MONTHNAME(pswtc_tel_date)as month_name,Year(pswtc_tel_date) as year_name,count(pswtc_id) as Total
		FROM patient_status_wise_telephone_call
		WHERE pswtc_remark IN (1,2,3,4) AND YEAR(pswtc_tel_date) = '$year' AND pswtc_status =0 AND DAY(pswtc_tel_date)='$day' AND MONTH(pswtc_tel_date) = '$month'
		GROUP BY YEAR(pswtc_tel_date), MONTH(pswtc_tel_date),pswtc_remark";
	return $sql;
}
function patient__total_telephone_call($year)
{
	$sql
		= "SELECT pswtc_id,pswtc_id as calling, DAY(pswtc_tel_date)as day_name,MONTHNAME(pswtc_tel_date)as month_name,Year(pswtc_tel_date) as year_name,count(pswtc_id) as Total
		FROM patient_status_wise_telephone_call
		WHERE pswtc_id AND YEAR(pswtc_tel_date) = '$year' AND pswtc_status IN (0,1)
		GROUP BY YEAR(pswtc_tel_date), MONTH(pswtc_tel_date)";
	return $sql;
}








// Track Program Outcomes Exercises And Activities Follow up Get Data Sql
function trackProgramOutcomesExercisesCalls($year)
{
	$sql
		= "SELECT exercise_activity,id as diet, MONTHNAME(oc_created_at)as month_name,Year(oc_created_at) as year_name,count(id) as Total
		FROM follow_up
		WHERE exercise_activity IN (1,2,3) AND YEAR(oc_created_at) = '$year' AND oc_status = 1
		GROUP BY YEAR(oc_created_at), MONTH(oc_created_at),exercise_activity";
	return $sql;
}
function nyha_month_wise_PatientType_Mod($year)
{
	$sql
		= "SELECT p_ss_id,p_ss_id as nyas,MONTHNAME(par_prescription_date)as month_name,Year(par_prescription_date) as year_name,count(p_id) as Total
		FROM patient_sign_symptom 
		INNER JOIN patient_appointment_register
		ON patient_appointment_register.par_id = patient_sign_symptom.par_id
		WHERE p_ss_id IN (20,21,22,23) AND YEAR(par_prescription_date) = '$year' AND par_doctor_seen_status = 1
		GROUP BY YEAR(par_prescription_date), MONTH(par_prescription_date),p_ss_id";

	return $sql;
}


// Patient Visit Type Get Data Sql
function patientDemographicsVisitType()
{
	$sql = "SELECT patient_appointment_register.par_prescription_date, count(par_vt_type)as total, count(case par_vt_type when '25' then 1 else null end) as inPatient, count(case par_vt_type when '26' then 1 else null end) as outPatient, count(case par_vt_type when '29' then 1 else null end) as virtualPatient  FROM patient_appointment_register Where par_doctor_seen_status=1";
	//$sql = "SELECT patient_appointment_register.par_prescription_date, count(par_vt_type)as total, count(case par_vt_type when '25' then 1 else null end) as inPatient, count(case par_vt_type when '26' then 1 else null end) as outPatient, count(case par_vt_type when '29' then 1 else null end) as virtualPatient  FROM patient_appointment_register Where par_doctor_seen_status=1 AND patient_appointment_register.par_prescription_date != ''";
	return $sql;
}
// Patient Visit Type Get Data Sql



// Patient Visit Type Get Data Sql
function patientDemographicsVisitTypeMonthWays($year)
{
	$sql
		= "SELECT vt_title,par_vt_type as visit, MONTHNAME(par_prescription_date)as month_name,Year(par_prescription_date) as year_name,count(par_id) as all_data
		FROM patient_appointment_register
		INNER JOIN visit_type
		ON visit_type.vt_id = patient_appointment_register.par_vt_type
		WHERE par_vt_type IN (25,26,29) AND YEAR(par_prescription_date) = '$year' AND par_doctor_seen_status = 1
		GROUP BY YEAR(par_prescription_date), MONTH(par_prescription_date),par_vt_type";
	return $sql;
}

// All Patients Appointed Registration Data Get
function patientRegistrationMonthWays($year)
{
	$sql
		= "SELECT par_id,par_id as patients,MONTHNAME(par_prescription_date)as month_name,Year(par_prescription_date) as year_name,count(par_id) as r
		FROM patient_appointment_register WHERE par_id AND YEAR(par_prescription_date) = '$year' AND par_doctor_seen_status = 1
		GROUP BY YEAR(par_prescription_date), MONTH(par_prescription_date)";
	return $sql;
}
// All Patients Registration Data Get
function patientRegistrationsMonthWays($year)
{
	$sql
		= "SELECT p_id,p_id as patients,MONTHNAME(p_date_of_assesment)as month_name,Year(p_date_of_assesment) as year_name,count(p_id) as r
		FROM patient_basic_info WHERE p_id AND YEAR(p_date_of_assesment) = '$year' AND p_status = 1
		GROUP BY YEAR(p_date_of_assesment), MONTH(p_date_of_assesment)";
	return $sql;
}
// Patient Gender Ratio Get Sql Report 
function patientsGenderRatioGet()
{
	$sql
		= "SELECT * FROM patient_basic_info
	WHERE p_gender IN ('male','female','others') AND p_status = 1";
	return $sql;
}


function patientsAgeRangeModByPatientList()
{
	$sql
		= "SELECT * FROM patient_basic_info Where p_status = 1 AND case 
	    when (p_age) between 1 and 17 then '1-17'
	    when (p_age) between 18 and 30 then '18-30'
	    when (p_age) between 31 and 55 then '31-55'
	    when (p_age) between 56 and 100000000 then '56-100000000'
	    END";
	return $sql;
}
function patientsEmptyAge()
{
	$sql
		= "SELECT * FROM patient_basic_info Where p_status = 1 AND p_age = ''";
	return $sql;
}

// Antiplated  Data Get 
function antiplateletDrugsGet($year)
{
	$sql
		= "SELECT MONTHNAME(patient_appointment_register.par_prescription_date)as month_name,Year(patient_appointment_register.par_prescription_date) as year_name,count(prm_id) as Total
        FROM prescription_medicine 
        JOIN medicine on medicine.m_id= prescription_medicine.me_id
        JOIN m_category on m_category.mc_id = medicine.m_category_id
        JOIN patient_appointment_register on patient_appointment_register.par_id = prescription_medicine.par_id
        WHERE m_category.mc_id=8 AND YEAR(patient_appointment_register.par_prescription_date)='$year'
        GROUP By MONTH(patient_appointment_register.par_prescription_date)";
	return $sql;
}

//  AA Prescribed Data Get 
function aaGet($year)
{
	$sql
		= "SELECT m_category_id,m_id as medicine, MONTHNAME(prm_created_at)as month_name,Year(prm_created_at) as year_name,count(prm_id) as Total
		FROM prescription_medicine
	 JOIN medicine
		ON medicine.m_id = prescription_medicine.me_id
		WHERE m_category_id IN (6) AND YEAR(prm_created_at) = '$year' AND prm_status = 1
		GROUP BY YEAR(prm_created_at), MONTH(prm_created_at),m_category_id";
	return $sql;
}



// Hemoglobin Value data get
function hemoglobinValueRangeMod()
{
	$sql
		= "SELECT  * FROM patient_cbc 
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_cbc.p_id
		Where pcbc_date_report in (SELECT MAX(pcbc_date_report) FROM patient_cbc
		GROUP BY p_id) AND pcbc_status = 1 AND  p_status =1
		AND (case 
		when (pcbc_hb) between 0.01 and 9.99 then '0.01-9.99'
		when (pcbc_hb) between 10.00 and 14.00 then '10.00-14.00'
		 when (pcbc_hb) between 14.01 and 1000000000000.0000 then '14.01-1000000000000.0000' 
	    END)";
	return $sql;
}
function lastHemoglobinValueRangeMod($min, $max)
{
	$sql
		= "SELECT  
		count(case when (pcbc_hb) between $min and $max then '0.01-9.99' END) as Total1,
		count(case when (pcbc_hb) between $min and $max then '10.00-14.00' END) as Total2,
		count(case when (pcbc_hb) between $min and $max then '14.01-1000000000000.0000' END) as Total3 FROM patient_cbc 
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_cbc.p_id
		Where pcbc_date_report in (SELECT MAX(pcbc_date_report) FROM patient_cbc
		GROUP BY p_id) AND pcbc_status = 1 AND  p_status =1";
	return $sql;
}
function hemoglobinValueByPatientRangeMod($min, $max)
{
	$sql
		= "SELECT * FROM patient_cbc 
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_cbc.p_id
		Where pcbc_date_report in (SELECT MAX(pcbc_date_report) FROM patient_cbc
		GROUP BY p_id) AND pcbc_status = 1 AND  p_status =1
		AND (case 
		when (pcbc_hb) between $min and $max then '0.01-9.99'
		when (pcbc_hb) between $min and $max then '10.00-14.00'
		 when (pcbc_hb) between $min and $max then '14.01-1000000000000.0000' 
	    END)";
	return $sql;
}
// Creatinine Value data get
function creatinineValueRangeMod()
{
	$sql
		= "SELECT  * FROM patient_s_creatinine
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_s_creatinine.p_id
		 Where psc_date_report in (SELECT MAX(psc_date_report) FROM patient_s_creatinine
		GROUP BY p_id) AND psc_status = 1 AND p_status =1
		AND (case 
		when (psc_value) between 0.01 and 1.19 then '0.01-1.19'
	    when (psc_value) between 1.20 and 2.00 then '1.20-2.00'
	    when (psc_value) between 2.01 and 100000000000.00 then '2.01-100000000000.00'
	    END)";
	return $sql;
}
function lastCreatinineValueRangeMod($min, $max)
{
	$sql
		= "SELECT  
		count(case when (psc_value) between $min and $max then '0.01-1.19' END) as Total1,
		count(case when (psc_value) between $min and $max then '1.20-2.00'  END) as Total2,
		count(case when (psc_value) between $min and $max then '2.01-100000000000.00' END) as Total3 FROM patient_s_creatinine
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_s_creatinine.p_id
		 Where psc_date_report in (SELECT MAX(psc_date_report) FROM patient_s_creatinine
		GROUP BY p_id) AND psc_status = 1 AND p_status =1";
	return $sql;
}
function lastCreatinineValueByPatientRangeMod($min, $max)
{
	$sql
		= "SELECT * FROM patient_s_creatinine
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_s_creatinine.p_id
		 Where psc_date_report in (SELECT MAX(psc_date_report) FROM patient_s_creatinine
		GROUP BY p_id) AND psc_status = 1 AND p_status =1
		AND (case 
		when (psc_value) between $min and $max then '0.01-1.19'
	    when (psc_value) between $min and $max then '1.20-2.00'
	    when (psc_value) between $min and $max then '2.01-100000000000.00'
	    END)";
	return $sql;
}
function creatinineValueRangeModByPatientsList($year)
{
	$sql
		= "SELECT  * FROM patient_s_creatinine
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_s_creatinine.p_id
		 Where psc_status = 1 AND YEAR(psc_date) = '$year' AND p_status =1
		AND (case  
	    when (psc_value) between 0.01 and 1.19 then '0.01-1.19'
	    when (psc_value) between 1.20 and 2.00 then '1.20-2.00'
	    when (psc_value) between 2.01 and 100000000000.00 then '2.01-100000000000.00'
	    END) group by p_mr_no";
	return $sql;
}
// echo Value data get

function echoEjectionRangeMod()
{
	$sql
		= "SELECT * FROM patient_basic_info
		JOIN patient_echo
		ON patient_basic_info.p_id = patient_echo.p_id
		Where pecho_date_report in (SELECT MAX(pecho_date_report) FROM patient_echo
		GROUP BY p_id) AND pecho_status = 1 AND p_status = 1
		AND (case 
	    when (pecho_ef) between 1 and 29 then '1-29' 
	    when (pecho_ef) between 30 and 40 then '30-40' 
	    when (pecho_ef) between 41 and 50 then '41-50'
	    when (pecho_ef) between 51 and 100000000 then '51-100000000'
	    END) 
		
		";
	return $sql;
}
function echoLastEjectionRangeMod($min, $max)
{
	$sql
		= "SELECT 
		count(case when (pecho_ef) between $min and $max then '1-29'  END) as Total1,
		count(case when (pecho_ef) between  $min and $max then '30-40'  END) as Total2,
		count(case when (pecho_ef)  between $min and $max then '41-50' END) as Total3,
		count(case when (pecho_ef) between $min and $max then '51-100000000' END) as Total4 FROM patient_basic_info
		JOIN patient_echo
		ON patient_basic_info.p_id = patient_echo.p_id
		Where pecho_date_report in (SELECT MAX(pecho_date_report) FROM patient_echo
		GROUP BY p_id) AND pecho_status = 1 AND p_status = 1";
	return $sql;
}
function echoLastEjectionRangeModByPatientList($min, $max)
{
	$sql
		= "SELECT * FROM patient_basic_info
		JOIN patient_echo
		ON patient_basic_info.p_id = patient_echo.p_id
		Where pecho_date_report in (SELECT MAX(pecho_date_report) FROM patient_echo
		GROUP BY p_id) AND pecho_status = 1 AND p_status = 1
		AND (case 
	    when (pecho_ef) between $min and $max then '1-29' 
	    when (pecho_ef) between $min and $max then '30-40' 
	    when (pecho_ef) between $min and $max then '41-50'
	    when (pecho_ef) between $min and $max then '51-100000000'
	    END) 
		
		";
	return $sql;
}
function egfrCategory()
{
	$sql
		= "SELECT * FROM patient_basic_info
		JOIN patient_s_creatinine
		ON patient_basic_info.p_id = patient_s_creatinine.p_id
		Where psc_date_report in (SELECT MAX(psc_date_report) FROM patient_s_creatinine
		GROUP BY p_id) AND psc_status = 1 AND p_status = 1
		AND (case 
	    when (psc_egfr_g1) between 90 and 100000000 then '90-100000000' 
	    when (psc_egfr_g2) between 60 and 89 then '60-89' 
	    when (psc_egfr_g3) between 45 and 59 then '45-59'
	    when (psc_egfr_g3) between 30 and 44 then '30-44'
	    when (psc_egfr_g4) between 15 and 29 then '15-29'
	    when (psc_egfr_g5) between 1 and 14 then '1-14'
	    END)";
	return $sql;
}
function egfrHasForNotInPattientListCategory()
{
	$sql
		= "SELECT * FROM patient_basic_info
		JOIN patient_s_creatinine
		ON patient_basic_info.p_id = patient_s_creatinine.p_id
		Where psc_date_report in (SELECT MAX(psc_date_report) FROM patient_s_creatinine
		GROUP BY p_id) AND psc_status = 1 AND p_status = 1
		AND (case 
	    when (psc_egfr_g1) between 1 and 100000000 then '1-100000000' 
	    when (psc_egfr_g2) between 1 and 100000000 then '1-100000000' 
	    when (psc_egfr_g3) between 1 and 100000000 then '1-100000000'
	    when (psc_egfr_g4) between 1 and 100000000 then '1-100000000'
	    when (psc_egfr_g5) between 1 and 100000000 then '1-100000000'
	    END)";
	return $sql;
}
function egfrOutCategory()
{
	$sql
		= "SELECT * FROM patient_basic_info
		JOIN patient_s_creatinine
		ON patient_basic_info.p_id = patient_s_creatinine.p_id
		Where psc_date_report in (SELECT MAX(psc_date_report) FROM patient_s_creatinine
		GROUP BY p_id) AND psc_status = 1 AND p_status = 1
		AND (case 
	    when (psc_egfr_g1) between 1 and 89 then '1-89' 
	    when (psc_egfr_g2) between 1 and 59 then '1-59'
	    when (psc_egfr_g2) between 90 and 10000 then '90-10000'  
	    when (psc_egfr_g3) between 1 and 29 then '1-29'
	    when (psc_egfr_g3) between 60 and 10000 then '60-10000'
	    when (psc_egfr_g4) between 1 and 14 then '1-14'
	    when (psc_egfr_g4) between 30 and 10000 then '30-10000'
	    when (psc_egfr_g5) between 15 and 10000 then '15-10000'
	    END)";
	return $sql;
}
function lastEgfrCategory($min, $max)
{
	$sql
		= "SELECT  	
		count(case when (psc_egfr_g1) between $min and $max then '90-100000000' END) as Total1,
		count(case when (psc_egfr_g2) between $min and $max then '60-89' END) as Total2,
		count(case when (psc_egfr_g3) between $min and $max then '45-59' END) as Total3,
		count(case when (psc_egfr_g3) between $min and $max then '30-44' END) as Total4,
		count(case when (psc_egfr_g4) between $min and $max then '15-29' END) as Total5,
		count(case when (psc_egfr_g5) between $min and $max then '1-14' END) as Total6 FROM patient_basic_info
		JOIN patient_s_creatinine
		ON patient_basic_info.p_id = patient_s_creatinine.p_id
		Where psc_date_report in (SELECT MAX(psc_date_report) FROM patient_s_creatinine
		GROUP BY p_id) AND psc_status = 1 AND p_status = 1";
	return $sql;
}
function lastEgfrCategoryByPatientList($coloumn, $min, $max)
{
	$sql
		= "SELECT * FROM patient_basic_info
		JOIN patient_s_creatinine
		ON patient_basic_info.p_id = patient_s_creatinine.p_id
		Where psc_date_report in (SELECT MAX(psc_date_report) FROM patient_s_creatinine
		GROUP BY p_id) AND psc_status = 1 AND p_status = 1
		AND (case 
	    when ($coloumn) between $min and $max then '1' 
	    /* when (psc_egfr_g2) between $min and $max then '60-89' 
	    when (psc_egfr_g3) between $min and $max then '45-59'
	    when (psc_egfr_g3) between $min and $max then '30-44'
	    when (psc_egfr_g4) between $min and $max then '15-29'
	    when (psc_egfr_g5) between $min and $max then '1-14' */
	    END)";
	return $sql;
}
function ecgQRSRangeMod($year)
{
	$sql
		= "SELECT  pecg_qrs,pecg_qrs as ecg,MONTHNAME(pecg_date)as month_name,Year(pecg_date) as year_name,count(pecg_id) as Total
		FROM patient_ecg
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_ecg.p_id
	     Where  pecg_status = 1 AND YEAR(pecg_date) = '$year' AND p_status =1
		group by YEAR(pecg_date),MONTH(pecg_date), case 
	    when (pecg_qrs) between 1 and 119 then '1-119'
	    when (pecg_qrs) between 120 and 150 then '120-150'
	    when (pecg_qrs)  > 150 then '>150' 
	    END";
	return $sql;
}
function ecgQRSRangeModByPatientList()
{
	$sql
		= "SELECT *	FROM patient_basic_info
		JOIN patient_ecg
		ON patient_basic_info.p_id = patient_ecg.p_id
	     Where pecg_date_report in (SELECT MAX(pecg_date_report) FROM patient_ecg
		GROUP BY p_id) AND pecg_status = 1 AND p_status =1 
	     AND (case 
	    when (pecg_qrs) between 1 and 119 then '1-119'
	    when (pecg_qrs) between 120 and 150 then '120-150'
	    when (pecg_qrs) between 151 and 100000000 then '100000000'
	    END)";
	return $sql;
}
function ecgLastQRSRangeModList($min, $max)
{
	$sql
		= "SELECT 
		count(case when (pecg_qrs) between $min and $max then '1-119' END) as Total1,
		count(case when (pecg_qrs) between $min and $max then '120-150' END) as Total2,
		count(case when (pecg_qrs) between $min and $max then '100000000' END) as Total3
			FROM patient_basic_info
		JOIN patient_ecg
		ON patient_basic_info.p_id = patient_ecg.p_id
	     Where pecg_date_report in (SELECT MAX(pecg_date_report) FROM patient_ecg
		GROUP BY p_id) AND pecg_status = 1 AND p_status =1";
	return $sql;
}
function ecgLastQRSRangeModByPatientList($min, $max)
{
	$sql
		= "SELECT * FROM patient_basic_info
		JOIN patient_ecg
		ON patient_basic_info.p_id = patient_ecg.p_id
	     Where pecg_date_report in (SELECT MAX(pecg_date_report) FROM patient_ecg
		GROUP BY p_id) AND pecg_status = 1 AND p_status =1 
	     AND (case 
	    when (pecg_qrs) between $min and $max then '1-119'
	    when (pecg_qrs) between $min and $max then '120-150'
	    when (pecg_qrs) between $min and $max then '100000000' 
	    END)";
	return $sql;
}


function ecgBBBMod()
{
	$sql
		= "SELECT * FROM patient_ecg 
		INNER JOIN patient_ecg_bbb
		ON patient_ecg.pecg_id = patient_ecg_bbb.peb_ecg_row_id
		INNER JOIN patient_basic_info
		ON patient_ecg.p_id = patient_basic_info.p_id
		WHERE peb_title IN ('NONE','RBBB','LBBB','LAHB') AND pecg_date_report in (SELECT MAX(pecg_date_report) FROM patient_ecg
		GROUP BY p_id) AND peb_status = 1 AND pecg_status = 1 AND p_status = 1";
	return $sql;
}
function ecgLastBBBMod($id)
{
	$sql
		= "SELECT 
		sum(case when peb_title = 'NONE' then 1 else Null end) as Total1,
		sum(case when peb_title = 'RBBB' then 1 else Null end) as Total2,
		sum(case when peb_title = 'LBBB' then 1 else Null end) as Total3,
		sum(case when peb_title = 'LAHB' then 1 else Null end) as Total4 FROM patient_ecg 
		INNER JOIN patient_ecg_bbb
		ON patient_ecg.pecg_id = patient_ecg_bbb.peb_ecg_row_id
		INNER JOIN patient_basic_info
		ON patient_ecg.p_id = patient_basic_info.p_id
		WHERE peb_title IN ('$id') AND pecg_date_report in (SELECT MAX(pecg_date_report) FROM patient_ecg
		GROUP BY p_id) AND peb_status = 1 AND pecg_status = 1 AND p_status = 1";
	return $sql;
}
function ecgLastSingleBBBMod($id)
{
	$sql
		= "SELECT * FROM patient_ecg 
		INNER JOIN patient_ecg_bbb
		ON patient_ecg.pecg_id = patient_ecg_bbb.peb_ecg_row_id
		INNER JOIN patient_basic_info
		ON patient_ecg.p_id = patient_basic_info.p_id
		WHERE peb_title IN ('$id') AND pecg_date_report in (SELECT MAX(pecg_date_report) FROM patient_ecg
		GROUP BY p_id) AND peb_status = 1 AND pecg_status = 1 AND p_status = 1";
	return $sql;
}
function ecgHeartBlockMod()
{
	$sql
		= "SELECT * FROM patient_ecg 
		INNER JOIN patient_basic_info
		ON patient_ecg.p_id = patient_basic_info.p_id
		WHERE pecg_heart_block IN ('1','2','3','0') AND pecg_date_report in (SELECT MAX(pecg_date_report) FROM patient_ecg
		GROUP BY p_id) AND pecg_status = 1 AND p_status = 1";
	return $sql;
}
function ecgLastHeartBlockMod($id)
{
	$sql
		= "SELECT 
		sum(case when pecg_heart_block = '0' then 1 else Null end) as Total,
		sum(case when pecg_heart_block = '1' then 1 else Null end) as TotalII,
		sum(case when pecg_heart_block = '2' then 1 else Null end) as TotalIII,
		sum(case when pecg_heart_block = '3' then 1 else Null end) as TotalIV FROM patient_ecg 
		INNER JOIN patient_basic_info
		ON patient_ecg.p_id = patient_basic_info.p_id
		WHERE pecg_heart_block IN ('$id') AND pecg_date_report in (SELECT MAX(pecg_date_report) FROM patient_ecg
		GROUP BY p_id) AND pecg_status = 1 AND p_status = 1";
	return $sql;
}
function ecgLastSingleHeartBlockMod($id)
{
	$sql
		= "SELECT * FROM patient_ecg 
		INNER JOIN patient_basic_info
		ON patient_ecg.p_id = patient_basic_info.p_id
		WHERE pecg_heart_block IN ('$id') AND pecg_date_report in (SELECT MAX(pecg_date_report) FROM patient_ecg
		GROUP BY p_id) AND pecg_status = 1 AND p_status = 1";
	return $sql;
}

function ecgExtraBeatsMod()
{
	$sql
		= "SELECT * FROM patient_ecg 
		INNER JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_ecg.p_id
		WHERE pecg_ex_beats in ('Yes','No') AND  pecg_date_report in (SELECT MAX(pecg_date_report) FROM patient_ecg
		GROUP BY p_id) AND pecg_status = 1 AND p_status = 1";
	return $sql;
}
function ecgLastExtraBeatsMod($id)
{
	$sql
		= "SELECT 
		sum(case when pecg_ex_beats_sub_category = 'Atrial' then 1 else 0 end) as Total,
		sum(case when pecg_ex_beats_sub_category = 'Ventricular' then 1 else 0 end) as TotalII,
		sum(case when pecg_ex_beats_sub_category = 'Nodal' then 1 else 0 end) as TotalIII FROM patient_ecg 
		INNER JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_ecg.p_id
		WHERE pecg_ex_beats_sub_category IN ('$id') AND pecg_date_report in (SELECT MAX(pecg_date_report) FROM patient_ecg
		GROUP BY p_id) AND pecg_status = 1 AND p_status = 1";
	return $sql;
}
function ecgLastExtraBeatsNoMod($id)
{
	$sql
		= "SELECT 
		sum(case when pecg_ex_beats = 'No' then 1 else 0 end) as TotalIV FROM patient_ecg 
		INNER JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_ecg.p_id
		WHERE pecg_ex_beats IN ('$id') AND pecg_date_report in (SELECT MAX(pecg_date_report) FROM patient_ecg
		GROUP BY p_id) AND pecg_status = 1 AND p_status = 1";
	return $sql;
}
function ecgLastByPatientExtraBeatsMod($id)
{
	$sql
		= "SELECT * FROM patient_ecg 
		INNER JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_ecg.p_id
		WHERE pecg_ex_beats_sub_category IN ('$id') AND pecg_date_report in (SELECT MAX(pecg_date_report) FROM patient_ecg
		GROUP BY p_id) AND pecg_status = 1 AND p_status = 1";
	return $sql;
}



function echoLviddRangeModByPatientList()
{
	$sql
		= "SELECT  * FROM patient_basic_info 
		JOIN patient_echo
		ON patient_basic_info.p_id = patient_echo.p_id
		Where  pecho_date_report in (SELECT MAX(pecho_date_report) FROM patient_echo
		GROUP BY p_id) AND pecho_status = 1 AND p_status = 1
		 AND (case 
	    when (pecho_lvid) between 30 and 40 then '30-40' 
	    when (pecho_lvid) between 41 and 50 then '41-50'
	    when (pecho_lvid) between 51 and 60 then '51-60'
	    when (pecho_lvid) between 61 and 10000000000 then '61-10000000000'
	    END)
		 ";
	return $sql;
}

function echoLviddOutOfRangeModByPatientList()
{
	$sql
		= "SELECT  * FROM patient_basic_info 
		JOIN patient_echo
		ON patient_basic_info.p_id = patient_echo.p_id
		Where  pecho_date_report in (SELECT MAX(pecho_date_report) FROM patient_echo
		GROUP BY p_id) AND pecho_status = 1 AND p_status = 1
		 AND (case 
	    when (pecho_lvid) between 1 and 29 then '1-29' 
	    END)
		 ";
	return $sql;
}
function echoLastLviddRangeMod($min, $max)
{
	$sql
		= "SELECT  
		count(case when (pecho_lvid) between $min and $max then '1-119' END) as Total1,
		count(case when (pecho_lvid) between $min and $max then '41-50' END) as Total2,
		count(case when (pecho_lvid) between $min and $max then '51-60' END) as Total3,
		count(case when (pecho_lvid) between $min and $max then '61-10000000000' END) as Total4 FROM patient_basic_info 
		JOIN patient_echo
		ON patient_basic_info.p_id = patient_echo.p_id
		Where  pecho_date_report in (SELECT MAX(pecho_date_report) FROM patient_echo
		GROUP BY p_id) AND pecho_status = 1 AND p_status = 1";
	return $sql;
}
function echoLastLviddRangeModByPatientList($min, $max)
{
	$sql
		= "SELECT * FROM patient_basic_info 
		JOIN patient_echo
		ON patient_basic_info.p_id = patient_echo.p_id
		Where  pecho_date_report in (SELECT MAX(pecho_date_report) FROM patient_echo
		GROUP BY p_id) AND pecho_status = 1 AND p_status = 1
		 AND (case 
	    when (pecho_lvid) between $min and $max then '30-40'
	    when (pecho_lvid) between $min and $max then '41-50'
	    when (pecho_lvid) between $min and $max then '51-60'
	    when (pecho_lvid) between $min and $max then '61-10000000000'
	    END)
		 ";
	return $sql;
}

function echoLvidsRangeModByPatientList()
{
	$sql
		= "SELECT * FROM patient_basic_info
		JOIN patient_echo
		ON patient_basic_info.p_id = patient_echo.p_id
		Where pecho_date_report in (SELECT MAX(pecho_date_report) FROM patient_echo
		GROUP BY p_id) AND pecho_status = 1 AND p_status = 1
		AND (case 
	    when (pecho_lvids) between 20 and 30 then '20-30'
	    when (pecho_lvids) between 31 and 40 then '31-40'
	    when (pecho_lvids) between 41 and 50 then '41-50'
	    END)";
	return $sql;
}
function echoLvidsOutOfRangeModByPatientList()
{
	$sql
		= "SELECT * FROM patient_basic_info
		JOIN patient_echo
		ON patient_basic_info.p_id = patient_echo.p_id
		Where pecho_date_report in (SELECT MAX(pecho_date_report) FROM patient_echo
		GROUP BY p_id) AND pecho_status = 1 AND p_status = 1
		AND (case 
	    when (pecho_lvids) between 0 and 19 then '0-19'
	    when (pecho_lvids) between 51 and 10000 then '51-10000'
	    END)";
	return $sql;
}
function echoLastLvidsRangeMod($min, $max)
{
	$sql
		= "SELECT 
		count(case when (pecho_lvids) between $min and $max then '20-30' END) as Total1,
		count(case when (pecho_lvids) between $min and $max then '31-40' END) as Total2,
		count(case when (pecho_lvids) between $min and $max then '41-50' END) as Total3 
		FROM patient_basic_info
		JOIN patient_echo
		ON patient_basic_info.p_id = patient_echo.p_id
		Where pecho_date_report in (SELECT MAX(pecho_date_report) FROM patient_echo
		GROUP BY p_id) AND pecho_status = 1 AND p_status = 1";
	return $sql;
}
function echoLastByPatientLvidsRangeMod($min, $max)
{
	$sql
		= "SELECT * FROM patient_basic_info
		JOIN patient_echo
		ON patient_basic_info.p_id = patient_echo.p_id
		Where pecho_date_report in (SELECT MAX(pecho_date_report) FROM patient_echo
		GROUP BY p_id) AND pecho_status = 1 AND p_status = 1
		AND (case 
	    when (pecho_lvids) between $min and $max then '20-30'
	    when (pecho_lvids) between $min and $max then '31-40'
	    when (pecho_lvids) between $min and $max then '41-50'
	    END)";
	return $sql;
}
// Vitamin D3
function vitaminD3Sql()
{
	$sql
		= "SELECT * FROM patient_vitamind3
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_vitamind3.p_id
	     Where pvd3_date_report in (SELECT MAX(pvd3_date_report) FROM patient_vitamind3
		GROUP BY p_id) AND pvd3_status = 1 AND p_status = 1
		AND (case 
	    when (pvd3_value) between 0.01 and 9.99 then '0.01-9.99'
	    when (pvd3_value) between 10.00 and 20.00 then '10.00-20.00'
	    when (pvd3_value) between 20.01 and 30.00 then '20.01-30.00'
	    when (pvd3_value) between 30.01 and 99.99 then '30.01-99.99'
	    when (pvd3_value) between 100.00 and 1000000000.00 then '100.00-1000000000.00'
	    END)";
	return $sql;
}
function lastVitaminD3Sql($min, $max)
{
	$sql
		= "SELECT 
		count(case when (pvd3_value) between $min and $max then '0.01-9.99' END) as Total1,
		count(case when (pvd3_value) between $min and $max then '10.00-20.00' END) as Total2,
		count(case when (pvd3_value) between $min and $max then '20.01-30.00' END) as Total3,
		count(case when (pvd3_value) between $min and $max then '30.01-99.99' END) as Total4,
		count(case when (pvd3_value) between $min and $max then '100.00-1000000000.00' END) as Total5 FROM patient_vitamind3
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_vitamind3.p_id
	     Where pvd3_date_report in (SELECT MAX(pvd3_date_report) FROM patient_vitamind3
		GROUP BY p_id) AND pvd3_status = 1 AND p_status = 1";
	return $sql;
}
function vitaminD3ByPatientSql($min, $max)
{
	$sql
		= "SELECT * FROM patient_vitamind3
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_vitamind3.p_id
	    Where pvd3_date_report in (SELECT MAX(pvd3_date_report) FROM patient_vitamind3
		GROUP BY p_id) AND pvd3_status = 1 AND p_status = 1
		AND (case 
	    when (pvd3_value) between $min and $max then '0.01-9.99'
	    when (pvd3_value) between $min and $max then '10.00-20.00'
	    when (pvd3_value) between $min and $max then '20.01-30.00'
	    when (pvd3_value) between $min and $max then '30.01-99.99'
	    when (pvd3_value) between $min and $max then '100.00-1000000000.00'
	    END)";
	return $sql;
}
// Uric Acid
function UricAcidSql()
{
	$sql
		= "SELECT *
		FROM `patient_uric_acid` JOIN patient_basic_info on patient_basic_info.p_id = patient_uric_acid.p_id 
		WHERE  pua_date_report IN (SELECT MAX(pua_date_report) FROM patient_uric_acid
		 GROUP BY p_id)  AND (CASE
		 WHEN pua_value <= 5.49 THEN '5.49' WHEN pua_value >= 5.49 THEN '5.49' END) AND `pua_status` = 1 AND p_status = 1 AND pua_status = 1";
	return $sql;
}
function lastUricAcidSql()
{
	$sql
		= "SELECT count(pua_value) as Total1
		 FROM `patient_uric_acid` JOIN patient_basic_info on patient_basic_info.p_id = patient_uric_acid.p_id 
		 WHERE  pua_date_report IN (SELECT MAX(pua_date_report) FROM patient_uric_acid
		  GROUP BY p_id)  AND `pua_value` < 5.49 AND `pua_status` = 1 AND p_status = 1 AND pua_status = 1";
	return $sql;
}
function lastUricAcidSql2()
{
	$sql
		= "SELECT count(pua_value) as Total2
		 FROM `patient_uric_acid` JOIN patient_basic_info on patient_basic_info.p_id = patient_uric_acid.p_id 
		 WHERE  pua_date_report IN (SELECT MAX(pua_date_report) FROM patient_uric_acid
		  GROUP BY p_id)  AND `pua_value` > 5.49 AND `pua_status` = 1  AND p_status = 1 AND pua_status = 1";
	return $sql;
}
function lastUricAcidSqlByPatient()
{
	$sql
		= "SELECT * FROM `patient_uric_acid` JOIN patient_basic_info on patient_basic_info.p_id = patient_uric_acid.p_id 
		 WHERE  pua_date_report IN (SELECT MAX(pua_date_report) FROM patient_uric_acid
		  GROUP BY p_id)  AND `pua_value` < 5.49 AND `pua_status` = 1 AND p_status = 1 AND pua_status = 1";
	return $sql;
}
function lastUricAcidSqlByPatient2()
{
	$sql
		= "SELECT *  FROM `patient_uric_acid` JOIN patient_basic_info on patient_basic_info.p_id = patient_uric_acid.p_id 
		 WHERE  pua_date_report IN (SELECT MAX(pua_date_report) FROM patient_uric_acid
		  GROUP BY p_id)  AND `pua_value` > 5.49 AND `pua_status` = 1  AND p_status = 1 AND pua_status = 1";
	return $sql;
}
// TSH
function tshSql()
{
	$sql
		= "SELECT * FROM patient_tsh
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_tsh.p_id
	     Where ptsh_date_report in (SELECT MAX(ptsh_date_report) FROM patient_tsh
		GROUP BY p_id) AND ptsh_status = 1 AND p_status = 1
		AND (case 
	    when (ptsh_value) between 0.50 and 5.00 then '0.50-5.00'
	    when (ptsh_value) between 5.01 and 10000000000.00 then '5.01-10000000000.00'
	    END)";
	return $sql;
}
function tshOutOfRangeSql()
{
	$sql
		= "SELECT * FROM patient_tsh
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_tsh.p_id
	     Where ptsh_date_report in (SELECT MAX(ptsh_date_report) FROM patient_tsh
		GROUP BY p_id) AND ptsh_status = 1 AND p_status = 1
		AND (case 
	    when (ptsh_value) between 0.01 and 0.49 then '0.01-0.49'
	    END)";
	return $sql;
}
function lastTshSql($min, $max)
{
	$sql
		= "SELECT 
		count(case when (ptsh_value)  between $min and $max then '0.50-5.00' END) as Total1,
		count(case when (ptsh_value) between $min and $max then '5.01-10000000000.00' END) as Total2 FROM patient_tsh
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_tsh.p_id
	     Where ptsh_date_report in (SELECT MAX(ptsh_date_report) FROM patient_tsh
		GROUP BY p_id) AND ptsh_status = 1 AND p_status = 1";
	return $sql;
}
function lastTshByPatientSql($min, $max)
{
	$sql
		= "SELECT * FROM patient_tsh
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_tsh.p_id
	     Where ptsh_date_report in (SELECT MAX(ptsh_date_report) FROM patient_tsh
		GROUP BY p_id) AND ptsh_status = 1 AND p_status = 1
		AND (case 
	    when (ptsh_value) between $min and $max then '0.50-5.00'
	    when (ptsh_value) between $min and $max then '5.01-10000000000.00'
	    END)";
	return $sql;
}
// T3
function t3Sql()
{
	$sql
		= "SELECT * FROM patient_t3
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_t3.p_id
	     Where pt3_date_report in (SELECT MAX(pt3_date_report) FROM patient_t3
		GROUP BY p_id) AND pt3_status = 1 AND p_status = 1
		AND (case 
	    when (pt3_value) between 3.00 and 6.80 then '3.00-6.80'
	    END)";
	return $sql;
}
function t3OutofRangeSql()
{
	$sql
		= "SELECT * FROM patient_t3
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_t3.p_id
	     Where pt3_date_report in (SELECT MAX(pt3_date_report) FROM patient_t3
		GROUP BY p_id) AND pt3_status = 1 AND p_status = 1
		AND (case 
	    when (pt3_value) between 0.01 and 2.99 then '0.01-2.99'
	    when (pt3_value) between 6.81 and 10000.000 then '6.81-10000.000'
	    END)";
	return $sql;
}
function lastT3Sql($min, $max)
{
	$sql
		= "SELECT 
		count(case when (pt3_value) between $min and $max then '3.00-6.80' END) as Total1 
		FROM patient_t3
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_t3.p_id
	     Where pt3_date_report in (SELECT MAX(pt3_date_report) FROM patient_t3
		GROUP BY p_id) AND pt3_status = 1 AND p_status = 1";
	return $sql;
}
// T4
function t4Sql()
{
	$sql
		= "SELECT * FROM patient_t4
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_t4.p_id
	     Where pt4_date_report in (SELECT MAX(pt4_date_report) FROM patient_t4
		GROUP BY p_id) AND pt4_status = 1 AND p_status = 1
		AND (case 
	    when (pt4_value) between 12.00 and 22.00 then '12.00-22.00'
	    END)";
	return $sql;
}
function t4OutOfRangeSql()
{
	$sql
		= "SELECT * FROM patient_t4
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_t4.p_id
	     Where pt4_date_report in (SELECT MAX(pt4_date_report) FROM patient_t4
		GROUP BY p_id) AND pt4_status = 1 AND p_status = 1
		AND (case 
	    when (pt4_value) between 0.01 and 11.99 then '0.01-11.99'
	    when (pt4_value) between 22.01 and 1000.00 then '22.01-1000.00'
	    END)";
	return $sql;
}
function lastT4Sql()
{
	$sql
		= "SELECT 
		count(case when (pt4_value) between 12.00 and 22.00 then '12.00-22.00' END) as Total1 FROM patient_t4
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_t4.p_id
	     Where pt4_date_report in (SELECT MAX(pt4_date_report) FROM patient_t4
		GROUP BY p_id) AND pt4_status = 1 AND p_status = 1
		AND (case 
	    when (pt4_value) between 12.00 and 22.00 then '12.00-22.00'
	    END)";
	return $sql;
}
// T4

function incomeSql()
{
	$sql
		= "SELECT * FROM patient_basic_info
		WHERE p_income IN ('Under 20,000','20,000-40,000','40,000-60,000','Up to 60,000') AND p_status = 1
		";
	return $sql;
}
function emptyIncomeSql()
{
	$sql
		= "SELECT * FROM patient_basic_info
		WHERE p_income IN ('') AND p_status = 1";
	return $sql;
}

// Risk Factor Data Get
function patientsRiskFactorGet()
{
	$sql
		= "SELECT * FROM patient_risk_factor
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_risk_factor.p_id
		WHERE rf_id IN (15,17,18,28,29,30,31,32,20) AND prf_status = 1 AND p_status = 1
		GROUP BY p_mr_no";
	return $sql;
}
function ckdCategorySql()
{
	$sql
		= "SELECT * FROM patient_basic_info
		WHERE p_category_of_heart_fail IN ('HFrEF','HFmEF','HFpEF','HF improvement') AND p_status = 1";
	return $sql;
}
function ckdCategorySqlPatientsList()
{
	$sql
		= "SELECT * FROM patient_basic_info
		WHERE p_category_of_heart_fail IN ('') AND p_status = 1";
	return $sql;
}
function comorbiditiesSql()
{
	$sql
		= "SELECT * FROM patient_comorbidities
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_comorbidities.p_id
		WHERE pc_id in (SELECT MAX(pc_id) FROM patient_comorbidities
		 GROUP BY p_id) AND c_id IN (11,13,14,15,16,17,18,19,20,21,22,23,24,27) AND pc_status = 1 AND p_status =1 ";
	return $sql;
}


//Device Profile YTD Data Get
function deviceProfileYtdFactorGet($year, $month)
{
	$sql
		= "SELECT d_id,d_id as nyas,MONTHNAME(pd_created_at)as month_name,Year(pd_created_at) as year_name,count(pd_id) as r
        FROM patient_device
        WHERE d_id IN (1,2,3,5) AND YEAR(pd_created_at) = '$year' AND MONTH(pd_created_at) = '$month'
        GROUP BY YEAR(pd_created_at), MONTH(pd_created_at),d_id";
	return $sql;
}
//Remanded Device Eligibility Data Get

function deviceEligibilityByPatient($year)
{
	$sql
		= "SELECT  DISTINCT MonthName(par.par_prescription_datetime_report) AS month_name, rd_device_id,par_prescription_datetime_report, 
		YEAR(par.par_prescription_datetime_report) AS YearName,
		sum(case when rd.rd_device_id = 1 then 1 else 0 end) as AICD,
		sum(case when rd.rd_device_id = 2 then 1 else 0 end) as CRTD,
		sum(case when rd.rd_device_id = 3 then 1 else 0 end) as PPM,
		sum(case when rd.rd_device_id = 5 then 1 else 0 end) as TPM,
		sum(case when rd.rd_device_id = 6 then 1 else 0 end) as PPM1,
		sum(case when rd.rd_device_id = 7 then 1 else 0 end) as PPM2
		FROM recommended_device rd, patient_appointment_register par 
		WHERE YEAR(par.par_prescription_datetime_report) = '$year'
		AND par.par_id in (SELECT MAX(par_id) FROM patient_appointment_register
		GROUP BY par_p_id, rd_device_id, YEAR(par_prescription_datetime_report)) AND par.par_doctor_seen_status = 1
		AND rd.rd_status = 1 AND par.par_id = rd.rd_par_id
		GROUP BY  MonthName(par_prescription_datetime_report), rd.rd_device_id";
	return $sql;
}
function deviceEligibilityByLastPatientList($year)
{
	$sql
		= "SELECT  *
		FROM recommended_device rd, patient_appointment_register par, patient_basic_info pbi 
		WHERE rd.rd_device_id IN (1,2,3,5,6,7) AND YEAR(par.par_prescription_datetime_report) = '$year'
		AND par.par_id in (SELECT MAX(par_id) FROM patient_appointment_register
		GROUP BY par_p_id, rd_device_id, YEAR(par_prescription_datetime_report)) AND par.par_doctor_seen_status = 1
		AND rd.rd_status = 1 AND par.par_id = rd.rd_par_id AND par.par_p_id = pbi.p_id
		GROUP BY par.par_id";
	return $sql;
}
function deviceEligibilityByPatientList($year)
{
	$sql
		= "SELECT  * FROM patient_basic_info pbi, patient_device pd, patient_appointment_register par 
		WHERE pd.d_id IN (1,2,3,5,6,7) AND YEAR(par.par_prescription_datetime_report) = '$year'
		AND par.par_id in (SELECT MAX(par_id) FROM patient_appointment_register
	GROUP BY par_p_id, d_id, YEAR(par_prescription_datetime_report)) AND par.par_doctor_seen_status = 1
		AND pd.pd_status = 1  AND par.par_id = pd.par_id
		GROUP BY  par.par_p_id";
	return $sql;
}
function deviceEligibilityFactorGet($year)
{
	$sql
		= "SELECT rd_device_id,rd_device_id as recommended, MONTHNAME(par_prescription_date)as month_name,Year(par_prescription_date) as year_name,count(rd_device_id) as Total
		 FROM recommended_device
		INNER JOIN patient_appointment_register
		ON patient_appointment_register.par_id = recommended_device.rd_par_id
		WHERE rd_device_id IN (1,2,3,5,6,7) AND YEAR(par_prescription_date) = '$year' AND rd_status = 1 AND par_doctor_seen_status = 1
		GROUP BY YEAR(par_prescription_date), MONTH(par_prescription_date),rd_device_id";
	return $sql;
}

//Set Device implant  Data Get
function deviceImplantedFactorGet($year)
{
	$sql
		= "SELECT d_id,d_id as ImplaintDevice, MONTHNAME(par_prescription_date)as month_name,Year(par_prescription_date) as year_name,count(pd_id) as Total
		FROM patient_device
		INNER JOIN patient_appointment_register
		ON patient_appointment_register.par_id = patient_device.par_id
		WHERE d_id IN (1,2,3,5,6,7) AND YEAR(par_prescription_date) = '$year' AND pd_status = 1 AND par_doctor_seen_status = 1 AND pd_active_status = 1
		GROUP BY YEAR(par_prescription_date), MONTH(par_prescription_date),d_id";
	return $sql;
}
function deviceImplantedByPatient($year)
{
	$sql
		= "SELECT  DISTINCT MonthName(par.par_prescription_datetime_report) AS month_name, d_id,par_prescription_datetime_report, 
		YEAR(par.par_prescription_datetime_report) AS YearName,
		sum(case when pd.d_id = 1 then 1 else 0 end) as AICD,
		sum(case when pd.d_id = 2 then 1 else 0 end) as CRTD,
		sum(case when pd.d_id = 3 then 1 else 0 end) as PPM,
		sum(case when pd.d_id = 5 then 1 else 0 end) as TPM,
		sum(case when pd.d_id = 6 then 1 else 0 end) as PPM1,
		sum(case when pd.d_id = 7 then 1 else 0 end) as PPM2
		FROM patient_device pd, patient_appointment_register par 
		WHERE YEAR(par.par_prescription_datetime_report) = '$year'
		AND par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
		GROUP BY MonthName(par_prescription_datetime_report), par_p_id, d_id) AND par.par_doctor_seen_status = 1
		AND pd.pd_status = 1  AND par.par_id = pd.par_id
		GROUP BY  MonthName(par_prescription_datetime_report), pd.d_id";
	return $sql;
}
//Mortality Non Cardio Vascular Data Get
function mortalityNonCardiovascularGet($year)
{
	$sql
		= "SELECT pncv_status,pncv_id as vascular, MONTHNAME(pncv_created_at)as month_name,Year(pncv_created_at) as year_name,count(pncv_id) as Total
		FROM patient_non_cardiovascular
		WHERE pncv_status IN (1) AND YEAR(pncv_created_at) = '$year'
		GROUP BY YEAR(pncv_created_at), MONTH(pncv_created_at),pncv_status";
	return $sql;
}
//Mortality Cardiovascular Data Get
function mortalityCardiovascularGet($year)
{
	$sql
		= "SELECT pcv_status,pcv_id as medicine, MONTHNAME(pcv_created_at)as month_name,Year(pcv_created_at) as year_name,count(pcv_id) as Total
		FROM patient_cardiovascular
		WHERE pcv_status IN (1) AND YEAR(pcv_created_at) = '$year'
		GROUP BY YEAR(pcv_created_at), MONTH(pcv_created_at),pcv_status";
	return $sql;
}
function deathReportSql($year)
{
	$sql
		= "SELECT pdr_reason,pdr_reason as death,MONTHNAME(pdr_date)as month_name,Year(pdr_date) as year_name,count(pdr_id) as Total
		FROM patient_death_report
		JOIN patient_basic_info
		ON patient_basic_info.p_id = patient_death_report.pdr_p_id
		WHERE pdr_reason IN ('Non-Cardiovascular','Cardiovascular') AND YEAR(pdr_date) = '$year' AND pdr_status = 1 AND p_is_date = 1 AND p_status =1
		GROUP BY YEAR(pdr_date), MONTH(pdr_date),pdr_reason;";
	return $sql;
}

function betaBlockerByPatientReport($year, $catId)
{

	$sql = "SELECT  DISTINCT MonthName(par.par_prescription_datetime_report) AS month_name,mc_id,par_prescription_datetime_report,
	YEAR(par.par_prescription_datetime_report) AS YearName,COUNT(DISTINCT pm.par_id) as Total,
	sum(case when mc.mc_id = $catId then 1 else 0 end) 
	FROM prescription_medicine pm, patient_appointment_register par, m_category mc , medicine m
	WHERE YEAR(par.par_prescription_datetime_report) = '$year'
	AND par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
	GROUP BY MonthName(par_prescription_datetime_report), par_p_id, mc_id) AND par.par_doctor_seen_status = 1
	AND m.m_id = pm.me_id AND mc.mc_id = m.m_category_id AND par.par_id = pm.par_id
	GROUP BY  MonthName(par_prescription_datetime_report), mc.mc_id";
	return $sql;
}


function medicinesGroupSQLMod()
{
	$sql = "SELECT mc.mc_title as title, mc.mc_id as ids, COUNT(DISTINCT pm.par_id) as Total
	FROM prescription_medicine pm, patient_appointment_register par, m_category mc , medicine m
	WHERE par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
	GROUP BY par_p_id,mc.mc_id) AND mc_is_report_status = 1 AND par.par_doctor_seen_status = 1 AND prm_status = 1 AND m_status = 1 AND mc_status = 1
	AND m.m_id = pm.me_id AND mc.mc_id = m.m_category_id AND par.par_id = pm.par_id
	GROUP BY mc.mc_id";
	return $sql;
}
// function medicinesGroupListSQLMod($ids)
// {
// 	$dbDriver = get_instance();
// 	$query = $dbDriver->db->query("SELECT mc.mc_title as title, mc.mc_id as $ids, COUNT(DISTINCT pm.par_id) as Total
// 	FROM prescription_medicine pm, patient_appointment_register par, m_category mc , medicine m
// 	WHERE  par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
// 	GROUP BY par_p_id,mc.mc_id) AND par.par_doctor_seen_status = 1 AND prm_status = 1 AND m_status = 1 AND mc_status = 1
// 	AND m.m_id = pm.me_id AND mc.mc_id = m.m_category_id AND par.par_id = pm.par_id
// 	GROUP BY mc.mc_id");
// 	if ($dbDriver->db->affected_rows() > 0) {
// 		return $query->row();
// 	} else {
// 		return FALSE;
// 	}
// }
function medicinesGroupSQLModForMedicineView($id)
{
	$dbDriver = get_instance();
	$query = $dbDriver->db->query("SELECT count(me_id) as Total, m.m_title as title
	FROM prescription_medicine, medicine m
	WHERE m_status = 1 AND  prm_status = 1 and me_id = '$id' and m.m_id = me_id");
	if ($dbDriver->db->affected_rows() > 0) {
		return $query->row();
	} else {
		return FALSE;
	}
}
function medicinesGroupSQLModForTreadNameView($id)
{
	$dbDriver = get_instance();
	$query = $dbDriver->db->query("SELECT count(prm_medicine_trade_id) as Total, m.m_title as title
	FROM prescription_medicine, medicine m
	WHERE m_status = 2 AND  prm_status = 1  and m.m_trade_status = me_id AND  prm_medicine_trade_id = '$id'");
	if ($dbDriver->db->affected_rows() > 0) {
		return $query->row();
	} else {
		return FALSE;
	}
}






function medicinesGroupSQLModByView($catId)
{

	$sql = "SELECT * FROM prescription_medicine pm, patient_appointment_register par, m_category mc , medicine m
	WHERE mc.mc_id In ('$catId') AND par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
	GROUP BY par_p_id,mc.mc_id) AND par.par_doctor_seen_status = 1 AND prm_status = 1 AND m_status = 1 AND mc_status = 1
	AND m.m_id = pm.me_id AND mc.mc_id = m.m_category_id AND par.par_id = pm.par_id group by par.par_id";
	return $sql;
}

function medicinesGroupSQL($catId)
{

	$sql = "SELECT COUNT(DISTINCT pm.par_id) as Total
	FROM prescription_medicine pm, patient_appointment_register par, m_category mc , medicine m
	WHERE mc.mc_id in ('$catId') AND par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
	GROUP BY par_p_id,mc.mc_id) AND par.par_doctor_seen_status = 1 AND prm_status = 1 AND m_status = 1 AND mc_status = 1
	AND m.m_id = pm.me_id AND mc.mc_id = m.m_category_id AND par.par_id = pm.par_id
	GROUP BY mc.mc_id";
	return $sql;
}
function medicinesGroupByPrescriptionListSQL($catId)
{

	$sql = "SELECT * FROM prescription_medicine pm, patient_appointment_register par, m_category mc , medicine m
	WHERE mc.mc_id in ('$catId') AND par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
	GROUP BY par_p_id) AND par.par_doctor_seen_status = 1 AND prm_status = 1 AND m_status = 1 AND mc_status = 1
	AND m.m_id = pm.me_id AND mc.mc_id = m.m_category_id AND par.par_id = pm.par_id group by par.par_id";
	return $sql;
}

function medicinesGroupBYPatientSQL($catId)
{

	$sql = "SELECT  count(pm.me_id) as Total
	FROM prescription_medicine pm, patient_appointment_register par, medicine m
	WHERE pm.me_id In (1,2,3,514) AND par.par_id in (SELECT MAX(par_id) FROM patient_appointment_register
	GROUP BY par_p_id, mc_id) AND par.par_doctor_seen_status = 1
	AND m.m_id = pm.me_id AND par.par_id = pm.par_id
	GROUP BY mc.mc_id";
	return $sql;
}
// function bbIndividualSQL($ids)
// {
// 	$sql = "SELECT count(DISTINCT me_id), count(prm_id) as Total  FROM patient_appointment_register
// 	JOIN prescription_medicine
// 	ON patient_appointment_register.par_id = prescription_medicine.par_id
// 	Where par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
// 	GROUP BY par_p_id) AND par_doctor_seen_status = 1 AND  prm_status = 1 AND par_status = 1
// 	AND (case 
// 	when (me_id) = 1 then '1' 
// 	when (me_id) = 2 then '1' 
// 	when (me_id) = 3 then '1'
// 	when (me_id) = 4 then '1'
// 	when (me_id) = 5 then '1'
// 	when (me_id) = 519 then '1'
// 	when (me_id) = 5221 then '1'
// 	when (me_id) = 514 then '1'
// 	when (me_id) = 532 then '1'
// 	when (me_id) = 6 then '1'
// 	when (me_id) = 7 then '1'
// 	when (me_id) = 283 then '1'
// 	when (me_id) = 284 then '1'
// 	when (me_id) = 285 then '1'
// 	END) GROUP by patient_appointment_register.par_p_id";
// 	return $sql;
// }
function bbIndividualSQL($ids)
{
	$sql = "SELECT *, COUNT(pm.me_id) as Total
	FROM prescription_medicine pm, patient_appointment_register par
	WHERE me_id in $ids AND par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register GROUP BY par_p_id) AND par.par_doctor_seen_status = 1 AND pm.par_id = par.par_id AND prm_status=1 ";
	return $sql;
}

function dynamicIndividualSQL($Cid, $Mid)
{
	$sql = "SELECT *, COUNT(pm.me_id) as Total
	FROM prescription_medicine pm, patient_appointment_register par, medicine m
	WHERE m_category_id = '$Cid' AND me_id in ('$Mid') AND par.par_prescription_datetime_report in 
	(SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register GROUP BY par_p_id) 
	AND par.par_doctor_seen_status = 1 AND m.m_id = pm.me_id and pm.par_id = par.par_id AND prm_status=1 GROUP BY me_id";
	return $sql;
}
// function bbIndividualSQL($ids)
// {
// 	$sql = "SELECT *, COUNT(pm.par_id) as Total
// 	FROM prescription_medicine pm, patient_appointment_register par, m_category mc , medicine m
// 	WHERE me_id in $ids AND par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
// 	GROUP BY par_p_id) AND par.par_doctor_seen_status = 1 AND prm_status = 1 AND m_status = 1 AND mc_status = 1
// 	AND m.m_id = pm.me_id AND par.par_id = pm.par_id
// 	GROUP BY mc.mc_id";
// 	return $sql;
// }

function bbIndividualBybbPatientsSQL($id)
{
	$sql = "SELECT * FROM prescription_medicine pm, patient_appointment_register par
	WHERE me_id in $id AND par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register GROUP BY par_p_id) AND par.par_doctor_seen_status = 1 AND pm.par_id = par.par_id AND prm_status=1";
	return $sql;
}

// function bbIndividualBybbPatientsSQL($id)
// {
// 	$sql = "SELECT * FROM prescription_medicine pm, patient_appointment_register par, m_category mc , medicine m
// 	WHERE me_id in $id AND par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
// 	GROUP BY par_p_id) AND par.par_doctor_seen_status = 1 AND prm_status = 1 AND m_status = 1 AND mc_status = 1
// 	AND m.m_id = pm.me_id AND par.par_id = pm.par_id
// 	GROUP BY pm.prm_id";
// 	return $sql;
// }


function betaBlockerReport($year, $catId)
{

	$sql = "SELECT MONTHNAME(patient_appointment_register.par_prescription_date)as month_name,Year(patient_appointment_register.par_prescription_date) as year_name,COUNT(DISTINCT prescription_medicine.par_id) as Total
	FROM prescription_medicine 
	JOIN medicine on medicine.m_id= prescription_medicine.me_id
	JOIN m_category on m_category.mc_id = medicine.m_category_id
	JOIN patient_appointment_register on patient_appointment_register.par_id = prescription_medicine.par_id
	WHERE m_category.mc_id=$catId AND YEAR(patient_appointment_register.par_prescription_date)='$year' AND par_doctor_seen_status = 1
	GROUP By MONTH(patient_appointment_register.par_prescription_date)";
	return $sql;
}
// Patient Base Report Sql

function patientsWiseEnrolleGet($year)
{
	$sql
		= "SELECT  DISTINCT MonthName(par.par_prescription_datetime_report) AS month_name, par_vt_type,par_prescription_datetime_report, 
		YEAR(par.par_prescription_datetime_report) AS YearName,
		sum(case when par.par_vt_type = 25 then 1 else 0 end) as inPatient,
		sum(case when par.par_vt_type = 26 then 1 else 0 end) as outPatient,
		sum(case when par.par_vt_type = 29 then 1 else 0 end) as virtualPatient
		FROM patient_appointment_register par 
		WHERE YEAR(par.par_prescription_datetime_report) = '$year'
		AND par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
		GROUP BY MonthName(par_prescription_datetime_report), par_p_id) AND par.par_doctor_seen_status = 1
		GROUP BY  MonthName(par_prescription_datetime_report), par.par_vt_type";
	return $sql;
}
function nyha_patient_wise_report($year)
{
	$sql
		= "SELECT  DISTINCT MonthName(par.par_prescription_datetime_report) AS month_name, p_ss_id,par_prescription_datetime_report, 
		YEAR(par.par_prescription_datetime_report) AS YearName,
		sum(case when pss.p_ss_id = 20 then 1 else 0 end) as Total,
		sum(case when pss.p_ss_id = 21 then 1 else 0 end) as TotalII,
		sum(case when pss.p_ss_id = 22 then 1 else 0 end) as TotalIII,
		sum(case when pss.p_ss_id = 23 then 1 else 0 end) as TotalIV
		FROM patient_sign_symptom pss, patient_appointment_register par 
		WHERE YEAR(par.par_prescription_datetime_report) = '$year'
		AND par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
		GROUP BY MonthName(par_prescription_datetime_report), par_p_id, p_ss_id) AND par.par_doctor_seen_status = 1
		AND pss.pss_status = 1 AND par.par_id = pss.par_id
		GROUP BY  MonthName(par_prescription_datetime_report),pss.p_ss_id
		";
	return $sql;
}

function nyha_patient_wise_reportt($year)
{
	$sql
		= "SELECT  DISTINCT MonthName(par_prescription_datetime_report) AS month_name, p_ss_id,par_prescription_datetime_report, 
		YEAR(par_prescription_datetime_report) AS YearName
		FROM patient_appointment_register 
		join patient_sign_symptom on patient_sign_symptom.par_id = patient_appointment_register.par_id
		WHERE p_ss_id = 20 AND YEAR(par_prescription_datetime_report) = '$year'
		AND par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
		GROUP BY MonthName(par_prescription_datetime_report), par_p_id, p_ss_id) AND par_doctor_seen_status = 1
		AND pss_status = 1  
		GROUP BY  MonthName(par_prescription_datetime_report),p_ss_id";
	return $sql;
}


function patientLastPrescriptionWiseNyha($id)
{
	$sql = "SELECT  p_ss_id,par_prescription_datetime_report,
	sum(case when pss.p_ss_id = 20 then 1 else Null end) as Total,
	sum(case when pss.p_ss_id = 21 then 1 else Null end) as TotalII,
	sum(case when pss.p_ss_id = 22 then 1 else Null end) as TotalIII,
	sum(case when pss.p_ss_id = 23 then 1 else Null end) as TotalIV
	FROM patient_sign_symptom pss, patient_appointment_register par 
	WHERE pss.p_ss_id IN ('$id') AND par.par_id in (SELECT MAX(par_id) FROM patient_appointment_register
	GROUP BY par_p_id) AND par_doctor_seen_status = 1
	AND pss.pss_status = 1 AND par.par_id = pss.par_id";
	return $sql;
}
// function patientLastPrescriptionWiseNyha($id)
// {
// 	$sql = "SELECT  p_ss_id,par_prescription_datetime_report,
// 	sum(case when pss.p_ss_id = 20 then 1 else Null end) as Total,
// 	sum(case when pss.p_ss_id = 21 then 1 else Null end) as TotalII,
// 	sum(case when pss.p_ss_id = 22 then 1 else Null end) as TotalIII,
// 	sum(case when pss.p_ss_id = 23 then 1 else Null end) as TotalIV
// 	FROM patient_sign_symptom pss, patient_appointment_register par 
// 	WHERE pss.p_ss_id IN ('$id') AND par.par_id in (SELECT MAX(par_id) FROM patient_appointment_register
// 	GROUP BY par_p_id, p_ss_id) AND par_doctor_seen_status = 1
// 	AND pss.pss_status = 1 AND par.par_id = pss.par_id
// 	GROUP BY pss.p_ss_id";
// 	return $sql;
// }
function deviceTotal($id)
{
	$sql = "SELECT  d_id,p_id,
	sum(case when pd.d_id = 1 then 1 else Null end) as Total,
	sum(case when pd.d_id = 2 then 1 else Null end) as TotalII,
	sum(case when pd.d_id = 5 then 1 else Null end) as TotalIII,
	sum(case when pd.d_id = 6 then 1 else Null end) as TotalIV,
	sum(case when pd.d_id = 7 then 1 else Null end) as TotalV
	FROM patient_device pd, patient_appointment_register par 
	WHERE pd.d_id IN ('$id') AND par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
	GROUP BY par_p_id) 
	AND pd.pd_status = 1 AND par.par_id = pd.par_id  AND par_doctor_seen_status= 1";
	return $sql;
}
function deviceTotalCount()
{
	$sql = "SELECT *,  COUNT(p_id) as TotalDevice
	FROM patient_device pd, patient_appointment_register par 
	WHERE pd.d_id IN (1,2,5,6,7)AND par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
	GROUP BY par_p_id) 
	AND pd.pd_status = 1 AND par.par_id = pd.par_id  AND par_doctor_seen_status= 1";
	return $sql;
}
function deviceTotalCountByPatients()
{
	$sql = "SELECT  *
	FROM patient_device pd, patient_appointment_register par 
	WHERE par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
	GROUP BY par_p_id) 
	AND pd.d_id IN (1,2,5,6,7) AND pd.pd_status = 1 AND par.par_id = pd.par_id AND par_doctor_seen_status = 1 GROUP by pd.p_id";
	return $sql;
}


function currentMonthDeviceTotal($id, $month, $year)
{
	$sql = "SELECT  d_id,p_id,
	sum(case when pd.d_id = 1 then 1 else Null end) as Total,
	sum(case when pd.d_id = 2 then 1 else Null end) as TotalII,
	sum(case when pd.d_id = 5 then 1 else Null end) as TotalIII,
	sum(case when pd.d_id = 6 then 1 else Null end) as TotalIV,
	sum(case when pd.d_id = 7 then 1 else Null end) as TotalV
	FROM patient_device pd, patient_appointment_register par 
	WHERE pd.d_id IN ('$id') AND par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
	GROUP BY par_p_id) 
	AND pd.pd_status = 1 AND month(par_prescription_datetime_report) = '$month' AND year(par_prescription_datetime_report) = '$year' AND par.par_id = pd.par_id  AND par_doctor_seen_status= 1";
	return $sql;
}
function currentMonthDeviceTotalCount($month, $year)
{
	$sql = "SELECT *,  COUNT(p_id) as TotalDevice
	FROM patient_device pd, patient_appointment_register par 
	WHERE pd.d_id IN (1,2,5,6,7)AND par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
	GROUP BY par_p_id) 
	AND month(par_prescription_datetime_report) = '$month' AND year(par_prescription_datetime_report) = '$year' AND pd.pd_status = 1 AND par.par_id = pd.par_id  AND par_doctor_seen_status= 1";
	return $sql;
}
function currentMonthDeviceByPatient($month, $year)
{
	$sql = "SELECT  *
	FROM patient_device pd, patient_appointment_register par 
	WHERE par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
	GROUP BY par_p_id) 
	AND pd.d_id IN (1,2,5,6,7) AND pd.pd_status = 1 AND par.par_id = pd.par_id AND par_doctor_seen_status = 1 AND month(par_prescription_datetime_report) = '$month' AND year(par_prescription_datetime_report) = '$year' AND par.par_id = pd.par_id  AND par_doctor_seen_status= 1 GROUP by pd.p_id";
	return $sql;
}
// function ecgLastDataMod($id)
// {
// 	$sql = "SELECT  pecg_rhythmc_sinus, pecg_date,
// 	sum(case when pecg_rhythmc_sinus = 'SINUS' then 1 else Null end) as Total,
// 		sum(case when pecg_rhythmc_sinus = 'AF' then 1 else Null end) as Totall
// 		FROM patient_ecg pc, patient_basic_info pbi
// 		WHERE pecg_rhythmc_sinus in ('$id') and pecg_id in (SELECT MAX(pecg_id) FROM patient_ecg WHERE `pecg_date` In (SELECT MAX(pecg_date) FROM patient_ecg GROUP BY p_id)
// 		GROUP BY p_id) AND pc.p_id = pbi.p_id AND pecg_status = 1  GROUP BY pc.pecg_rhythmc_sinus";
// 	return $sql;
// }
function ecgLastDataMod($id)
{
	$sql = "SELECT  pecg_rhythmc_sinus, pecg_date,
	sum(case when pecg_rhythmc_sinus = 'SINUS' then 1 else Null end) as Total,
		sum(case when pecg_rhythmc_sinus = 'AF' then 1 else Null end) as Totall
		FROM patient_ecg pc, patient_basic_info pbi
		WHERE pc.pecg_rhythmc_sinus IN ('$id') AND pecg_date_report in (SELECT MAX(pecg_date_report) FROM patient_ecg
		GROUP BY p_id) AND pc.p_id = pbi.p_id AND pecg_status = 1  GROUP BY pc.pecg_rhythmc_sinus";
	return $sql;
}

function ecgLastDataByPatientsMod($id)
{
	$sql = "SELECT  * FROM patient_ecg pc, patient_basic_info pbi
		WHERE pc.pecg_rhythmc_sinus IN ('$id') AND pecg_date_report in (SELECT MAX(pecg_date_report) FROM patient_ecg
		GROUP BY p_id) AND pc.p_id = pbi.p_id AND pecg_status = 1";
	return $sql;
}
function ecgRhythmMod()
{
	$sql
		= "SELECT * FROM patient_ecg 
		JOIN patient_basic_info
		ON patient_ecg.p_id = patient_basic_info.p_id
		WHERE  pecg_status = 1 AND pecg_rhythmc_sinus IN ('SINUS','AF') AND pecg_date_report in (SELECT MAX(pecg_date_report) FROM patient_ecg
		GROUP BY p_id)";
	return $sql;
}
function patientLastPrescriptionWiseNyha2($year)
{
	$sql = "SELECT  p_ss_id,par_prescription_datetime_report,MonthName(par_prescription_datetime_report) AS month_name, p_ss_id,par_prescription_datetime_report, 
	YEAR(par_prescription_datetime_report) AS YearName,
	sum(case when pss.p_ss_id = 20 then 1 else Null end) as Total,
	sum(case when pss.p_ss_id = 21 then 1 else Null end) as TotalII,
	sum(case when pss.p_ss_id = 22 then 1 else Null end) as TotalIII,
	sum(case when pss.p_ss_id = 23 then 1 else Null end) as TotalIV
	FROM patient_sign_symptom pss, patient_appointment_register par 
	WHERE pss.p_ss_id IN (20,21,22,23) AND par.par_id in (SELECT MAX(par_id) FROM patient_appointment_register
	GROUP BY par_p_id, p_ss_id) AND par.par_doctor_seen_status = 1
	AND pss.pss_status = 1 AND par.par_id = pss.par_id  AND year(par.par_prescription_datetime_report) = '$year'
	GROUP BY YEAR(par_prescription_datetime_report), MONTH(par_prescription_datetime_report), pss.p_ss_id";
	return $sql;
}


// function patientLastPrescriptionNyhaCurrentMonth($id, $month, $year)
// {
// 	$sql = "SELECT   MonthName(par.par_prescription_datetime_report) AS month_name, p_ss_id,par_prescription_datetime_report, 
// 	sum(case when pss.p_ss_id = 20 then 1 else Null end) as Total,
// 	sum(case when pss.p_ss_id = 21 then 1 else Null end) as TotalII,
// 	sum(case when pss.p_ss_id = 22 then 1 else Null end) as TotalIII,
// 	sum(case when pss.p_ss_id = 23 then 1 else Null end) as TotalIV
// 	FROM patient_sign_symptom pss, patient_appointment_register par 
// 	WHERE month(par.par_prescription_datetime_report) = '$month' AND YEAR(par.par_prescription_datetime_report) = '$year' AND pss.p_ss_id IN ('$id') AND par.par_id in (SELECT MAX(par_id) FROM patient_appointment_register
// 	GROUP BY par_p_id) AND par_doctor_seen_status = 1 
// 	AND pss.pss_status = 1 AND par.par_id = pss.par_id 
// 	GROUP BY pss.p_ss_id";
// 	return $sql;
// }
function patientLastPrescriptionNyhaCurrentMonth($id, $month, $year)
{
	$sql = "SELECT   MonthName(par.par_prescription_datetime_report) AS month_name, p_ss_id,par_prescription_datetime_report, 
	sum(case when pss.p_ss_id = 20 then 1 else Null end) as Total,
	sum(case when pss.p_ss_id = 21 then 1 else Null end) as TotalII,
	sum(case when pss.p_ss_id = 22 then 1 else Null end) as TotalIII,
	sum(case when pss.p_ss_id = 23 then 1 else Null end) as TotalIV
	FROM patient_sign_symptom pss, patient_appointment_register par 
	WHERE pss.p_ss_id IN ('$id') AND par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
	GROUP BY par_p_id) AND par_doctor_seen_status = 1 
	AND pss.pss_status = 1 AND month(par_prescription_datetime_report) = '$month' AND year(par_prescription_datetime_report) = '$year' AND par.par_id = pss.par_id  AND par_doctor_seen_status= 1";
	return $sql;
}

// function currentMonthDeviceTotal($id, $month, $year)
// {
// 	$sql = "SELECT  d_id,p_id,
// 	sum(case when pd.d_id = 1 then 1 else Null end) as Total,
// 	sum(case when pd.d_id = 2 then 1 else Null end) as TotalII,
// 	sum(case when pd.d_id = 5 then 1 else Null end) as TotalIII,
// 	sum(case when pd.d_id = 6 then 1 else Null end) as TotalIV,
// 	sum(case when pd.d_id = 7 then 1 else Null end) as TotalV
// 	FROM patient_device pd, patient_appointment_register par 
// 	WHERE pd.d_id IN ('$id') AND par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
// 	GROUP BY par_p_id) 
// 	AND pd.pd_status = 1 AND month(par_prescription_datetime_report) = '$month' AND year(par_prescription_datetime_report) = '$year' AND par.par_id = pd.par_id  AND par_doctor_seen_status= 1";
// 	return $sql;
// }

// Monthly Last Prescription Base
function heartFailureNonFailureByPatients($year)
{
	$sql
		= "SELECT  DISTINCT MonthName(par.par_prescription_datetime_report) AS month_name, rh_id,par_prescription_datetime_report, 
		YEAR(par.par_prescription_datetime_report) AS YearName,
		sum(case when prh.rh_id = 20 then 1 else 0 end) as hearFailure,
		sum(case when prh.rh_id = 21 then 1 else 0 end) as NonHeart
		FROM patient_recent_hospitalization prh, patient_appointment_register par 
		WHERE YEAR(par.par_prescription_datetime_report) = '$year'
		AND par.par_prescription_datetime_report in (SELECT MAX(par_prescription_datetime_report) FROM patient_appointment_register
		GROUP BY MonthName(par_prescription_datetime_report), par_p_id, rh_id) AND par.par_doctor_seen_status = 1
		AND prh.prh_status = 1 AND par.par_id = prh.par_id
		GROUP BY  MonthName(par_prescription_datetime_report), prh.rh_id";
	return $sql;
}
// Last Prescription Base
function hfByLastPrescriptionBase($year)
{
	$sql
		= "SELECT  rh_id,par.par_id, par_prescription_datetime_report,MonthName(par_prescription_datetime_report) AS month_name, rh_id,par_prescription_datetime_report, 
		YEAR(par_prescription_datetime_report) AS YearName,
			sum(case when prh.rh_id = 20 then 1 else 0 end) as hearFailure,
			sum(case when prh.rh_id = 21 then 1 else 0 end) as NonHeart
		FROM  patient_recent_hospitalization prh, patient_appointment_register par 
		WHERE prh.rh_id IN (20,21) AND par.par_id in (SELECT MAX(par_id) FROM patient_appointment_register
		GROUP BY par_p_id, rh_id, YEAR(par_prescription_datetime_report)) AND par.par_doctor_seen_status = 1
		AND prh.prh_status = 1 AND par.par_id = prh.par_id  AND year(par.par_prescription_datetime_report) = '$year'
		GROUP BY YEAR(par_prescription_datetime_report), MONTH(par_prescription_datetime_report), prh.rh_id";
	return $sql;
}

// Reasons for Hospital Admissions Data Get
function patientsHeartFailureNonFailureGet($year)
{
	$sql
		= "SELECT rh_id,rh_id as Heart,MONTHNAME(par_prescription_date)as month_name,Year(par_prescription_date) as year_name,count(prh_id) as Total
		FROM patient_recent_hospitalization
		JOIN patient_appointment_register
		ON patient_appointment_register.par_id = patient_recent_hospitalization.par_id
		WHERE rh_id IN (20,21) AND YEAR(par_prescription_date) = '$year' AND par_doctor_seen_status = 1 AND prh_status = 1
		GROUP BY YEAR(par_prescription_date), MONTH(par_prescription_date),rh_id";
	return $sql;
}

function get_not_in_value($table, $sub_select_id, $group_id, $condition_colum, $data, $status)
{

	$sql = "SELECT * FROM $table pe join patient_basic_info pbi on pbi.p_id = pe.p_id WHERE $sub_select_id in (SELECT MAX($sub_select_id) FROM $table
	GROUP BY $group_id) AND $condition_colum NOT IN $data AND $status = 1";
	//$sql = "SELECT * FROM patient_ecg pe  join patient_basic_info pbi on pbi.p_id = pe.p_id WHERE pecg_id in (SELECT MAX(pecg_id) FROM patient_ecg
	// 		GROUP BY p_id) AND `pecg_rhythmc_sinus` NOT IN ('SINUS', 'AF') AND pecg_status = 1";
	return $sql;
}
function get_not_in_valueMedicine($table, $sub_select_id, $group_id, $condition_colum, $data, $status)
{

	$sql = "SELECT * FROM $table pe join patient_appointment_register par on par.par_id = pe.par_id   WHERE $sub_select_id in (SELECT MAX($sub_select_id) FROM $table
	GROUP BY $group_id) AND $condition_colum NOT IN $data AND $status = 1";
	return $sql;
}
function get_not_in_value_BBB($table, $sub_select_id, $group_id, $condition_colum, $data, $status)
{
	$sql = "SELECT * FROM $table pe join patient_basic_info pbi on pbi.p_id = pe.p_id join patient_ecg_bbb peb on peb.peb_ecg_row_id = pe.pecg_id WHERE $sub_select_id in (SELECT MAX($sub_select_id) FROM $table
	GROUP BY $group_id) AND $condition_colum NOT IN $data AND $status = 1";

	return $sql;
}
function get_in_value($table, $sub_select_id, $group_id, $condition_colum, $data, $status)
{

	$sql = "SELECT * FROM $table pe join patient_basic_info pbi on pbi.p_id = pe.p_id WHERE $sub_select_id in (SELECT MAX($sub_select_id) FROM $table
	GROUP BY $group_id) AND $condition_colum IN $data AND $status = 1";
	return $sql;
}

// function get_not_in_rythem()
// {

// 	$sql = "SELECT * FROM patient_ecg pe  join patient_basic_info pbi on pbi.p_id = pe.p_id WHERE pecg_id in (SELECT MAX(pecg_id) FROM patient_ecg
// 		GROUP BY p_id) AND `pecg_rhythmc_sinus` NOT IN ('SINUS', 'AF') AND pecg_status = 1";
// 	return $sql;
// }
// function get_not_in_heart_block()
// {

// 	$sql = "SELECT * FROM patient_ecg pe  join patient_basic_info pbi on pbi.p_id = pe.p_id WHERE pecg_id in (SELECT MAX(pecg_id) FROM patient_ecg
// 		GROUP BY p_id) AND `pecg_heart_block` NOT IN ('0','1','2','3') AND pecg_status = 1";
// 	return $sql;
// }
// function get_not_in_Extra_beats()
// {

// 	$sql = "SELECT * FROM patient_ecg pe  join patient_basic_info pbi on pbi.p_id = pe.p_id WHERE pecg_id in (SELECT MAX(pecg_id) FROM patient_ecg
// 		GROUP BY p_id) AND `pecg_ex_beats` NOT IN ('Yes','No') AND pecg_status = 1";
// 	return $sql;
// }

function get_no_ecg_yet($f_table, $s_table, $conditional_id,  $status)
{
	$sql = "SELECT * from $f_table where $conditional_id not in (select $conditional_id from $s_table WHERE $status = 1)";
	// $sql = "select * from patient_basic_info where p_id not in (select p_id from patient_ecg WHERE pecg_status = 1)";
	return $sql;
}

function get_no_bbb()
{
	$sql = "SELECT * from patient_ecg pe join patient_basic_info pbi on pbi.p_id = pe.p_id  where pecg_id not in (select peb_ecg_row_id from patient_ecg_bbb WHERE pecg_status = 1) AND pecg_date_report in (SELECT MAX(pecg_date_report) FROM patient_ecg
	GROUP BY p_id)";
	return $sql;
}
function get_no_EGFR()
{
	$sql = "SELECT * FROM patient_s_creatinine psc  join patient_basic_info pbi on pbi.p_id = psc.p_id WHERE psc_date_report in (SELECT MAX(psc_date_report) FROM patient_s_creatinine
	GROUP BY p_id) AND  `psc_egfr_g1`='' AND `psc_egfr_g2` = '' AND `psc_egfr_g3`='' AND `psc_egfr_g4`='' AND `psc_egfr_g5`=''  AND psc_status = 1";
	return $sql;
}
function par_empty_date()
{
	$sql = "SELECT * FROM patient_basic_info
	JOIN patient_appointment_register
	ON patient_appointment_register.par_p_id = patient_basic_info.p_id
	WHERE par_prescription_date In ('') AND par_doctor_seen_status = 1 AND p_status = 1 AND par_status = 1;";
	return $sql;
}
