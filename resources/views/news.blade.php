<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
  integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <link href="{{ asset('css/news.css') }}" rel="stylesheet">
  <!-- Linking CSS from frame-14 -->
  <link href="{{ asset('css/frame-14.css') }}" rel="stylesheet">
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

  <!-- Custom CSS for upload button -->
  <style>
    .upload-button {
      position: fixed;
      top: 1rem;
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
  <div class="content-box">
    <h1>News and Events</h1>
    <div class="image-container">
  
      <img src="86.jpg" alt="Tree Planting" class="aaa"> <!-- Adding image -->
    </div>
    <div class="content-description">
     
      <div class="maintenance-text">
        <p>Tree Planting and Power Line Clearing for the National Electrification Awareness Month (NEAM)</p>
        <p>Our maintenance activities include:</p>
        <ul>
          <li>
            ANECO Inc. together with the Barangay NCECCO Chapter Officers of Taguibo, Pianing, and Anticala in strong partnership with the BCWD in their Adopt-a-Forest-Program make a positive impact during coronavirus through Tree Planting and Power Line Clearing. The month of August is National Electrification Awareness Month (NEAM), EC’s observance month dedicated to celebrating and raising awareness of the significant contributions of the electrifications program in nation-building.
          </li>
          <li>
            Anchored on the objective of the celebration, this annual observance highlights the activities on simultaneous Tree Planting and Power Line Clearing by the 121 Electric Cooperatives in the country.
          </li>
        </ul>
        <p>
          ANECO Inc. as one of the 121 ECs, traveled to Taguibo River Watershed Forest Reserve, Brgy. Anticala, Butuan City, the second time around since this is the second time of donation, to plant the 600 fruit-bearing and hardwood seedlings on one (1) hectare land in the watershed. Still, the situation is seeing the community come together- the Barangay NCECCO Chapter Officers of Taguibo, Pianing, and Anticala, in a collective effort to help save the Taguibo Watershed which plays a crucial role in the Butuan City water system. Whereas, the ANECO Power Clearing team positioned themselves in their assigned areas and performed the line clearing to keep power line rights-of-way free and clear of obstacles. Even during this time of the pandemic, we still have small precious things to relish, our connection with the environment, our connection with the community-as seen in the photos, the volunteers are dancing, after the tree planting, and to the MCOs that we are serving.
        </p>
        <p>We understand the importance of reliable electricity and strive to provide the best service possible to our customers. Thank you for your patience and cooperation during maintenance periods.</p>
      </div>
    </div>
  </div>
</div>

<a class="upload-button" onclick="navigateTo('{{ route('upload') }}')">Upload New Content</a>

<!-- Navigation -->
<div class="navigation">
  <a href="news3.html" class="next-page">Next page</a> <!-- Right side clickable text -->
  <!-- Home -->
  <a href="frame-14.html" class="home-link">Home</a> <!-- Left side home link -->
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
