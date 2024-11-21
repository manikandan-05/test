
<style>
</style>
<nav id="sidebar" class='mx-lt-5 bg-dark' >
		<style>
/* Sidebar styling */
#sidebar {
    position: fixed;
    top: 0px;
    left: 0;
    height: calc(100% - 60px);
    width: 200px;
    background-color: #fff;
    padding: 1rem;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    z-index: 100;
    color: white;
}

#sidebar ul {
    list-style-type: none;
    padding: 0;
}

#sidebar ul li {
    margin: 10px 0;
}

#sidebar ul li a {
    color: black;
    text-decoration: none;
    font-size: 1rem;
    padding: 10px;
    display: flex;
    align-items: center; /* Align text and icon vertically */
    border-radius: 5px;
    transition: background-color 0.3s;
}

#sidebar ul li a i {
    margin-right: 10px; /* Space between icon and text */
    min-width: 20px; /* Ensure all icons take the same space */
    text-align: center;
}

#sidebar ul li a:hover {
    background-color: #333;
    color: black;
}

/* Main content styling */
#main-content {
    margin-left: 220px;
    padding: 2rem;
    padding-top: 80px;
    background-color: #d2d6de;
    min-height: 100vh;
}

.container {
    width: 1000px;
    max-width: 100%;
    position: relative;
    left: -3px;
    top: 6px;
}

h2 {
    text-align: center;
    font-size: 2rem;
    margin-bottom: 1rem;
    color: #0A1172;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: #d2d6de;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 1rem;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #1a4592;
    color: #fff;
}

tr:hover {
    background-color: #f1f1f1;
}

.btn {
    display: inline-block;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 0.25rem;
    background-color: #28a745;
    color: #fff;
    text-decoration: none;
    text-align: center;
    margin: 1rem auto;
}

.btn:hover {
    background-color: black;
    color: #fff;
}

.btn-reset {
    float: right;
    margin-right: 1rem;
}

		</style>
		<div class="sidebar-list">

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=applications" class="nav-item nav-applications"><span class='icon-field'><i class="fa fa-user-tie"></i></span> Applications</a>	
				<a href="index.php?page=vacancy" class="nav-item nav-vacancy"><span class='icon-field'><i class="fa fa-list-alt"></i></span> Vacancy</a>	
				
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
				<a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i class="fa fa-cogs"></i></span> Settings</a>
				
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
