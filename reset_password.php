<?php

include("db.php");

$username = $_POST['username'];
$security_answer = $_POST['security_answer'];
$new_password = $_POST['new_password'];

$sql = "SELECT * FROM admin
        WHERE username='$username'
        AND security_answer='$security_answer'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    $update = "UPDATE admin
               SET password='$new_password'
               WHERE username='$username'";

    mysqli_query($conn,$update);

    echo "<script>
    alert('Password Reset Successful');
    window.location='principal_login.php';
    </script>";
}
else
{
    echo "<script>
    alert('Wrong Security Answer');
    window.location='forgot_password.php';
    </script>";
}

?>