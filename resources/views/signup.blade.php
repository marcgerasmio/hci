<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
</head>
<body>

<div class="signup-container">
  <h2 class="signup-header">Sign Up</h2>
  <!-- Modified form action to point to login.html -->
  <form id="signup-form" class="signup-form" action="login.html" method="post" onsubmit="return validateForm()">
    <div class="form-group">
      <label for="signup-username" class="form-label">Username</label>
      <input type="text" id="signup-username" name="username" class="form-input" placeholder="Choose a username">
      <div id="signup-username-error" class="error-message"></div>
    </div>
    <div class="form-group">
      <label for="signup-email" class="form-label">Email</label>
      <input type="email" id="signup-email" name="email" class="form-input" placeholder="Enter your email">
      <div id="signup-email-error" class="error-message"></div>
    </div>
    <div class="form-group">
      <label for="signup-password" class="form-label">Password</label>
      <input type="password" id="signup-password" name="password" class="form-input" placeholder="Choose a password">
      <div id="signup-password-error" class="error-message"></div>
    </div>
    <button type="submit" class="btn">Sign Up</button>
  </form>
</div>

<script src="signup.js"></script>
<script>
  function validateForm() {
    var username = document.getElementById("signup-username").value;
    var email = document.getElementById("signup-email").value;
    var password = document.getElementById("signup-password").value;

    if (username === "" || email === "" || password === "") {
      alert("Please fill in all fields.");
      return false; // Prevent form submission
    }
    return true; // Allow form submission
  }
</script>

</body>
</html>
