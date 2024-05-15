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
  <link rel="stylesheet" href="./maintenance.css" />
  
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
            <div class="frame-child41 rectangle-icon" onclick="navigateTo('./frame-14.html')">
              <i class="fa-solid fa-option yellow"></i><span class="text yellow">Dashboard</span>
            </div>
            <span></span>
            <span></span>
            <!-- Home -->
            <div class="frame-child41 rectangle-icon" onclick="navigateTo('./frame-14.html')">
              <i class="fas fa-home yellow"></i><span class="text yellow">Home</span>
            </div>
           
            <!-- Maintenance -->
            <div class="frame-child41 rectangle-icon" onclick="navigateTo('./maintenance.html')">
              <i class="fas fa-wrench yellow"></i><span class="text yellow">Maintenance</span>
            </div>
            <!-- Announcement -->
            <div class="frame-child41 rectangle-icon" onclick="navigateTo('./announcement.html')">
              <i class="fas fa-bullhorn yellow"></i><span class="text yellow">Announcement</span>
            </div>
            <!-- News -->
            <div class="frame-child41 rectangle-icon" onclick="navigateTo('./news.html')">
              <i class="fas fa-newspaper yellow"></i><span class="text yellow">News and Events</span>
            </div>
            <!-- Message -->
            <div class="frame-child41 rectangle-icon" onclick="navigateTo('./message.html')">
              <i class="fas fa-envelope yellow"></i><span class="text yellow">Message us</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Maintenance Content Section -->
    <div class="maintenance-content">
      <img src="aaa.png" alt="aaa" class="aaa"> <!-- Adding aaa.png image -->
      <div class="aaa-wrapper">
        <h1>Contact us</h1>
        <div class="maintenance-text">
          <p>Contact Numbers and Email Address</p>
          <p>For concerns you may contact our office in the
            following contact information:</p>
          <ul>
           



            
            <li><i class="fa-solid fa-phone"></i>

                BUTUAN CITYEmail:customercare@aneco.phanecocentral@yahoo.com
              <li><i class="fa-solid fa-phone"></i>
                support@aneco.ph (myaneco concerns)Telephone Nos. (085) 300-9532, (085) 300-9533, and (085) 300-9530</li> 
              <li> <i class="fa-solid fa-phone"></i>
                Telefax (085) 342-6000Mobile (Smart) +63 9092668777(Globe) +63 9174576296</li> 
              <li><i class="fa-solid fa-phone"></i>
                TUNGAO BUTUAN CITYMobile No. +63 9389110247</li>
              <li><i class="fa-solid fa-phone"></i>
                CABADBARAN CITYTelephone No. (085) 343-0179</li>
              <li> <i class="fa-solid fa-phone"></i>
                NASIPITTelephone No. (085) 343-2136</li>
              <li><i class="fa-solid fa-phone"></i>
                BUENVISTA TEL NO. (085) 343-4757</li>
              <li> <i class="fa-solid fa-phone"></i>
                Low Voltage (Street Light) Php 10.4286 /kWh</li>
                <li><i class="fa-solid fa-phone"></i>
                    Residential (BAPA) Php 11.8755 /kWh</li>
                    <li>  <i class="fa-solid fa-phone"></i>
                        Residential (Residential) Php 11.8755 /kWh</li>
            </li>
          </ul>
          <style>
            img {
              border-radius: 8px;
            }
            </style>
            </head>
            <body> 
            <img src="ss.png" alt="Paris" width="700" height="70">
            
            </body>
            </html>
          
            
                
        </div>
      </div>
      <div class="navigation">
        <a href="news3.html" class="next-page"></a> <!-- Right side clickable text -->
        <!-- Home -->
        <a href="frame-14.html" class="home-link">Home</a> <!-- Left side home link -->
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
