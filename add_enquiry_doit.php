<?php
$enquirer_name=$_POST['enquirer_name'];
$enquirer_email=$_POST['enquirer_email'];
$enquirer_phone=$_POST['enquirer_phone'];
$enquirer_notes=$_POST['enquirer_notes'];
$enquirer_job=$_POST['enquirer_job'];
$enquirer_category=$_POST['enquirer_category'];
$enquiry_source=$_POST['enquiry_source'];
$question=$_POST['question'];
$status=$_POST['status'];
$notes=$_POST['notes'];
$enquirer_feedback=$_POST['enquirer_feedback'];
$answer=$_POST['answer'];
$user=$_POST['user'];
$referred=$_POST['referred'];
$completed_es=$_POST['completed_es'];
$qid=$_POST['qid'];

if ((empty($_POST['completed_es'])) &&  ($status=='Completed')){
$completed_es=date("Y-m-d H:i:s");
}

$con = mysqli_connect("localhost", "db", "user","pass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$query_string="update enquiry set enquirer_name='$enquirer_name', enquirer_email='$enquirer_email', enquirer_phone='$enquirer_phone', enquirer_notes='$enquirer_notes', enquirer_job='$enquirer_job', enquirer_category='$enquirer_category', enquiry_source='$enquiry_source', question='$question', `status`='$status', enquirer_feedback='$enquirer_feedback', answer='$answer', user='$user', referred='$referred'";
if (strlen($completed_es) >5){
$query_string .= ", completed_es='$completed_es'";
}
$query_string .= "where id='$qid'";
mysqli_query($con,$query_string);

    $topics = $_POST['subject'];
    foreach ($topics as $key => $value) {
    $subjectsql="INSERT INTO subject_links (subjects_id, enquiry_id) VALUES ('$value', '$qid')";
echo $subjectsql;
mysqli_query($con,$subjectsql);
}

$query_string="update enquiry set enquirer_name = '', enquirer_email = '', enquirer_phone= '' where DATEDIFF(CURDATE(), completed_es) > 1000";
mysqli_query($con,$query_string);
mysqli_close($con);

echo "<script>alert('Thanks for submitting a new enquiry')</script>";

header("Location: add_enquiry.php?id=".$qid);
?>

