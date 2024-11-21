<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Human Resource Management System</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- fonts style -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="css/style.scss" rel="stylesheet" />
  <link rel="stylesheet" href="css/styles.scss" />
  <link rel="icon" type="images/png" href="images/favicon.png">

</head>

<body>

  <div class="overlay" id="loader">
        <div class="loader"></div>
    </div>
    <style>
      .loader {
            width: 50px;
            aspect-ratio: 1;
            display: grid;
            border: 4px solid #0000;
            border-radius: 50%;
            border-color: #ccc #0000;
            animation: l16 1s infinite linear;
        }
        .loader::before,
        .loader::after {    
            content: "";
            grid-area: 1/1;
            margin: 2px;
            border: inherit;
            border-radius: 50%;
        }
        .loader::before {
            border-color: #f03355 #0000;
            animation: inherit; 
            animation-duration: .5s;
            animation-direction: reverse;
        }
        .loader::after {
            margin: 8px;
        }
        @keyframes l16 { 
            100% { transform: rotate(1turn) }
        }

        /* Full Page Overlay Styles */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

    </style>
    <script>
        // JavaScript to hide the loader after 1 second
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('loader').style.display = 'none';
                document.getElementById('content').style.display = 'block';
            }, 50); // 1000 milliseconds = 1 second
        });
    </script>

  <div class="hero_areaa">
    <!-- header section strats -->
    <header class="headerr_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <img src="images\logo-blue.png" alt="Claidas__2_-removebg-preview.png" class="logo"/>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#About"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#OUR SERVICES">Services</a>
              </li>
           
              <li class="nav-item">
                <a class="nav-link" href="#Contact US">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index2.php">Demo login</a>
              </li>
            </ul>
            <div class="quote_btn-container">
              <form class="form-inline">
                <!-- <button class="btn   nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i> -->
                </button>
              </form>
    
                </span>
              </a>
            </div>
          </div>
        </nav>
      </div>
      <script>
        let lastScrollTop = 0;
        const header = document.querySelector('.header_section');
      
        window.addEventListener('scroll', function() {
          let scrollDown = window.pageYOffset || document.documentElement.scrollDown;
      
          if (scrollDown > lastscrollDown) {
            // Scrolling down
            header.style.down = '-100%'; // Adjust this value based on the height of your header
          } else {
            // Scrolling up
            header.style.down = '0';
          }
          lastScrollDown = scrollDown;
        });
      </script>
      </header>
      
      
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                   <h1 class="a">
                      EMPLOYEE MANAGEMENT
                    </h1>
                    <style> 
                      .a{
                        text-align: left;
                      }
                    </style>
                    <p>
                      An EMS automates HR tasks such as payroll and attendance boosting efficiency and accuracy. </p>
                    <div class="btn-box">
                      <a href="http://hrms.claidas.org/Main/Front/ems.html" class="btn-1">
                        Read More
                      </a>
                      <a href="#Contact US" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/slider-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                     <h1 class="a">
                      ATTENDANCE MANAGEMENT
                    </h1>
                    <p>An Attendance Management System tracks clock-IN/OUT and absences ensuring accurate attendance records. </p>
                    <div class="btn-box">
                      <a href="http://hrms.claidas.org/Main/Front/ATTENDANCE%20SYSTEM.html" class="btn-1">
                        Read More
                      </a>
                      <a href="#Contact US" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/slider-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1 class="a">
                      LEAVE MANAGEMENT
                    </h1>
                    <p>
                      A Leave Management System automates leave requests and tracks balances simplifying leave administration. </p>
                    <div class="btn-box">
                      <a href="http://hrms.claidas.org/Main/Front/LEAVE%20MANAGEMENT.html" class="btn-1">
                        Read More
                      </a>
                      <a href="#Contact US" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/slider-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                   <h1 class="a">
                      RECRUITMENT MANAGEMENT
                    </h1>
                    <p>
                     A Recruitment Management System streamlines candidate tracking automates notifications and provides actionable insights to optimize hiring. </p>
                    <div class="btn-box">
                      <a href="http://hrms.claidas.org/Main/Front/Recruitment%20Management%20System.html" class="btn-1">
                        Read More
                      </a>
                      <a href="#Contact US" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/slider-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                   <h1 class="a">
                      SUPPORT
                    </h1>
                    <p>
                      A support automates support tasks like ticket tracking and issue resolution enhancing efficiency and organization. </p>
                    <div class="btn-box">
                      <a href="http://hrms.claidas.org/Main/Front/ADMIN%20DASHBOARD.html" class="btn-1">
                        Read More
                      </a>
                      <a href="#Contact US" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/slider-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                   <h1 class="a">
                      PAYROLL MANAGEMENT
                    </h1>
                    <p>
                      A Payroll Management System automates salary calculations and deductions ensuring accurate and timely payments.</p>
                    <div class="btn-box">
                      <a href="http://hrms.claidas.org/Main/Front/payroll%20system.html" class="btn-1">
                        Read More
                      </a>
                      <a href="#Contact US" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/slider-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- service section -->

 

  <!-- end contact section -->
  <section id="OUR SERVICES">
    <br>
    <br>
    <h2>OUR SERVICES</h2>
  
        <style>
          h2 {
             color: #03a7d3; 
      font-weight: bold;
    text-align: center;
   
    margin-bottom: 20px;
}

