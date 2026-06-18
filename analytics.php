<?php

session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: principal_login.php");
    exit();
}

include 'db.php';

$total = mysqli_fetch_assoc(
mysqli_query($conn,
"SELECT COUNT(*) AS total FROM feedback"));

$avg = mysqli_fetch_assoc(
mysqli_query($conn,
"SELECT
AVG(teaching_quality) AS teaching,
AVG(subject_knowledge) AS knowledge,
AVG(communication_skills) AS communication,
AVG(lab_facilities) AS lab,
AVG(library_facilities) AS library,
AVG(campus_cleanliness) AS clean,
AVG(placement_support) AS placement
FROM feedback"));

?>

<!DOCTYPE html>
<html>
<head>

<title>Analytics Dashboard</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1>Feedback Analytics Dashboard</h1>

<a href="principal_dashboard.php">
Back to Dashboard
</a>

<br><br>

<h2>Total Feedback Submitted</h2>

<h3>
<?php echo $total['total']; ?>
</h3>

<hr>

<h2>Average Ratings (Out of 5)</h2>

<p><b>Teaching Quality:</b>
<?php echo round($avg['teaching'],2); ?>
</p>

<p><b>Subject Knowledge:</b>
<?php echo round($avg['knowledge'],2); ?>
</p>

<p><b>Communication Skills:</b>
<?php echo round($avg['communication'],2); ?>
</p>

<p><b>Lab Facilities:</b>
<?php echo round($avg['lab'],2); ?>
</p>

<p><b>Library Facilities:</b>
<?php echo round($avg['library'],2); ?>
</p>

<p><b>Campus Cleanliness:</b>
<?php echo round($avg['clean'],2); ?>
</p>

<p><b>Placement Support:</b>
<?php echo round($avg['placement'],2); ?>
</p>

</div>

</body>
</html>