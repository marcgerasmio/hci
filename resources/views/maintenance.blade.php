<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
  integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- Linking CSS from frame-14 -->
  <link rel="stylesheet" href="./frame-14.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" />
  
  <!-- Linking CSS specific to maintenance page -->
  <link href="{{ asset('css/maintenance.css') }}" rel="stylesheet">
  
  <!-- JavaScript for sidebar functionality -->
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
</head>
<body>
  <div class="desktop-1">
    <!-- Sidebar Section -->
    <div class="parent2">
      <img class="icon9" alt="" src="./public/01-5@2x.png" />
      <div class="side-bar7" id="sidebar">
        <div class="sidebar-toggle" onclick="toggleSidebar()">
          <i class="fa-solid fa-repeat toggle-icon" style="font-size: 1.2rem; color: yellow;"></i>
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
    </div>
    
    <!-- Maintenance Content Section -->
    <div class="maintenance-content">
      <img src="aaa.png" alt="aaa" class="aaa"> <!-- Adding aaa.png image -->
      <div class="aaa-wrapper">
        <h1>Electricity Maintenance</h1>
        <div class="maintenance-text">
          <p>During maintenance, our team ensures that all electrical systems are operating efficiently and safely. We conduct routine inspections, repairs, and upgrades to prevent outages and ensure continuous power supply to our community.</p>
          <p>Our maintenance activities include:</p>
          <ul>
            <li>Inspecting power lines and transformers</li>
            <li>Replacing faulty components</li>
            <li>Trimming trees near power lines</li>
            <li>Testing backup generators</li>
          </ul>
          <p>We understand the importance of reliable electricity and strive to provide the best service possible to our customers. Thank you for your patience and cooperation during maintenance periods.</p>
        </div>
      </div>
      <div class="navigation">
        <a href="#" class="next-page"></a> <!-- Right side clickable text -->
        <!-- Home -->
<a href="frame-14.html" class="home-link">Home</a>
<!-- Left side home link -->
      </div>
    </div>
  </div>
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
