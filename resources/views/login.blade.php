<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>

<div class="login-container">
  <h2 class="login-header">Login</h2>
  <form id="login-form" class="login-form" action="frame-14.html" method="post" onsubmit="return validateForm()">
    <div class="form-group">
      <label for="login-username" class="form-label">Username</label>
      <input type="text" id="login-username" name="username" class="form-input" placeholder="Enter your username">
      <div id="login-username-error" class="error-message"></div>
    </div>
    <div class="form-group">
      <label for="login-password" class="form-label">Password</label>
      <input type="password" id="login-password" name="password" class="form-input" placeholder="Enter your password">
      <div id="login-password-error" class="error-message"></div>
    </div>
    <button type="submit" class="btn">Login</button>
  </form>
  <div style="display:flex;">
  <h3>Don't have an account? </h3>&nbsp;<h3><a href="#" onclick="navigateTo('{{ route('signup') }}')">Click Here</a></h3>
</div>
</div>

<script src="login.js"></script>
<script>
  function validateForm() {
    var username = document.getElementById("login-username").value;
    var password = document.getElementById("login-password").value;

    if (username === "" || password === "") {
      alert("Please fill in all fields.");
      return false; // Prevent form submission
    }
    return true; // Allow form submission
  }
  function navigateTo(url) {
    event.preventDefault(); // Prevent default behavior of anchor element
    window.location.href = url; // Redirect to the provided URL
  }
</script>

</body>
</html>