/* Paragraph styling */
p {
    margin-bottom: 15px;

    
}

/* Section styling */
.intro {

    padding: 40px 20px;
    border-radius: 8px;

}
        </style>
    </section>
    
  <div class="container-01">
  <div class="neumorphic-card">
    <div class="imgBox">
      <i class="fa fa-users"></i> <!-- Employee Management Icon -->
    </div>
    <div class="contentBox">
      <h3>EMPLOYEE MANAGEMENT</h3>
      <p>Integrates and optimizes employee data management, payroll, and performance evaluation...</p>
      <a href="http://hrms.claidas.org/Main/Employee/alogin.html"><span>Login</span></a>
    </div>
  </div>
  <div class="neumorphic-card">
    <div class="imgBox">
      <i class="fa fa-clock"></i> <!-- Attendance Management Icon -->
    </div>
    <div class="contentBox">
      <h3>ATTENDANCE MANAGEMENT</h3>
      <p>Automates the tracking and reporting of employee attendance, including work hours and leave...</p>
      <a href="http://hrms.claidas.org/Main/Payroll_and_Attendance_system/admin/"><span>Login</span></a>
    </div>
  </div>
  <div class="neumorphic-card">
    <div class="imgBox">
      <i class="fa fa-file-invoice-dollar"></i> <!-- Payroll Management Icon -->
    </div>
    <div class="contentBox">
      <h3>PAYROLL<br>MANAGEMENT</h3>
      <p>Automates salary processing, including calculations, deductions, and payslip generation...</p>
      <a href="http://hrms.claidas.org/Main/Payroll_and_Attendance_system/admin/"><span>Login</span></a>
    </div>
  </div>
</div>

<section>
  <div class="container-01">
    <div class="neumorphic-card">
      <div class="imgBox">
        <i class="fa fa-chart-pie"></i> <!-- Report and Analysis Icon -->
      </div>
      <div class="contentBox">
        <h3>RECRUITMENT<br>MANGEMENT</h3>
        <p> Recruitment Management streamlines job postings, candidate selection, and onboarding to optimize hiring </p>
        <a href="http://hrms.claidas.org/Main/Recruitment_Management_System/admin/login.php"><span>Login</span></a>
      </div>
    </div>
    <div class="neumorphic-card">
      <div class="imgBox">
        <i class="fa fa-calendar-check"></i> <!-- Leave Management Icon -->
      </div>
      <div class="contentBox">
        <h3>LEAVE MANAGEMENT</h3>
        <p>Streamlines the process of requesting, approving, and tracking employee leave...</p><br>
        <a href="http://hrms.claidas.org/Main/Leave/admin/"><span>Login</span></a>
      </div>
    </div>
    <div class="neumorphic-card">
      <div class="imgBox">
        <i class="fa fa-headset"></i> <!-- Helpdesk Icon -->
      </div>
      <div class="contentBox">
        <h3>SUPPORT</h3>
        <p>Manages support requests and tickets, streamlining issue resolution and enhancing customer service efficiency...</p>
        <a href="http://hrms.claidas.org/Main/Support/login.php"><span>Login</span></a>
      </div>
    </div>
  </div>
