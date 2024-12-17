<?php
require('connection.php');
$enrollment_no= $_POST['enrollment_no'];
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email= $_POST['email'];
$address= $_POST['address'];
$city= $_POST['city'];
$state= $_POST['state'];
$zip= $_POST['zip'];
$mobile_number= $_POST['mobile_number'];
$gender= $_POST['gender'];
$dob= $_POST['dob'];
$course= $_POST['course'];
$branch= $_POST['branch'];
$interest= $_POST['interest'];
$languagesgoodat= $_POST['languagesgoodat'];
$placement= $_POST['placement'];
$company_you_get_placed= $_POST['company_you_get_placed'];
$where_company_is_located= $_POST['where_company_is_located'];
$further_studies= $_POST['further_studies'];
$you_going_to_study_for= $_POST['you_going_to_study_for'];
$name_of_clg_forfurtherstudies= $_POST['name_of_clg_forfurtherstudies'];
$Preferrable_Company= $_POST['Preferrable_Company'];
$Orientation_within_your_department= $_POST['Orientation_within_your_department'];
$Did_you_receive_a_current_job_description_when_you_were_hired= $_POST['Did_you_receive_a_current_job_description_when_you_were_hired'];
$training= $_POST['training'];
$receive_any_info= $_POST['receive_any_info'];
$recommend_employment_in_your_department_to_a_friend_or_colleague= $_POST['recommend_employment_in_your_department_to_a_friend_or_colleague'];
$experience_by_getting_a_placement_through_SUAS= $_POST['experience_by_getting_a_placement_through_SUAS'];
$LinkedIn_Profile= $_POST['LinkedIn_Profile'];

$sql = "INSERT INTO form(enrollment_no,firstname,lastname,email,address,city,state,zip,mobile_number,gender,dob,course,branch,interest,languagesgoodat,placement,company_you_get_placed,where_company_is_located,further_studies,you_going_to_study_for,name_of_clg_forfurtherstudies,Preferrable_Company,Orientation_within_your_department,Did_you_receive_a_current_job_description_when_you_were_hired,training,receive_any_info,recommend_employment_in_your_department_to_a_friend_or_colleague,experience_by_getting_a_placement_through_SUAS,LinkedIn_Profile) values('$enrollment_no','$firstname','$lastname','$email','$address','$city','$state','$zip','$mobile_number','$gender','$dob','$course','$branch','$interest','$languagesgoodat','$placement','$company_you_get_placed','$where_company_is_located','$further_studies','$you_going_to_study_for','$name_of_clg_forfurtherstudies','$Preferrable_Company','$Orientation_within_your_department','$Did_you_receive_a_current_job_description_when_you_were_hired','$training','$receive_any_info','$recommend_employment_in_your_department_to_a_friend_or_colleague','$experience_by_getting_a_placement_through_SUAS','$LinkedIn_Profile') ";

if (mysqli_query($connection,$sql)){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Submitted');
    window.location.href='http://localhost/Internship_project/company_details.html';
    </script>");
}else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('ERROR');
   
    </script>");
}
?>