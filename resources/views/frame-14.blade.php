<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
  integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
   crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href="{{ asset('css/frame-14.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" />
</head>
<body>
  <img src="aaa.png" alt="aaa" class="aaa"> 
  <div class="group-root">
    <div class="parent2">
      <img class="icon9" alt="" src="./public/01-5@2x.png" />
      <div class="side-bar7" id="sidebar">
        <div class="sidebar-toggle" onclick="toggleSidebar()">
          <i class="fa-solid fa-repeat toggle-icon"></i>
        </div>
        <div class="menu7">
  <div class="frame-parent6" id="sidebarOptions">
    <!-- Options -->
    <div class="frame-child41 rectangle-icon" onclick="navigateTo('{{ route('frame-14') }}')">
      <i class="fa-solid fa-option"></i><span class="text">Dashboard</span>
    </div>
    <span></span>
    <span></span>
    <!-- Home -->
    <div class="frame-child41 rectangle-icon" onclick="navigateTo('{{ route('frame-14') }}')">
      <i class="fas fa-home"></i><span class="text">Home</span>
    </div>
    <!-- Maintenance -->
    <div class="frame-child41 rectangle-icon" onclick="navigateTo('{{ route('maintenance') }}')">
      <i class="fas fa-wrench"></i><span class="text">Maintenance</span>
    </div>
    <!-- Announcement -->
    <div class="frame-child41 rectangle-icon" onclick="navigateTo('{{ route('announcement') }}')">
      <i class="fas fa-bullhorn"></i><span class="text">Announcement</span>
    </div>
    <!-- News -->
    <div class="frame-child41 rectangle-icon" onclick="navigateTo('{{ route('news') }}')">
      <i class="fas fa-newspaper"></i><span class="text">News and Events</span>
    </div>
    <!-- Message -->
    <div class="frame-child41 rectangle-icon" onclick="navigateTo('{{ route('message') }}')">
      <i class="fas fa-envelope"></i><span class="text">Message us</span>
    </div>

    <div class="rectangle-icon" onclick="navigateTo('{{ route('login') }}')">
      <i class=""></i><span class="text">Log in</span>
    </div>
    <div class="rectangle-icon" onclick="navigateTo('{{ route('signup') }}')">
      <i class=""></i><span class="text">Sign up</span>
    </div>
  </div>
</div>

      </div>
      <img src="logo_aneco.png" alt="aneco" class="logo_aneco">
    </div>
  </div>

  <script>
    function toggleSidebar() {
      var sidebar = document.getElementById("sidebar");
      sidebar.classList.toggle("enlarged");
      var sidebarOptions = document.getElementById("sidebarOptions");
      sidebarOptions.classList.toggle("show");
    }

    function navigateTo(url) {
      window.location.href = url;
    }
  </script>
  <!-- Logout button fixed to bottom right corner -->
<a href="login.html" class="logout-button">Log Out</a>

<style>
  /* CSS for logout button */
  .logout-button {
    position: fixed;
    bottom: 1rem;
    right: 1rem;
    z-index: 999; /* Ensure button is on top of other content */
    background-color: #2e2e2f;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    text-decoration: none; /* Remove default underline */
  }
</style>

</body>
</html>