</section>

<!-- Include Font Awesome library if you haven't already -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</section>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

  h1 {
    text-align: center;
  }

  .container-01 {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    background: #f8f8f8;
    padding: 20px;
  }

  .neumorphic-card {
    width: 90%;
    max-width: 320px;
    height: auto;
    margin: 20px 0;
    padding: 40px 30px;
    border-radius: 40px;
    box-shadow: -6px -6px 20px rgb(181 161 161), 6px 6px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
  }

  .neumorphic-card:hover {
    box-shadow: inset -6px -6px 10px rgba(255, 255, 255, 0.5),
                inset 6px 6px 20px rgba(0, 0, 0, 0.05);
  }

  .imgBox {
    width: 100px;
    height: 100px;
    background: rgba(255, 255, 255, 0.4); /* Glass effect */
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(10px); /* Glass effect */
    box-shadow: -4px -4px 15px rgba(255, 255, 255, 0.5),
                4px 4px 15px rgba(0, 0, 0, 0.1);
    margin: 0 auto 20px; /* Centering the imgBox */
  }

  .imgBox i {
    font-size: 40px; /* Smaller icon size */
    color: #32a3b1;
  }

  .contentBox {
    text-align: center; /* Centering text */
  }

  .contentBox h3 {
    color: #32a3b1;
    font-weight: 700;
    letter-spacing: 2px;
    font-size: 1.4em;
  }

  .contentBox p {
    color: #17202a;
  }

  .contentBox a {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 15px;
    border-radius: 40px;
    color: #32a3b1;
    font-size: 16px;
    text-decoration: none;
    box-shadow: -4px -4px 15px rgba(255, 255, 255, 1),
                4px 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
  }

  .contentBox a:hover {
    box-shadow: inset -4px -4px 10px rgba(255, 255, 255, 0.5),
                inset 4px 4px 10px rgba(0, 0, 0, 0.1);
    transform: scale(0.98);
  }

  @media (min-width: 768px) {
    .container-01 {
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-around;
    }

    .neumorphic-card {
      width: 30%;
      margin: 20px;
    }
  }
