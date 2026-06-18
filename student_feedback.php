<!DOCTYPE html>
<html>
<head>
<title>Student Feedback Form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<form action="submit_feedback.php" method="POST">

<label>Course Name</label>
<input type="text" name="course_name" required>
<label>Branch Name</label>
<select name="branch_name" required>
    <option value="">Select Branch</option>
    <option>CME</option>
    <option>CIVIL</option>
    <option>EEE</option>
    <option>MECH</option>
    <option>AIML</option>
</select>

<label>Semester</label>
<select name="semester" required>
    <option value="">Select Semester</option>
    <option>1st Semester</option>
    <option>3rd Semester</option>
    <option>4th Semester</option>
    <option>5th Semester</option>
</select>



<label>Roll Number</label>
<input type="text" name="roll_number" required>

<label>Feedback Period</label>

<select name="feedback_period" required>
<option value="">Select Period</option>
<option>Jan-Mar</option>
<option>Apr-Jun</option>
<option>Jul-Sep</option>
<option>Oct-Dec</option>
<br><br>
</select>

<h2>Ratings</h2>

<label>Teaching Quality</label>
<select name="teaching_quality">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<br><br>
</select>

<label>Subject Knowledge</label>
<select name="subject_knowledge">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<br><br>
</select>

<label>Communication Skills</label>
<select name="communication_skills">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<br><br>
</select>

<label>Lab Facilities</label>
<select name="lab_facilities">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<br><br>
</select>

<label>Library Facilities</label>
<select name="library_facilities">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<br><br>
</select>

<label>Campus Cleanliness</label>
<select name="campus_cleanliness">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<br><br>
</select>

<label>Placement Support</label>
<select name="placement_support">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<br><br>
</select>
<label>Comments / Suggestions</label>
<textarea name="comments"></textarea>
<br><br>
<button type="submit">
Submit Feedback
</button>

</form>

</div>

</body>
</html>
