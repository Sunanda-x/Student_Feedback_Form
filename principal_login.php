<!DOCTYPE html>
<html>
<head>
<title>Principal Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
body{
    background-image:url('images/principal_bg.jpg');
    background-size:cover;
    background-position:center;
    background-attachment:fixed;
}
</style>
<br><br>
<div class="login-box">

<h1>Principal Login</h1>

<form action="check_login.php" method="POST">

<label>Username</label>
<input type="text" name="username" required>

<label>Password</label>
<input type="password" name="password" required>

<button type="submit">
Login
</button>

<br><br>

<br><br>

<a href="forgot_password.php" class="forgot-link">
Forgot Password?
</a>
Login
</button>

</form>

</div>

</body>
</html>