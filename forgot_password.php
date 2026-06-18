<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-box">

<h2>Reset Password</h2>

<form action="reset_password.php" method="POST">

<label>Username</label>
<input type="text" name="username" required>

<label>Security Answer</label>
<input type="text" name="security_answer" required>

<label>New Password</label>
<input type="password" name="new_password" required>

<button type="submit">Reset Password</button>

</form>

<br>

<a href="principal_login.php">Back to Login</a>

</div>

</body>
</html>