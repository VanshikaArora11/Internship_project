<?php
$link = mysqli_connect("localhost", "root", "", "internship");          
$student_first_name = $_POST['student_first_name'];
$student_middle_name = $_POST['student_middle_name'];
$student_last_name = $_POST['student_last_name'];
$student_contact = $_POST['student_contact'];
$student_gender = $_POST['student_gender'];
$student_differently_abled = $_POST['student_differently_abled'];
$student_category = $_POST['student_category'];
$student_description = $_POST['student_description'];
$student_10th_school = $_POST['student_10th_school'];
$student_10th_marks = $_POST['student_10th_marks'];
$student_10th_year = $_POST['student_10th_year'];
$student_12th_school = $_POST['student_12th_school'];
$student_12th_marks = $_POST['student_12th_marks'];
$student_12th_year = $_POST['student_12th_year'];
$student_highest_degree = $_POST['student_highest_degree'];
$student_college_status = $_POST['student_college_status'];
$result_declaration_date = $_POST['result_declaration_date'];
$student_graduating_year = $_POST['student_graduating_year'];
$student_graduating_marks = $_POST['student_graduating_marks'];
$student_first_location = $_POST['student_first_location'];
$student_second_location = $_POST['student_second_location'];
$student_third_location = $_POST['student_third_location'];
$student_fourth_location = $_POST['student_fourth_location'];
$student_skills = $_POST['student_skills'];
$institute_name = $_POST['institute_name'];
$institute_phone = $_POST['institute_phone'];
$institute_mobile = $_POST['institute_mobile'];
$institute_location = $_POST['institute_location'];
$institute_email = $_POST['institute_email'];
$tpo_name = $_POST['tpo_name'];
$tpo_email = $_POST['tpo_email'];
$student_languages = $_POST['student_languages'];
$internship_experience = $_POST['internship_experience'];
$student_work_and_volunteer = $_POST['student_work_and_volunteer'];
$publication_and_research = $_POST['publication_and_research'];
$events_and_research = $_POST['events_and_research'];
$student_tech_events = $_POST['student_tech_events'];
$student_events = $_POST['student_events'];
$student_refrence_letter = $_POST['student_refrence_letter'];
$student_resume = $_POST['student_resume'];
$student_cover_letter = $_POST['student_cover_letter'];
$student_transcript = $_POST['student_transcript'];
$student_other_documents = $_POST['student_other_documents'];
$student_government_id = $_POST['student_government_id'];
$student_areaofintreset = $_POST['student_areaofintreset'];
$link = $_POST['link'];
$student_uid = $_POST['student_uid'];

echo $sql = "
UPDATE `student_register` 
SET 
`student_first_name`='$student_first_name',
`student_middle_name`='$student_middle_name',
`student_last_  name`='$student_last_name',
`student_contact`='$student_contact',
`student_gender`='$student_gender',
`student_differently_abled`='$student_differently_abled',
`student_category`='$student_category',
`student_description`='$student_description',
`student_10th_school`='$student_10th_school',
`student_10th_marks`='$student_10th_marks',
`student_10th_year`='$student_10th_year',
`student_12th_school`='$student_12th_school',
`student_12th_marks`='$student_12th_marks',
`student_12th_year`='$student_12th_year',
`student_highest_degree`='$student_highest_degree',
`student_college_status`='$student_college_status',
`result_declaration_date`='$result_declaration_date',
`student_graduating_year`='$student_graduating_year',
`student_graduating_marks`='$student_graduating_marks',
`student_first_location`='$student_first_location',
`student_second_location`='$student_second_location',
`student_third_location`='$student_third_location',
`student_fourth_location`='$student_fourth_location',
`student_skills`='$student_skills',
`institute_name`='$institute_name',
`institute_phone`='$institute_phone',
`institute_mobile`='$institute_mobile',
`institute_location`='$institute_location',
`institute_email`='$institute_email',
`tpo_name`='$tpo_name',
`tpo_email`='$tpo_email',
`student_languages`='$student_languages',
`internship_experience`='$internship_experience',
`student_work_and_volunteer`='$student_work_and_volunteer',
`publication_and_research`='$publication_and_research',
`events_and_research`='$events_and_research',
`student_tech_events`='$student_tech_events',
`student_events`='$student_events',
`student_refrence_letter`='$student_refrence_letter',
`student_resume`='$student_resume',
`student_cover_letter`='$student_cover_letter',
`student_transcript`='$student_transcript',
`student_other_documents`='$student_other_documents',
`student_government_id`='$student_government_id',
`student_areaofintreset`='$student_areaofintreset',
`link`='$link'
WHERE `student_uid`='$student_uid'
";

if (mysqli_query($link, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($link);
}

mysqli_close($link);
?>
