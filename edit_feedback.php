<?php

include 'db.php';

$id=$_GET['id'];

$result=$conn->query(
"SELECT * FROM feedback WHERE id=$id");

$row=$result->fetch_assoc();
<a href="edit_feedback.php?id=<?php echo $last_id; ?>">
Edit My Feedback
</a>
?>