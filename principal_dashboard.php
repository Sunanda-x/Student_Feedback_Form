<?php
session_start();

if(!isset($_SESSION['admin'])) {
    header("Location: principal_login.php");
    exit();
}

include 'db.php';

// Default query
$query = "SELECT * FROM feedback";

// Search by roll number
if(isset($_GET['roll_number']) && !empty($_GET['roll_number'])) {
    $roll = $_GET['roll_number'];
    $query = "SELECT * FROM feedback WHERE roll_number='$roll'";
}

// Filter by period
if(isset($_GET['period']) && !empty($_GET['period'])) {
    $period = $_GET['period'];
    $query = "SELECT * FROM feedback WHERE feedback_period='$period'";
}

$result = $conn->query($query);
$serial = 1;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Principal Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Principal Dashboard</h1>

    <a href="analytics.php">Analytics Dashboard</a>
    &nbsp;&nbsp;&nbsp;
    <a href="logout.php">Logout</a>

    <br><br>

    <h2>Search By Roll Number</h2>

    <form method="GET">
        <input type="text" name="roll_number" placeholder="Enter Roll Number">
        <button type="submit">Search</button>
    </form>

    <br>

    <h2>Filter By Period</h2>

    <form method="GET">
        <select name="period">
            <option value="">All</option>
            <option>Jan-Mar</option>
            <option>Apr-Jun</option>
            <option>Jul-Sep</option>
            <option>Oct-Dec</option>
        </select>

        <button type="submit">Filter</button>
    </form>

    <br>

    <table border="1" cellpadding="8" cellspacing="0">

        <tr>
            <th>S.No</th>
            <th>Course</th>
            <th>Branch</th>
            <th>Semester</th>
            <th>Roll No</th>
            <th>Period</th>
            <th>Teaching</th>
            <th>Knowledge</th>
            <th>Communication</th>
            <th>Lab</th>
            <th>Library</th>
            <th>Cleanliness</th>
            <th>Placement</th>
            <th>Comments</th>
            <th>Date</th>
        </tr>

        <?php while($row = $result->fetch_assoc()) { ?>

        <tr>
            <td><?php echo $serial++; ?></td>
            <td><?php echo $row['course_name']; ?></td>
            <td><?php echo $row['branch_name']; ?></td>
            <td><?php echo $row['semester']; ?></td>
            <td><?php echo $row['roll_number']; ?></td>
            <td><?php echo $row['feedback_period']; ?></td>
            <td><?php echo $row['teaching_quality']; ?></td>
            <td><?php echo $row['subject_knowledge']; ?></td>
            <td><?php echo $row['communication_skills']; ?></td>
            <td><?php echo $row['lab_facilities']; ?></td>
            <td><?php echo $row['library_facilities']; ?></td>
            <td><?php echo $row['campus_cleanliness']; ?></td>
            <td><?php echo $row['placement_support']; ?></td>
            <td><?php echo $row['comments']; ?></td>
            <td><?php echo $row['submission_date']; ?></td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>
