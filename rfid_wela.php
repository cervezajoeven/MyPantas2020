<?php


$url = 'http://0.0.0.0:8011';

define("COOKIE_FILE", "/tmp/cookie.txt");
// =============login=================
$ch = curl_init($url.'/api/method/login');
curl_setopt( $ch, CURLOPT_POSTFIELDS,array(
'usr'=>'jvfiel@bai.ph',
'pwd'=>'1234' 
));
curl_setopt ($ch, CURLOPT_COOKIEJAR, COOKIE_FILE); 
curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
echo $result;

// ===============get data======================
$ch = curl_init($url.'/api/resource/Enrollees?fields=["id_number","first_name","last_name"]');
$arrayName = array('fields' => array("name","id_number"));
echo $arrayName['fields'][0];
curl_setopt ($ch, CURLOPT_COOKIEJAR, COOKIE_FILE); 
curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($ch);
echo $result;

?>
Note:
change $url with your wela site url
change usr with your username
change pwd with your password

Enrollees Fields:

school_year
status
id_number
incoming_level
strand_1
lrn_1
interest_club_1
first_name
middle_name
last_name
nickname
gender
birthdate
age
religion_1
province
city
birthplace_1
barangay
street_1
street_2
home_address
mother_tongue
ethnic_group
foreign_ethnicity
nationality_1
citizenship_1
student_phone_number
student_home_phone
student_email
esc_1
voucher_1
blood_type_1
height_1
weight_1
medical_issues
school_last_attended_1
school_last_attended_address
father_name
father_first_name
father_middle_name
father_last_name
father_phone_number
father_secondary_number
father_occupation_1
father_employer_name
father_office_address_1
father_office_phone
father_home_phone
mother_maiden_name
mother_name
mother_first_name
mother_middle_name
mother_last_name
mother_phone_number
mother_secondary_number
mother_occupation_1
mother_employer_name
mother_office_address_1
mother_office_phone
mother_home_phone
guardian_name_1
guardian_first_name
guardian_middle_name
guardian_last_name
guardian_relation_1
guardian_phone_number
guardian_secondary_phone
guardian_home_phone
guardian_office_phone
in_case_of_emergency