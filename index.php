<!DOCTYPE html>
<html>

<head>
    <title>Arellano University </title>
    <!-- Connections to css -->
    <link rel="stylesheet" href="style.css">
    <!-- Font-family -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet'>
    <!-- Web Icon -->
    <link rel="icon" type="image/png" href="au-logo-smaller.png">
</head>

<body>
    <div class="login-form">
        <img src="au-logo-smaller.png" alt="Logo" class="logo">
        <h1>Welcome to Arellano University</h1>
        <form>
            <div class="login">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter your Username">
            </div>
            <br>
            <div class="login">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">

            </div>
            <div class="login">
                <input type="submit" value="Continue">
            </div>
        </form>
    </div>
    <!-- Footer the one on the bottom -->
    <div class="footer">
        <p>Copyright &copy; 2022 <br>Arellano University Juan Sumulong</p>
    </div>
	
    <?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Retrieve the form data
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check the username and password against the list of valid credentials
  if ($username == 'admin' && $password == 'password') {
    // Success: redirect the user to the home page
    header('location: page2.php');
    exit;
  } else {
    // Failure: display an error message
    echo '<p>Invalid username or password. Please try again.</p>';
  }
}
?>
</body>

</html>