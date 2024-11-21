<header class="main-header">
    <!-- Logo -->
    <a href="home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="<?php echo (!empty($user['SMALL_IMG.png'])) ? '../images/'.$user['SMALL_IMG.png'] : '../images/SMALL_IMG.png'; ?>" class="user-image" alt="User Image"></span>
      <!-- logo for regular state and mobile devices -->
      <img src="<?php echo (!empty($user['logo (1).png'])) ? '../images/'.$user['logo (1).png'] : '../images/logo (1).png'; ?>" class="user-image" alt="User Image">
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
          <div class="user-profile">
            <img src="../images/Ramesh.jpg" alt="" class="profile-pic">
            <div class="name">Ramesh P</div>
            <!-- <div class="dropdown-content">
                <a href="alogin.html">Logout</a>
            </div> -->
            <style>
              /* Navbar Styles */
.navbar-custom-menu {
    background-color: #343a40; /* Dark background for the navbar */
    padding: 10px;
}

.navbar-nav {
    list-style-type: none; /* Remove default list styling */
    margin: 0;
    padding: 0;
    display: flex; /* Use flexbox for alignment */
}

.navbar-nav li {
    position: relative; /* Positioning for dropdown */
    margin-right: 20px; /* Space between items */
}

/* User Profile Styles */
.user-profile {
    display: flex; /* Align items in a row */
    align-items: center; /* Center items vertically */
    color: #ffffff; /* Text color */
    cursor: pointer; /* Pointer on hover */
}

.profile-pic {
    width: 40px; /* Set profile picture size */
    height: 40px; /* Set profile picture size */
    border-radius: 50%; /* Make it circular */
    margin-right: 10px; /* Space between picture and name */
}

.name {
    font-size: 16px; /* Font size for user name */
    font-weight: bold; /* Make the name bold */
}

/* Dropdown Menu (if needed) */
.dropdown-content {
    display: none; /* Hidden by default */
    position: absolute; /* Positioned under the user profile */
    background-color: #ffffff; /* White background for dropdown */
    min-width: 160px; /* Minimum width for dropdown */
    z-index: 1; /* Ensure dropdown is above other content */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Shadow effect */
}

.user-menu:hover .dropdown-content {
    display: block; /* Show dropdown on hover */
}

/* Links in Dropdown */
.dropdown-content a {
    color: #343a40; /* Dark text color for links */
    padding: 12px 16px; /* Padding for links */
    text-decoration: none; /* Remove underline */
    display: block; /* Block display for full width */
}

.dropdown-content a:hover {
    background-color: #f1f1f1; /* Highlight on hover */
}

              </style>
        </div>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              <div class="user-profile">
            <img src="img/Ramesh.jpg" alt="User Profile Picture" class="profile-pic">
            <div class="name">Ramesh P</div>
            <!-- <div class="dropdown-content">
                <a href="alogin.html">Logout</a>
            </div> -->
        </div>

                <p>
                  <?php echo $user['firstname'].' '.$user['lastname']; ?>
                  <small>Member since <?php echo date('M. Y', strtotime($user['created_on'])); ?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">Update</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <?php include 'includes/profile_modal.php'; ?>