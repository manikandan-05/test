<?php 
include 'init.php'; 
if(!$users->isLoggedIn()) {
	header("Location: authenticate.php");	
}
include('inc/header.php');
$ticketDetails = $tickets->ticketInfo($_GET['id']);
$ticketReplies = $tickets->getTicketReplies($ticketDetails['id']);
$user = $users->getUserInfo();
$tickets->updateTicketReadStatus($ticketDetails['id']);
?>	
<title>Build Helpdesk System with PHP & MySQL</title>
<script src="js/general.js"></script>
<script src="js/tickets.js"></script>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<?php include('inc/container.php');?>
<style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        /* Header styling */
        #header {
            background-color: #1a4592;
            color: black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.6rem 15rem;
            position: fixed;
            width: 100%;
            top: -22px;
            left: 220px;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        #header .logo img {
          height: 50px;
          position: relative;
          right: 361px;
          top: 9px;
        }
        #header .user-profile {
            display: flex;
            align-items: center;
            position: relative;
            top: 11px;
            right: 89px;
            font-size: 1.6rem;
        }
        #header .profile-pic {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        #header .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        #header .user-profile:hover .dropdown-content {
            display: block;
        }
        #header .dropdown-content a {
            color: black;
            padding: 10px;
            text-decoration: none;
            display: block;
        }
        #header .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        /* Sidebar styling */
        /* Sidebar styling */
#sidebar {
    position: fixed; 
    top: 60px; 
    left: 0;
    height: calc(100% - 60px); 
    width: 200px; 
    background-color: #f4f4f4; 
    padding: 1.5rem;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); 
    overflow-y: auto; 
    z-index: 100; 
}
.sidebar-menu {
    max-height: calc(100% - 1rem); /* Adjust as needed */
}

#sidebar ul {
    list-style: none; /* Remove default list styles */
    padding: 0; /* Remove default padding */
    margin: 0; /* Remove default margin */
}

#sidebar ul li {
    margin-bottom: 10px; /* Space between menu items */
}
#sidebar a {
    text-decoration: none; /* Remove underline from links */
    color: black; /* Text color */
    display: flex; /* Flexbox for icon and text */
    align-items: center; /* Center vertically */
}
#sidebar a i {
    margin-right: 10px; /* Space between icon and text */
}

#sidebar ul li a {
    color: black;
    text-decoration: none;
    font-size: 1.6rem;
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
		.container{
			width: 1000px;
            max-width: 100%;
            position: relative;
            left: 5px;
    	    top: 23px;
		}

        h2 {
            /* text-align: center; */
            font-size: 2.5rem;
            margin-bottom: 2rem;
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
            background-color:black;
            color:  #fff;
        }
        .content-wrapper{
          width: 1043px;
          max-width: 108%;
          position: relative;
          left: 68px;
    	  top: 17px;
		  padding:15px;
          background-color:#d2d6de
        }

        .btn-reset {
            float: right;
            margin-right: 1rem;
        }
    </style>
</head>
<body>
  <header id="header">
        <div class="logo">
            <img src="img\logo-blue.png" alt="Company Logo">
        </div>
        <div class="user-profile">
		<img src="img\pic.jpg" alt="User Profile Picture" class="profile-pic">
		<div class="name">Ramesh P</div>
            <!-- <div class="dropdown-content">
                <a href="index.php">Logout</a>
            </div> -->
        </div>
    </header>

    <aside id="sidebar">
        <ul>
		<li id="ticket"><a href="ticket.php"><i class="fas fa-ticket-alt"></i> Ticket</a></li>
		<li id="department"><a href="department.php"><i class="fas fa-building"></i> Department</a></li>
		<li id="user"><a href="user.php"><i class="fas fa-users"></i> Users</a></li>
		<li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </aside>
	
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h2>
	  Ticket
      </h2>
    </section>

	<div class="container">
	<!-- <div class="row home-sections">
	<h2>View Ticket</h2>	
	</div>  -->
	
	<section class="comment-list">          
		<article class="row">            
			<div class="col-md-10 col-sm-10">
				<div class="panel panel-default arrow left">
					<div class="panel-heading right">
					<?php if($ticketDetails['resolved']) { ?>
					<button type="button" class="btn btn-danger btn-sm">
					  <span class="glyphicon glyphicon-eye-close"></span> Closed
					</button>
					<?php } else { ?>
					<button type="button" class="btn btn-success btn-sm">
					  <span class="glyphicon glyphicon-eye-open"></span> Open
					</button>
					<?php } ?>
					<span class="ticket-title"><?php echo $ticketDetails['title']; ?></span>
					</div>
					<div class="panel-body">						
						<div class="comment-post">
						<p>
						<?php echo $ticketDetails['message']; ?>
						</p>
						</div>                 
					</div>
					<div class="panel-heading right">
						<span class="glyphicon glyphicon-time"></span> <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> <?php echo $time->ago($ticketDetails['date']); ?></time>
						&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span> <?php echo $ticketDetails['creater']; ?>
						&nbsp;&nbsp;<span class="glyphicon glyphicon-briefcase"></span> <?php echo $ticketDetails['department']; ?>
					</div>
				</div>			 
			</div>
		</article>		
		
		<?php foreach ($ticketReplies as $replies) { ?>		
			<article class="row">
				<div class="col-md-10 col-sm-10">
					<div class="panel panel-default arrow right">
						<div class="panel-heading">
							<?php if($replies['user_type'] == 'admin') { ?>							
								<span class="glyphicon glyphicon-user"></span> <?php echo $ticketDetails['department']; ?>
							<?php } else { ?>
								<span class="glyphicon glyphicon-user"></span> <?php echo $replies['creater']; ?>
							<?php } ?>
							&nbsp;&nbsp;<span class="glyphicon glyphicon-time"></span> <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> <?php echo $time->ago($replies['date']); ?></time>							
						</div>
						<div class="panel-body">						
							<div class="comment-post">
							<p>
							<?php echo $replies['message']; ?>
							</p>
							</div>                  
						</div>
						
					</div>
				</div>            
			</article> 		
		<?php } ?>
		
		<form method="post" id="ticketReply">
			<article class="row">
				<div class="col-md-10 col-sm-10">				
					<div class="form-group">							
						<textarea class="form-control" rows="5" id="message" name="message" placeholder="Enter your reply..." required></textarea>	
					</div>				
			</div>
			</article>  
			<article class="row">
				<div class="col-md-10 col-sm-10">
					<div class="form-group">							
						<input type="submit" name="reply" id="reply" class="btn btn-success" value="Reply" />		
					</div>
				</div>
			</article> 
			<input type="hidden" name="ticketId" id="ticketId" value="<?php echo $ticketDetails['id']; ?>" />	
			<input type="hidden" name="action" id="action" value="saveTicketReplies" />			
		</form>
	</section>	
	<?php include('add_ticket_model.php'); ?>
</div>
<?php include('inc/footer.php');?>