<style>
	.logo {
    height: 50px;
    		position: relative;
    		right: 451px;
   			top: 9px;
}
.fixed-top {

            background-color:#1a4592;
            color: black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 15rem;
            position: fixed;
            width: 1116px;
            height:60px;
            left: 250px;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        
}
img {
    vertical-align: middle;
    border-style: none;
    left: -261px;
    position: relative;
}

a.nav-item {
    position: relative;
    display: block;
    padding: .75rem 1.25rem;
    margin-bottom: -1px;
    border: 1px solid rgba(0,0,0,.125);
    background-color: #000000c4;
    color: #989898;
    font-weight: 600;
    top: 88px;
}
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
    color: white;
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

<nav class="navbar navbar-light fixed-top bg-primary" style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
      <img src="vector (1).jpg"/>
  		</div>
      <div class="col-md-8 float-left text-white">
        <b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Recruitment Management System</b>
      </div>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>