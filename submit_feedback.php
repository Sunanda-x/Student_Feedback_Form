<?php

include 'db.php';

$course_name=$_POST['course_name'];
$branch_name = $_POST['branch_name'];
$semester = $_POST['semester'];
$roll_number = $_POST['roll_number'];
$feedback_period = $_POST['feedback_period'];

$teaching_quality = $_POST['teaching_quality'];
$subject_knowledge = $_POST['subject_knowledge'];
$communication_skills = $_POST['communication_skills'];
$lab_facilities = $_POST['lab_facilities'];
$library_facilities = $_POST['library_facilities'];
$campus_cleanliness = $_POST['campus_cleanliness'];
$placement_support = $_POST['placement_support'];

$comments = $_POST['comments'];

$check = "SELECT * FROM feedback
WHERE roll_number='$roll_number'
AND feedback_period='$feedback_period'";

$result = $conn->query($check);

if($result->num_rows > 0)
{
    die("Feedback already submitted for this quarter.");
}

$sql="INSERT INTO feedback(
course_name,
branch_name,
semester,
roll_number,
feedback_period,
teaching_quality,
subject_knowledge,
communication_skills,
lab_facilities,
library_facilities,
campus_cleanliness,
placement_support,
comments
)
VALUES(
'$course_name',
'$branch_name',
'$semester',
'$roll_number',
'$feedback_period',
'$teaching_quality',
'$subject_knowledge',
'$communication_skills',
'$lab_facilities',
'$library_facilities',
'$campus_cleanliness',
'$placement_support',
'$comments'
)";

if($conn->query($sql))
{
    echo "
    <script>
    alert('Feedback Submitted Successfully');
    window.location='index.php';
    </script>
    ";
}
else
{
    echo $conn->error;
}

?>