</style>
  </section>
  <br>
  <br>
   <section id="About">
    <h1 class="abt">ABOUT US</h1>
 <style>
   .abt{
    color:#03a7d3;
   }
 </style>
 <!-- Custom CSS -->
 <style>
   

    .card-slider-container {
      position: relative;
      overflow: hidden;
    }

    .slider-wrapper {
      display: flex;
      gap: 2rem;
      transition: transform 0.5s ease-in-out;
    }

    .slider-card {
      position: relative;
      width: 400px;
      height: 500px;
      border-radius: 15px;
      overflow: hidden;
      background: #fff;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      transform: scale(0.9);
      transition: transform 0.3s ease;
    }

    .slider-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .slider-card:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    }

    .card-content {
      padding: 1rem;
      text-align: center;
    }

    .card-title {
      font-size: 1.25rem;
      margin-bottom: 0.5rem;
      color: #333;
    }

    .card-text {
      font-size: 0.95rem;
      color: #555;
    }

    .slider-controls {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 100%;
      display: flex;
      justify-content: space-between;
    }

    .slider-controls button {
      background: #007bff;
      color: #fff;
      border: none;
      padding: 0.5rem 1rem;
      border-radius: 50%;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .slider-controls button:hover {
      background: #0056b3;
    }
  </style>

  <div class="container my-5">
    <!-- <h2 class="text-center mb-4">Innovative Card Slider</h2> -->
    <!-- <div class="card-slider-container"> -->
      <!-- Slider Wrapper -->
      <div id="slider" class="slider-wrapper">
        <!-- Card 1 -->
        <div class="slider-card">
          <img src="images/IT Service.jpg" alt="Card 1">
          <div class="card-content">
            <h2 class="card-title">IT Services</h2>
            <p class="card-text">Unlock the power of your data with our cutting-edge Cloud, AI and Data analytics Services. Our team of experts is dedicated to revolutionizing the way you leverage your data, providing tailored solutions to meet your specific needs.</p>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="slider-card">
          <img src="images/CaaS.jpg" alt="Card 2">
          <div class="card-content">
            <h2 class="card-title">Cloud Services</h2>
            <p class="card-text">We are fully customizable to cater to your specific needs. Whether you require public, private, or hybrid cloud solutions, Our goal is to provide you with the flexibility, scalability, and security to drive innovation and efficiency.</p>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="slider-card">
          <img src="images/Area of Expertise.jpg" alt="Card 3">
          <div class="card-content">
            <h2 class="card-title">Area of expertise</h2>
            <p class="card-text">Our comprehensive IT products and services, designed to streamline operations and drive growth in today's digital landscape. From cutting-edge software solutions to expert IT consulting, we're here to support your success</p>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="slider-card">
          <img src="images/CBSE-sft-skills-development-jpg.webp" alt="Card 4">
          <div class="card-content">
            <h2 class="card-title">Skill Hub</h2>
            <p class="card-text">Revolutionize your workforce with our HTD solutions, simplifying the entire process from recruitment to deployment. Our comprehensive approach ensures seamless transitions and maximizes the impact of team from day one.</p>
          </div>
        </div>
      </div>
      <!-- Slider Controls -->
      <!-- <div class="slider-controls">
        <button id="prevButton">‹</button>
        <button id="nextButton">›</button>
      </div> -->
    </div>
  </div>

  <!-- JavaScript -->
  <script>
    const slider = document.getElementById("slider");
    const prevButton = document.getElementById("prevButton");
    const nextButton = document.getElementById("nextButton");

    let currentIndex = 0;

    function updateSlider() {
      const offset = -currentIndex * 320; // Card width + gap
      slider.style.transform = `translateX(${offset}px)`;
    }

    prevButton.addEventListener("click", () => {
      currentIndex = (currentIndex - 1 + slider.children.length) % slider.children.length;
      updateSlider();
    });

    nextButton.addEventListener("click", () => {
      currentIndex = (currentIndex + 1) % slider.children.length;
      updateSlider();
    });
  </script>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap");
  h1 {
  text-align: center;


}

.timeline {
  --col-gap: 2rem;
  --row-gap: 2rem;
  --line-w: 0.25rem;
  display: grid;
  grid-template-columns: var(--line-w) 1fr;
  grid-auto-columns: max-content;
  column-gap: var(--col-gap);
  width: min(60rem, 90%);
  margin-inline: auto;
  position: relative;
}

/* line */
.timeline::before {
  content: "";
  grid-column: 1;
  grid-row: 1 / span 20;
  background: rgb(225, 225, 225);
  border-radius: calc(var(--line-w) / 2);
}

/* columns*/

/* row gaps */
.timeline .event:not(:last-child) {
  margin-bottom: var(--row-gap);
}

/* card */
.timeline .event {
  grid-column: 2;
  --inlineP: 1.5rem;
  margin-inline: var(--inlineP);
  grid-row: span 2;
  display: grid;
  grid-template-rows: min-content min-content min-content;
}

/* date */
.timeline .event .date {
  --dateH: 3rem;
  height: var(--dateH);
  margin-inline: calc(var(--inlineP) * -1);

  text-align: center;
  background-color: var(--accent-color);

  color: white;
  font-size: 1.25rem;
  font-weight: 700;

  display: grid;
  place-content: center;
  position: relative;

  border-radius: calc(var(--dateH) / 2) 0 0 calc(var(--dateH) / 2);
}

/* date flap */
.timeline .event .date::before {
  content: "";
  width: var(--inlineP);
  aspect-ratio: 1;
  background: var(--accent-color);
  background-image: linear-gradient(rgba(0, 0, 0, 0.2) 100%, transparent);
  position: absolute;
  top: 100%;

  clip-path: polygon(0 0, 100% 0, 0 100%);
  right: 0;
}

/* circle */
.timeline .event .date::after {
  content: "";
  position: absolute;
  width: 2rem;
  aspect-ratio: 1;
  background: var(--bgColor);
  border: 0.3rem solid var(--accent-color);
  border-radius: 50%;
  top: 50%;

  transform: translate(50%, -50%);
  right: calc(100% + var(--col-gap) + var(--line-w) / 2);
}

/* title descr */
.timeline .event .title,
.timeline .event .descr {
  background: #e5e8e8;
  position: relative;
  padding-inline: 1.5rem;
}
.timeline .event .title {
  overflow: hidden;
  padding-block-start: 1.5rem;
  padding-block-end: 1rem;
  font-weight: 500;
}
.timeline .event .descr {
  padding-block-end: 1.5rem;
  font-weight: 300;
}

/* shadows */
.timeline .event .title::before,
.timeline .event .descr::before {
  content: "";
  position: absolute;
  width: 90%;
  height: 0.5rem;
  background: rgba(0, 0, 0, 0.5);
  left: 50%;
  border-radius: 50%;
  filter: blur(4px);
  transform: translate(-50%, 50%);
}
.timeline .event .title::before {
  bottom: calc(100% + 0.125rem);
}

.timeline .event .descr::before {
  z-index: -1;
  bottom: 0.25rem;
}

@media (min-width: 40rem) {
  .timeline {
    grid-template-columns: 1fr var(--line-w) 1fr;
  }
  .timeline::before {
    grid-column: 2;
  }
  .timeline .event:nth-child(odd) {
    grid-column: 1;
  }
  .timeline .event:nth-child(even) {
    grid-column: 3;
  }

  /* start second card */
  .timeline .event:nth-child(2) {
    grid-row: 2/4;
  }

  .timeline .event:nth-child(odd) .date::before {
    clip-path: polygon(0 0, 100% 0, 100% 100%);
    left: 0;
  }

  .timeline .event:nth-child(odd) .date::after {
    transform: translate(-50%, -50%);
    left: calc(100% + var(--col-gap) + var(--line-w) / 2);
  }
  .timeline .event:nth-child(odd) .date {
    border-radius: 0 calc(var(--dateH) / 2) calc(var(--dateH) / 2) 0;
  }
}

.credits {
  margin-top: 1rem;
  text-align: right;
}
.credits a {
  color: var(--color);
}
</style>
</section>
<br>
<br>
<br>


<section class="wrap bg_light brdr_top brdr_bot">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    <div class="heading_container heading_center">
                            <h2>Latest View<span></span></h2>
                            <div class="heading_line"></div>
                        </div>
                        <p>At our core, we treat every client as if they are the only one we work with. This philosophy has been a game changer for us. We firmly believe that if our clients don’t succeed, we don’t succeed. Embracing the challenges our clients present is what makes our work enjoyable. We are passionate about creating the competitive edge they need to thrive in their respective industries.</p>
                        <br>
                        <p>Below are some examples of client projects that illustrate how we have delivered a distinct advantage over their competition. Through our technical expertise and deep industry knowledge, we have empowered our clients to achieve exceptional results. </p>      
                        <br>                  
                        <a href="#OUR SERVICES" class="btn btn-primary hvr-sweep-to-right"> Explore our work </a>
                    </div>
                    <div class="col-md-6">
                        <div class="laptop_floating" >
                            <img src="images/dashboard.png" class="img-fluid" alt="laptop"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>

<section class="client_section "><br><br> 
    <div class="container">
      <div class="heading_container heading_center">
        <h2>TESTIMONIAL</h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Vaidyanathan
                          </h5>
                          <h6>
                            Founder and CEO
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                        "I found Claidas exactly when I started exploring HR tools and services for our operations. As a startup founder, I was spending considerable time managing attendance, leave, and payroll records. Claidas brought a new level of transparency to our HR processes. The setup was simple and well-guided, and I particularly valued the detailed information available within the application about HR procedures."  

                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Natarajan
                          </h5>
                          <h6>
                            CEO, Bhumi
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                        We take great pride in our collaboration with Claidas, which has been exceptionally valuable in optimizing our HRMS operations. For a small NGO like ours, having a unified platform to manage employee records and authorization has been invaluable. This support has greatly enhanced our efforts to establish our organization as an efficient institution.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="box">
                    <div class="img-box">
                      <img src="" alt="">
                    </div>
                    <div class="detail-box">
                      <div class="client_info">
                        <div class="client_name">
                          <h5>
                            Hari Krishnan
                          </h5>
                          <h6>
                            CEO,Bluet Consultancy
                          </h6>
                        </div>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </div>
                      <p>
                        We are extremely satisfied and pleased to have found Claidas as our HRMS partner. During our partnership, Claidas has developed a profound understanding of our distinct vision and workflows, seamlessly integrating with our operations without causing any interruptions or difficulties on our part.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="rectangle-35"></div>
    <div class="companies-that-trust-us">
      <h2>OUR VALUABLES</h2>
    </div>
  
    <!-- Logo section -->
    <div class="logo-slider">
      <div class="slide-track">
        <!-- Original slides -->
        <div class="slide"><img src="vector0.svg" alt="Vector 1" /></div>
        <div class="slide"><img src="vector1.svg" alt="Vector 2" /></div>
        <div class="slide"><img src="vector2.svg" alt="Vector 3" /></div>
        <div class="slide"><img src="vector3.svg" alt="Vector 4" /></div>
        <div class="slide"><img src="vector5.svg" alt="Vector 6" /></div>
        <div class="slide"><img src="vector8.svg" alt="Vector 7" /></div>
        <div class="slide"><img src="images/2lyHifRoWwc1UK3jst2QKkTjeyL.svg" alt="Vector 9" /></div>
        <div class="slide"><img src="vector11.svg" alt="Vector 10" /></div>
        <div class="slide"><img src="images/vector6 (1).svg" alt="Vector 11" /></div>
        <div class="slide"><img src="images/microsoft-azure.svg" alt="Vector 12" /></div>
        <!-- Duplicated slides for seamless scrolling -->
        <div class="slide"><img src="vector0.svg" alt="Vector 1" /></div>
        <div class="slide"><img src="vector1.svg" alt="Vector 2" /></div>
        <div class="slide"><img src="vector2.svg" alt="Vector 3" /></div>
        <div class="slide"><img src="vector3.svg" alt="Vector 4" /></div>
        <div class="slide"><img src="vector5.svg" alt="Vector 6" /></div>
        <div class="slide"><img src="vector8.svg" alt="Vector 7" /></div>
        <div class="slide"><img src="2lyHifRoWwc1UK3jst2QKkTjeyL.svg" alt="Vector 9" /></div>
        <div class="slide"><img src="vector11.svg" alt="Vector 10" /></div>
        <div class="slide"><img src="vector6 (1).svg" alt="Vector 11" /></div>
        <div class="slide"><img src="microsoft-azure.svg" alt="Vector 12" /></div>
      </div>
    </div>
  
    <style>
      .rectangle-35 {
        height: 10px;
        background-color: #f0f0f0;
        margin-bottom: 20px;
      }
  
      h2 {
        font-weight: bold;
        margin: 0;
        text-align: center;
        padding-bottom: 20px;
        color:#03a7d3;
      }
  
      .logo-slider {
        width: 100%;
        overflow: hidden;
        background-color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
      }
  
      .slide-track {
        display: flex;
        align-items: center;
        width: 200%; /* Ensure enough space to accommodate all slides */
        animation: scroll 10s linear infinite; /* Adjust speed as needed */
      }
  
      .slide {
        flex: 0 0 auto;
        margin: 0 30px; /* Adjust spacing */
      }
  
      .slide img {
        width: 250px; /* Adjust logo size */
        height: auto;
        
      }
  
      @keyframes scroll {
        0% {
          transform: translateX(0);
        }
        100% {
          transform: translateX(-50%); /* Adjust based on the number of slides */
        }
      }
  
      @media (max-width: 768px) {
        .slide img {
          width: 150px;
        }
      }
  
      @media (max-width: 480px) {
        .slide img {
          width: 100px;
        }
      }
    </style>
  </section>

<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  /* Frame and Centering */
  .frame-47243 {
    background: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 10px; /* Reduced padding */
  }

  .frame-47244 {
    max-width: 1280px;
    width: 100%;
    position: relative;
  }

  .rectangle-35 {
    background: #f8f8f8;
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: -1;
  }

  /* Text Styling */
  .companies-that-trust-us {
    text-align: center;
    font-family: "Quicksand-SemiBold", sans-serif;
    font-size: 2rem;
    font-weight: 600;
    margin-bottom: 10px; /* Reduced margin */
    color: #000;
  
    }

  .ellipse-1303 {
    background: #273458;
    border-radius: 50%;
    width: 300px;
    height: 300px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
  }

  ._100 {
    font-size: 2rem;
    font-weight: 600;
    color: #ffffff;
  }

  .happy-businesses {
    font-size: 1.5rem;
    font-weight: 600;
    color: #ffffff;
  }

  /* Image Styling */
  .png-clipart-accenture-new-logo-icons-logos-emojis-iconic-brands-removebg-preview-1 {
    width: 180px;
    height: auto;
    margin: 20px auto;
    display: block;
  }

  /* Logos Styling */
  .logo-wrapper {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    margin-top: 10px; /* Reduced margin */
  }

  .vector {
    width: 10%;
    height: auto;
  }

  /* Responsive Media Queries */
  @media (max-width: 1024px) {
    .ellipse-1303 {
      width: 250px;
      height: 250px;
    }

    .companies-that-trust-us {
      font-size: 1.75rem;
    }

    ._100 {
      font-size: 1.5rem;
    }

    .happy-businesses {
      font-size: 1.2rem;
    }

    .png-clipart-accenture-new-logo-icons-logos-emojis-iconic-brands-removebg-preview-1 {
      width: 140px;
    }

    .vector {
      width: 15%;
    }
  }

  @media (max-width: 768px) {
    .ellipse-1303 {
      width: 200px;
      height: 200px;
    }

    .companies-that-trust-us {
      font-size: 1.5rem;
    }

    ._100 {
      font-size: 1.25rem;
    }

    .happy-businesses {
      font-size: 1rem;
    }

    .png-clipart-accenture-new-logo-icons-logos-emojis-iconic-brands-removebg-preview-1 {
      width: 120px;
    }

    .vector {
      width: 20%;
    }
  }

  @media (max-width: 480px) {
    .ellipse-1303 {
      width: 150px;
      height: 150px;
    }

    .companies-that-trust-us {
      font-size: 1.25rem;
    }

    ._100 {
      font-size: 1rem;
    }

    .happy-businesses {
      font-size: 0.9rem;
    }

    .png-clipart-accenture-new-logo-icons-logos-emojis-iconic-brands-removebg-preview-1 {
      width: 100px;
    }

    .vector {
      width: 25%;
    }
  }
</style>


  <!-- contact us-->

  <section id="Contact US" class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <br>
          <h2 class="heading-section">CONTACT US</h2>
        </div>
      </div>
            <div class="row no-gutters">
              <div class="col-md-7">
                <div class="contact-wrap w-100 p-md-5 p-4">
                  <!-- <h3 class="mb-4">Connect with us.... </h3> -->
                  <div id="form-message-warning" class="mb-4"></div> 
                  <div id="form-message-success" class="mb-4">
                                    </div>
                  <form action="process_form2.php" method="POST" id="contactForm" name="contactForm" class="contactForm">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label" for="name">Full Name</label>
                          <input type="text" class="form-control" id="name" name="name" required placeholder="Name">
                        </div>
                      </div>
                    <div class="col-md-6"> 
                      <div class="form-group">
                        <label class="label" for="email">Email Address</label>
                                            <input type="email" class="form-control" id="mail_id" name="mail_id" required placeholder="Email">
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label class="label" for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject" name="subject" required placeholder="Subject">
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <label class="label" for="#">Message</label>
                                            <textarea type="text" class="form-control" id="message" cols="30" rows="4" name="message" required cols="30" rows="4" placeholder="Message"></textarea>
                                          </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-group">
                                            <input type="submit" value="Send Message" class="btn btn-primary">
                                            <div class="submitting"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                </div>
              </div>
              <div class="col-md-5 d-flex align-items-stretch">
                <div class="bo">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31110.854131578006!2d80.20712511113742!3d12.91692604316093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525c8abb78969b%3A0x3c0283a1565689bc!2sKarapakkam%2C%20Chennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1725513799383!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <style>
                      .bo{
                        position: relative;
                        width: 500px;
                        height: 500px;
                        border-radius: 60px;
                        right:30px;
                        top:20px;
                      }
                    </style>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- info section -->
  
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="https://maps.app.goo.gl/2kFJhGfvk79e4sM8A">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="tel:+9500127110   ">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +91 9500127110               </span>
              </a>
              <a href="mailto:connect@claidas.com">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  connect@claidas.com
                </span>
              </a>
            </div>
          </div>
         <div class="info_social">
            <!--a href="#">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="#">
                <i class="fab fa-twitter"></i>
            </a>-->
            <a href="https://www.linkedin.com/company/claidas-tech/">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://www.instagram.com/claidas_technologies/profilecard/?igsh=MXY4NWJybHM1MjlnNQ==">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
        <style>
           .info_social {
            display: flex;
            gap: 10px; /* Adjust spacing between icons */
        }
        .info_social a {
            color: #000; /* Icon color */
            font-size: 24px; /* Adjust icon size */
            text-decoration: none; /* Remove underline */
        }
        .info_social a:hover {
            color: #007bff; /* Change color on hover */
        } 

        </style>
        </div>
        <div class="col-md-3">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="index.php">
                <img src="images/nav-bullet.png" alt="">
                Home
              </a>
              <a class="" href="#About">
                <img src="images/nav-bullet.png" alt="">
                About
              </a>
              <a class="" href="#OUR SERVICES">
                <img src="images/nav-bullet.png" alt="">
                Services
              </a>
             
              <a class="" href="#Contact US">
                <img src="images/nav-bullet.png" alt="">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              Specializing in Cloud, AI, and Data Analytics, our experts deliver cost-effective, powerful solutions across industries, helping clients unlock data’s potential to transform their business models.
              </p>
          </div>
        </div>
        <div class="col-md-3 mb-0">
        <h4>Subscribe</h4>
<script>
    function goToNewPage(event) {
        // Prevent default form submission initially
        // event.preventDefault();
        
        // // Get the email input field
        // var emailInput = document.getElementById("emailInput");

        // // Check if the input is valid and not empty
        // if (emailInput.checkValidity()) {
        //     // Redirect to the new page if email is valid
            window.location.href = "frontend.html";
        // } else {
        //     // Trigger form validation
        //     emailInput.reportValidity();
        // }
    }
</script>

<form action="process_form.php" id="emailInput" method="POST">
<input type="email" id="Subscribed" name="Subscribed" placeholder="Enter Email" required><br><br>
<button type="submit" value="Submit" onclick="goToNewPage()">Subscribe</button>
</form>
<!-- <div id="emailInput" style="display: none; margin-top: 10px; color:white;">
Thanks for subscribing!!!
</div> -->
</div>
<script>
  document.getElementById('subscribeForm').addEventListener('submit', function(event) {
    // Check if the form is valid before proceeding
    if (!this.checkValidity()) {
      event.preventDefault(); // Prevent form submission if the input is invalid
      return;
    }
    
    event.preventDefault(); // Prevent the default form submission
    
    // Display the notification message
    const notification = document.getElementById('notificationMessage');
    notification.style.display = 'block';
    
    // Hide the notification message after 5 seconds (5000 milliseconds)
    setTimeout(function() {
      notification.style.display = 'none';
    }, 5000);
    
    // Optionally, you can clear the input field after submission
    document.getElementById('emailInput').value = '';
  });
</script>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://claidas.com/">Claidas Technologies</a>
      </p>
    </div>
  </footer>

  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>