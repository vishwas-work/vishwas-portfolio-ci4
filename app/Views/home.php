 <!-- start hero -->
 <?php $this->extend('layouts/layout.php'); ?>

 <?= $this->section('content'); ?>
 <style>
   mark {

     background-image: linear-gradient(120deg, rgba(255, 200, 53, 0.8) 0, rgb(55 255 141 / 80%) 100%);
     /* background-size: 100% 1.25em; */

   }

   .profileLogo {
     height: 518px;
     margin-top: 55px;
     margin-left: 84px;
   }

   .mb40 {
     margin-bottom: 40px !important;
   }

   .keyPoint {
     text-decoration: underline;
     font-size: medium;
   }

   .activeStab {
     background: bisque;
   }

   .nav-pills .nav-link.active .card {

     border-bottom: 9px solid #007bff !important;
     animation: blinkBorder 1s infinite;

   }

   .nav-pills .nav-link.active {
     background-color: #f8f8f800 !important;
   }

   .bd-example_nav {
     position: relative;
     padding: 1rem;
     margin: 1rem -.75rem 0;
     border: solid #dee2e6;
     border-width: 1px 0 0;
   }

   .bd-example {
     border: 3px solid papayawhip;
     padding: 20px;
   }

   p:empty {
     height: 14px;
   }

   ul {
     margin: 0;
     margin-left: 15px;
     padding: 0;
   }

   ul {
     list-style-type: disc;
   }

   section:not(:last-child) {
     margin-bottom: 20px;
   }

   .work-exp .sidebar-line:last-child .work-experience-content .work-experience-set {
     padding-bottom: 0;
   }

   .work-exp .job-role {
     font-size: 16px;
     font-weight: 700;
   }

   .work-exp .company {
     font-size: 14px;
     font-weight: 600;
   }

   .work-exp .duration {
     background-color: #21a199;
     padding: 5px 13px;
     color: #fff;
     font-size: 12px;
     margin-left: 30px;
   }

   .section-title {
     text-transform: capitalize;
     border-bottom: 1px solid;
     margin-bottom: 10px;
     font-size: 18px;
     font-weight: 700;
     color: #21a199;
   }

   .work-experience-date {
     display: flex;
     align-items: center;
     position: relative;
   }

   .work-experience-date::before {
     content: "";
     width: 12px;
     height: 12px;
     border-radius: 50%;
     position: absolute;
     top: 50%;
     transform: translateY(-50%);
     left: 0;
     background-color: #21a199;
   }

   .work-experience-set::before {
     content: "";
     width: 1px;
     height: 100%;
     position: absolute;
     left: 5px;
     top: 0;
     border-left: 2px dashed #21a199;
   }

   .work-experience-data h4 {
     font-size: 14px;
     margin: 0;
   }

   .work-experience-set {
     position: relative;
     padding-bottom: 10px;
   }

   .work-experience-data {
     padding-left: 30px;
     margin-top: 5px;
   }

   .work-experience-data h4 {
     font-size: 18px;
   }

   .work-experience-data h6 {
     font-size: 14px;
   }

   .skill-card {
     margin: 4px;
     padding: 8px;
     border: 1px solid indianred;
     border-radius: 8px;
     background: #fff;
     box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
     transition: transform 0.2s, box-shadow 0.2s;
   }

   .skill-card:hover {
     transform: translateY(-3px);
     box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
   }

   .thumb-md img,
   .thumb-md iconify-icon {
     height: 40px;
     width: 40px;
   }

   .progress-container {
     background: #fff;
     padding: 15px;
     border-radius: 8px;
     box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
     transition: transform 0.2s, box-shadow 0.2s;
   }

   .progress-container:hover {
     transform: translateY(-3px);
     box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
   }

   .progress-bar {
     font-weight: bold;
   }

   /* Icon Styling */
   .skill-icon {
     font-size: 22px;
     vertical-align: middle;
     margin-right: 8px;
   }

   mark {
     font-family: monospace !important;

     font-size: larger !important;
     color: black;
   }

   .ta {
     text-align: center !important;
   }

   .section-title {
     font-family: 'Poppins', sans-serif;
     /* Use a modern Google Font */
     font-size: 1.5rem;
     /* Adjust the size as needed */
     font-weight: 600;
     /* Semi-bold for emphasis */
     color: #333;
     /* Dark text color */
     display: flex;
     align-items: center;
     /* Align icon and text vertically */
     gap: 10px;
     /* Space between icon and text */
     margin-bottom: 1rem;
     /* Add some spacing below the heading */
   }



   /* Optional: Add a hover effect for interactivity */
   .section-title:hover {
     color: #db1c90;
     /* Change text color on hover */
     transition: color 0.3s ease;
     /* Smooth transition */
   }

   .section-title:hover mark {
     color: #333;
     /* Change mark text color on hover */
   }

   /* General Section Styling */
   .section {
     padding: 4rem 0;
   }

   .bg-light {
     background-color: #f8f9fa !important;
   }

   /* Section Title Styling */
   .section-title {
     font-family: 'Poppins', sans-serif;
     font-size: 1.75rem;
     font-weight: 600;
     color: #333;
     display: flex;
     align-items: center;
     gap: 10px;
     margin-bottom: 1.5rem;
   }

   .section-title mark {
     background-color: transparent;
     color: black;
     padding: 0;
     font-weight: 700;
   }

   /* Paragraph Styling */
   .text-muted {
     color: #6c757d !important;
     font-size: 1rem;
     line-height: 1.6;
   }

   /* Tab Navigation Styling */
   .nav-pills {
     background: #fff;
     border-radius: 10px;
     /* box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); */
     padding: 10px;
   }

   .nav-pills .nav-link {
     border-radius: 10px;
     transition: all 0.3s ease;
   }

   .nav-pills .nav-link.active {
     /* background-color: #db1c90 !important; */
     color: #fff !important;
   }

   .nav-pills .nav-link:not(.active):hover {
     background-color: rgba(219, 28, 144, 0.1);
   }

   /* Card Styling */
   .card {
     border: none;
     border-radius: 10px;
     transition: transform 0.3s ease, box-shadow 0.3s ease;
   }

   .card:hover {
     transform: translateY(-5px);
     box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
   }

   .card img {
     transition: transform 0.3s ease;
   }

   .card:hover img {
     transform: scale(1.1);
   }

   /* Work Experience Styling */
   .work-exp {
     margin-top: 2rem;
   }

   .sidebar-line {
     position: relative;
     padding-left: 30px;
     margin-bottom: 2rem;
   }

   .sidebar-line::before {
     content: '';
     position: absolute;
     left: 0;
     top: 0;
     width: 2px;
     height: 100%;
     /* background-color: #db1c90; */
   }

   .work-experience-date {
     font-weight: 500;
     color: #db1c90;
     margin-bottom: 0.5rem;
   }

   .work-experience-data h4 {
     font-size: 1.25rem;
     font-weight: 600;
     color: #333;
     margin-bottom: 0.5rem;
   }

   .work-experience-data h6 {
     font-size: 1rem;
     font-weight: 500;
     color: #6c757d;
     margin-bottom: 1rem;
   }

   .work-experience-data ul {
     padding-left: 20px;
     margin-bottom: 1.5rem;
   }

   .work-experience-data ul li {
     margin-bottom: 0.5rem;
     line-height: 1.6;
   }

   /* Responsive Adjustments */
   @media (max-width: 768px) {
     .section-title {
       font-size: 1.5rem;
     }

     .nav-pills {
       flex-direction: column;
     }

     .nav-pills .nav-link {
       margin-bottom: 10px;
     }
   }

   .talignStart {
     text-align-last: start;
   }
 </style>
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
 <section class="hero-one position-relative main-bg" id="home" style=" background-image: url(<?= base_url('assets/') ?>images/personal/main-bg.png); background-size: cover; background-position: center center; ">
   <div class="container">
     <div class="row align-items-center justify-content-center">
       <div class="col-lg-5 mx-auto mt-5">
         <img src="<?= base_url('assets/') ?>images/logos/ma.png" height="" alt="" class="img-fluid ml-lg-5 profileLogo" />
       </div>
       <!--end col-->
       <div class="col-lg-7 text-center px-0 px-xl-4 mt-5 mt-lg-0 pt-5 pt-lg-0">
         <h5 class="d-inline-block py-1 px-3 rounded text-muted font-secondary">
           Hi, Vishwas Shivsamb
         </h5>
         <h1 class="hero-title mb-4 font-secondary fo">
           I'm a Full Stack Developer specializing in
           <mark><span class="fw-medium typewrite" data-period="1500"
               data-type='["Web Development", "API Integration", "Database Design"]'></span></mark>
         </h1>

         <span class="wrap"></span>
         <div class="mb-5 mb-lg-0">
           <div class="d-inline-block">
             <a href="<?= base_url('/resumes/resume.pdf'); ?>" target='blank' class="btn btn-primary">Download CV</a>
           </div>
         </div>
       </div>
       <!--end col-->
     </div>
     <!--end row-->
   </div>
   <!-- end container -->
 </section>
 <!-- end hero -->
 <div class="position-relative">
   <div class="shape overflow-hidden text-white">
     <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
       <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
     </svg>
   </div>
 </div>
 <!-- start about -->
 <section class="" id="about">
   <div class="container">
     <div class="row align-items-center">


       <div class="col-12 mt-5 ta">
         <h5 class="section-title">
           <?= title_add_Icon(); ?> <mark>
             Personal Details</mark>
         </h5>
       </div>





       <div class="col-lg-6 align-self-center">
         <h5 class="fs-24 text-dark fw-medium">


           <!-- <?php echo title_add_Icon(); ?> -->
           <!-- <mark>Personal Details</mark> -->
         </h5>
         <h4 style="font-weight: 400; line-height: 1.6; color: #6c757d; margin-bottom: 1.5rem; font-size: 18px;">
           Experienced Full Stack Web Developer with expertise in PHP, JavaScript, MySQL,React,Nodejs, MVC (Model-View-Controller) architecture, ensuring clean, maintainable, and scalable code. I am passionate about building dynamic and user-friendly applications that drive business growth. I have professional experience working with ERP systems and e-commerce sites, using frameworks like CodeIgniter, Bootstrap, HTML, and CSS. My work also includes extensive use of jQuery for interactive user interfaces.
         </h4>
         <div class="social" style="display: flex; gap: 10px; margin-top: 1rem;">
           <a href="#" style="text-decoration: none; color: #333; transition: color 0.3s ease;">
             <i class="lab la-github github me-1" style="font-size: 24px;"></i>
           </a>
           <a href="#" style="text-decoration: none; color: #333; transition: color 0.3s ease;">
             <i class="lab la-twitter twitter me-1" style="font-size: 24px;"></i>
           </a>
           <a href="#" style="text-decoration: none; color: #333; transition: color 0.3s ease;">
             <i class="lab la-google google me-1" style="font-size: 24px;"></i>
           </a>
           <a href="#" style="text-decoration: none; color: #333; transition: color 0.3s ease;">
             <i class="lab la-linkedin-in linkedin me-1" style="font-size: 24px;"></i>
           </a>
         </div>
       </div>
       <!--end col-->
       <div class="col-lg-5 ms-auto align-self-center" style="margin-top: -50px;">
         <div class="mb-5 mb-lg-0">
           <p class="mb-2">
             <span class="personal-detail-title">
               <span class="iconify" data-icon="mdi:phone" class="me-2"></span> Phone Number
             </span>
             <span class="personal-detail-info">9309125030</span>
           </p>

           <p class="mb-2">
             <span class="personal-detail-title">
               <span class="iconify" data-icon="mdi:email" class="me-2"></span> Email ID
             </span>
             <span class="personal-detail-info">vishwas.work.dev@gmail.com</span>
           </p>

           <p class="mb-2">
             <span class="personal-detail-title">
               <span class="iconify" data-icon="mdi:map-marker" class="me-2"></span> Place
             </span>
             <span class="personal-detail-info">Pune, India</span>
           </p>

           <p class="mb-2">
             <span class="personal-detail-title">
               <span class="iconify" data-icon="mdi:briefcase" class="me-2"></span> Experience
             </span>
             <span class="personal-detail-info">3.2 Years</span>
           </p>

           <p class="mb-2">
             <span class="personal-detail-title">
               <iconify-icon icon="carbon:education" width="15" height="15" sstyle="color:rgb(38, 89, 53)"></iconify-icon> Education
             </span>
             <span class="personal-detail-info">Bachelor's in Electronics and Telecommunication</span>
           </p>


           <p class="mb-2">
             <span class="personal-detail-title">
               <iconify-icon icon="maki:college" width="15" height="15" style="color:rgb(38, 89, 53)"></iconify-icon> College
             </span>
             <span class="personal-detail-info">
               JSPM's Imperial College of Engineering and Research
               <a href="https://jspmicoer.edu.in/" target="_blank" class="ms-2">
                 <iconify-icon icon="akar-icons:link-out" width="15" height="15" style="color: #db1c90"></iconify-icon>
               </a>
             </span>
           </p>




         </div>
       </div>











       <div class="col-12 mt-5 ta">
         <h5 class="section-title">
           <?= title_add_Icon(); ?> <mark>
             Practical Expertise</mark>
         </h5>
       </div>










       <div class="col-12 mt-3">
         <div class="d-flex flex-wrap">
           <?php
            $skills = [
              ["PHP", "php.png", "3.2+"],
              ["MySQL", "mysql.png", "3.2+"],
              ["CodeIgniter 4", "codei2.png", "2+"],
              ["JavaScript", "JS.png", "3.2+"],
              ["jQuery", "jquery.png", "3.2+"],
              ["HTML", "vscode-icons:file-type-htmlhint", "3.2+"],
              ["CSS", "devicon:css3", "3.2+"],
              ["MVC Architecture", "mvc.webp", "3.2+"],
              ["RESTful APIs", "icon-park-outline:api", "3.2+"],
              ["Bootstrap", "bootstrap.svg", "3.2+"],
              ["Database Design", "devicon:azuresqldatabase", "3.2+"],
              ["Git", "akar-icons:github-fill", "3.2+"],
              // ["GitLab", "devicon:gitlab-plain", "2+"],
              ["Object-Oriented Programming (OOP)", "opps.webp", "3.2+"],
              ["PHPUnit", "unit.png", "2+"],

            ];

            ?>

           <?php foreach ($skills as $skill): ?>
             <div class="me-3 mb-3 card-bg rounded p-2 shadow-sm progress-container">
               <div class="d-flex align-items-center">
                 <div class="thumb-md d-flex justify-content-center align-items-center">
                   <?php if (str_contains($skill[1], '.png') || str_contains($skill[1], '.svg') || str_contains($skill[1], '.webp')): ?>
                     <img src="<?= base_url('assets/') ?>images/logos/<?= $skill[1] ?>" alt="<?= $skill[0] ?>" height="40" />
                   <?php else: ?>
                     <iconify-icon icon="<?= $skill[1] ?>" width="40" height="40"></iconify-icon>
                   <?php endif; ?>
                 </div>
                 <div class="ms-3">
                   <h6 class="mb-0 fw-medium text-gray-700"><?= $skill[0] ?></h6>
                   <p class="text-muted mb-0 fs-12"><?= $skill[2] ?> Years Experience</p>
                 </div>
               </div>
             </div>
           <?php endforeach; ?>
         </div>
       </div>




       <div class="col-12 mt-5 ta">
         <h5 class="section-title">
           <?= title_add_Icon(); ?> <mark>Ongoing Skills Development</mark>
         </h5>
       </div>

       <div class="row mt-3">
         <?php
          $ongoing_skills = [
            ["React", "logos:react", "#61DBFB", "80%"],
            ["Node.js", "devicon:nodejs", "#61DBFB", "70%", "bg-success"],
            ["MongoDB", "devicon:mongodb", "#4DB33D", "20%", "bg-warning"],
            ["Tailwind CSS", "logos:tailwindcss-icon", "#38BDF8", "40%"],
            ["Next.js", "devicon:nextjs", "#000000", "35%", "bg-warning"],
            ["Express.js", "logos:express", "#000000", "60%", "bg-danger"],




            ["NestJS", "skill-icons:nestjs-light", "#000000", "50%", "bg-danger"],
          ];
          ?>

         <?php foreach ($ongoing_skills as $skill): ?>
           <div class="col-md-4 mb-4">
             <div class="progress-container">
               <p>
                 <span class="iconify skill-icon" data-icon="<?= $skill[1] ?>" style="color: <?= $skill[2] ?>;"></span>
                 <?= $skill[0] ?>
               </p>
               <div class="progress mt-2">
                 <div class="progress-bar <?= $skill[4] ?? '' ?>" role="progressbar" style="width: <?= $skill[3] ?>;" aria-valuenow="<?= (int) $skill[3] ?>" aria-valuemin="0" aria-valuemax="100">
                   <?= $skill[3] ?>
                 </div>
               </div>
             </div>
           </div>
         <?php endforeach; ?>
       </div>
     </div>

     <!-- Column 2 -->

   </div>





























   </div>
   <!--end row-->
   </div>
   <!-- end container -->
 </section>



 <!-- start resume -->
 <section class="section bg-light py-5" id="resume">
   <div class="container">
     <div class="row mb-4 ">
       <div class="col-12 col-md-10 col-lg-7 text-center w-100">
         <!-- <span class="badge badge-lg rounded-pill bg-success text-white fw-normal fs-14 text-uppercase">Life Time</span> -->







         <h5 class="section-title">
           <iconify-icon icon="solar:plain-line-duotone" width="20" height="20" style="color: #db1c90"></iconify-icon> <mark> Education & Experience</mark>
         </h5>

         <p class="text-muted fs-6 mb-4 talignStart">
           Passionate Full-Stack Web Developer with 3.2 years of experience in building modern web applications.
         </p>
       </div>
     </div>


     <div class="bd-example bd-example-tabs">
       <ul class="nav nav-pills mb-3 d-flex w-100" id="pills-tab" role="tablist">











         <li class="nav-item flex-fill">
           <a class="nav-link active w-100" id="pills-experience-tab" data-bs-toggle="pill" href="#pills-experience" role="tab" aria-controls="pills-experience" aria-selected="false">
             <div class="card shadow-lg border-0">
               <div class="text-center">
                 <img src="<?= base_url('assets/') ?>images/personal/edu.gif" alt="Experience" height="100" class="mb-3">
                 <h4 class="fw-bold text-dark">Work Experience</h4>
               </div>
             </div>
           </a>
         </li>






         <li class="nav-item flex-fill">
           <a class="nav-link  w-100" id="pills-education-tab" data-bs-toggle="pill" href="#pills-education" role="tab" aria-controls="pills-education" aria-selected="true">
             <div class="card shadow-lg border-0">
               <div class="text-center">
                 <img src="<?= base_url('assets/') ?>images/personal/edu.webp" alt="Education" height="100" class="mb-3">
                 <h4 class="fw-bold text-dark">Education</h4>
               </div>
             </div>
           </a>
         </li>

       </ul>


       <div class="tab-content" id="pills-tabContent">

         <div class="tab-pane fade show active" id="pills-experience" role="tabpanel" aria-labelledby="pills-experience-tab">

           <section class="work-exp">
             <!-- <h2 class="section-title">Work Experience</h2> -->

             <div class="sidebar-line">
               <div class="work-experience-content">
                 <div class="work-experience-set">
                   <div class="work-experience-date">
                     <p class="duration">July 2021 - October 2024</p>
                   </div>

                   <div class="work-experience-data" style="font-size: medium;">
                     <h4 class="job-role">Full Stack Web Developer</h4>
                     <h6 class="company d-flex justify-content-between align-items-center">
                       <span>Comzent Technologies Pvt. Ltd., Mumbai</span>
                       <span class="badge text-white rounded-pill shadow-sm " style="background: linear-gradient(90deg, #ffc107, #ff9800);">
                         3.2 Years
                       </span>
                     </h6>
                     <p class="text-muted"><strong>Responsibilities:</strong></p>
                     <ul>
                       <li>Collaborated with <b>designers, front-end developers, and project managers </b>to gather and translate functional requirements into technical deliverables for 6+ web and ERP projects</li>
                       <!--                   <li>Managed client communication, ensuring all deliverables met standards, guidelines, and deadlines with a 98% success rate.</li> -->
                       <li>Building PHP <b>Websites And ERP </b> using PHP-based frameworks.</li>

                       <li>Conducted rigorous testing and validation for <b>100% bug-free deployment,</b> ensuring high-quality deliverables..</li>
                       <!--                   <li>Developing advanced database-driven websites and systems, including eCommerce platforms.</li> -->
                       <li>Maintained and optimized back-end architecture using PHP and MySQL, achieving <b>50%</b> faster server response times.</li>
                       <!--                   <li>Developing compatible user interface functionality using jQuery and other libraries.</li> -->
                       <li>Building websites using <b> MySQL, PHP, Jquery, Javascript </b> and other programming tools.</li>

                       <!--                   <li>Documenting features, technical specifications, and infrastructure requirements.</li> -->
                       <!--                   <li>Collaborating with a multi-disciplinary team to convert business needs into technical specifications.</li> -->
                     </ul>

                     <!-- <h3 class="key-skills"></h3> -->
                     <p class="text-muted"><strong>Key Skills and Competencies :</strong></p>
                     <ul>
                       <li>Demonstrated ability to multi-task and prioritize effectively, ensuring timely project delivery.</li>
                       <li>Proactive, confident, and with a <b>positive "can-do" attitude</b>.</li>
                       <!--                   <li>Able to clearly communicate technical data to non-technical colleagues and clients.</li> -->
                       <li>Continuously monitored industry trends to incorporate cutting-edge technologies and best practices.</li>

                       <li>Excellent attention to detail in <b>both front-end and back-end development.</b></li>
                       <li>Solid experience in Object-Oriented Programming (OOP), PHP, AJAX, MySQL, JavaScript, Node.js, React, HTML, and CSS.
                       </li>
                     </ul>
                     <!-- <h3 class="key-skills">Key Achievements :</h3> -->
                     <p class="text-muted" style="color: dodgerblue;"><strong>Key Achievements :</strong></p>
                     <ul>
                       <li>Successfully implemented secure API integrations for <b>5+ mobile apps,</b> ensuring seamless data synchronization.</li>
                       <!--                   <li>Reduced website loading times by <b>30%</b> through front-end optimization and CDN integration.</li> -->
                       <li>Trained and mentored a team of <b>3 junior developers</b>, improving team productivity by 20%.</li>
                     </ul>

                   </div>
                 </div>
               </div>
             </div>
             <div class="sidebar-line">
               <div class="work-experience-content">
                 <div class="work-experience-set">
                   <div class="work-experience-date">
                     <p class="duration">April 2018 – June 2021</p>
                   </div>

                   <div class="work-experience-data">
                     <h4 class="job-role">Installation Engineer</h4>
                     <h6 class="company d-flex justify-content-between align-items-center"><span> India Pvt. Ltd., Pune </span> <span class="badge text-white rounded-pill shadow-sm " style="background: linear-gradient(90deg, #ffc107, #ff9800);">
                         3.2 Years
                       </span></h6>
                     <ul>
                       <li>Deployed <b>100+ software installations</b> across diverse environments, ensuring 100% hardware-software integration.</li>
                       <li>Delivered training to 50+ clients, increasing user efficiency by 30% through clear instructions and post-installation support.</li>
                       <li>Built troubleshooting documentation, reducing on-site issue resolution time by 40%.</li>
                     </ul>
                   </div>
                 </div>
               </div>
             </div>

           </section>

         </div>

         <div class="tab-pane fade" id="pills-education" role="tabpanel" aria-labelledby="pills-education-tab">
           <section class="work-exp">

             <div class="sidebar-line">
               <div class="work-experience-content">
                 <!-- Engineering -->
                 <div class="work-experience-set">
                   <div class="work-experience-date">
                     <p class="duration">2015</p>
                   </div>
                   <div class="work-experience-data" style="font-size: medium;">
                     <h4 class="job-role">Bachelor of Engineering (Electronics & Telecommunication)</h4>
                     <h6 class="institution">jspm Imperial college of engineering Pune</h6>
                     <p class="text-muted"><strong>Details:</strong></p>
                     <ul>
                       <li>Graduated with a degree in Electronics & Telecommunication Engineering.</li>
                       <li><strong>Key Subjects:</strong> Digital Electronics, Communication Systems, Microprocessors, Signal Processing.</li>
                     </ul>
                   </div>
                 </div>
               </div>
             </div>

             <div class="sidebar-line">
               <div class="work-experience-content">
                 <!-- 12th Grade -->
                 <div class="work-experience-set">
                   <div class="work-experience-date">
                     <p class="duration">2010</p>
                   </div>
                   <div class="work-experience-data" style="font-size: medium;">
                     <h4 class="job-role">12th Grade</h4>
                     <h6 class="company">Kusum Tai Vidyalaya
                       CIDCO Nanded
                     </h6>
                     <p class="text-muted"><strong>Details:</strong></p>
                     <ul>
                       <li>Completed 12th in computer science</li>
                     </ul>
                   </div>
                 </div>
               </div>
             </div>

             <div class="sidebar-line">
               <div class="work-experience-content">
                 <!-- 10th Grade -->
                 <div class="work-experience-set">
                   <div class="work-experience-date">
                     <p class="duration">2008</p>
                   </div>
                   <div class="work-experience-data" style="font-size: medium;">
                     <h4 class="job-role">10th Grade</h4>
                     <h6 class="company">Godavari Vidyalaya Nanded</h6>
                     <p class="text-muted"><strong>Details:</strong></p>
                     <ul>
                       <li>Completed 10th grade with a focus on foundational education.</li>
                     </ul>
                   </div>
                 </div>
               </div>
             </div>




           </section>
         </div>



         <div class="tab-pane fade" id="pills-education" role="tabpanel" aria-labelledby="pills-education-tab">
           <section class="education">
             <div class="sidebar-line">
               <div class="education-content">
                 <!-- 10th Grade -->
                 <div class="education-set">
                   <div class="education-date">
                     <p class="duration p-2 rounded" style="background: linear-gradient(90deg, #ffc107, #ff9800); color: #fff;">
                       2008 - 2009
                     </p>
                   </div>
                   <div class="education-data">
                     <h4 class="degree">
                       <i class="fas fa-graduation-cap me-2"></i> <!-- Education icon -->
                       10th Grade
                     </h4>
                     <h6 class="institution">Bura Bhai College</h6>
                     <p class="text-muted">Completed 10th grade with a focus on foundational education.</p>
                   </div>
                 </div>

                 <!-- 12th Grade -->
                 <div class="education-set">
                   <div class="education-date">
                     <p class="duration p-2 rounded" style="background: linear-gradient(90deg, #ffc107, #ff9800); color: #fff;">
                       2010 - 2011
                     </p>
                   </div>
                   <div class="education-data">
                     <h4 class="degree">
                       <i class="fas fa-graduation-cap me-2"></i> <!-- Education icon -->
                       12th Grade
                     </h4>
                     <h6 class="institution">Mana College</h6>
                     <p class="text-muted">Completed 12th grade with a focus on science and mathematics.</p>
                   </div>
                 </div>

                 <!-- Engineering -->
                 <div class="education-set">
                   <div class="education-date">
                     <p class="duration p-2 rounded" style="background: linear-gradient(90deg, #ffc107, #ff9800); color: #fff;">
                       2011 - 2015
                     </p>
                   </div>
                   <div class="education-data">
                     <h4 class="degree">
                       <i class="fas fa-graduation-cap me-2"></i> <!-- Education icon -->
                       Bachelor of Engineering (Electronics & Telecommunication)
                     </h4>
                     <h6 class="institution">jspm Imperial college of engineering Pune</h6>
                     <p class="text-muted">Graduated with a degree in Electronics & Telecommunication Engineering.</p>
                     <p class="text-muted"><strong>Key Subjects:</strong></p>
                     <ul>
                       <li>Digital Electronics</li>
                       <li>Communication Systems</li>
                       <li>Microprocessors</li>
                       <li>Signal Processing</li>
                     </ul>
                   </div>
                 </div>
               </div>
             </div>
           </section>
         </div>




       </div>
     </div>


   </div>
 </section>

 <!-- end resume -->

 <div class="position-relative">
   <div class="shape overflow-hidden text-light">
     <svg viewBox="0 0 2880 150" fill="none" xmlns="http://www.w3.org/2000/svg">
       <path d="M110 105L2160 0H2880V150H0V105H110Z" fill="currentColor"></path>
     </svg>
   </div>
 </div>



 <section class="section bg-white py-5" id="projects">
   <div class="container">

     <div class="row mb-4 ">
       <div class="col-12 col-md-10 col-lg-7 text-center w-100">
         <!-- <span class="badge badge-lg rounded-pill bg-success text-white fw-normal fs-14 text-uppercase">Life Time</span> -->







         <h5 class="section-title">
           <iconify-icon icon="solar:plain-line-duotone" width="20" height="20" style="color: #db1c90"></iconify-icon> <mark> My Projects </mark>
         </h5>

         <p class="text-muted fs-6 mb-4 talignStart">
           A showcase of my work, including ERP systems and e-commerce platforms I have built and optimized.
         </p>
       </div>
     </div>

     <div class="row d-flex flex-nowrap g-3 overflow-auto py-3" style="scroll-snap-type: x mandatory;">
       <!-- Project 1 -->
       <div class="col-lg-6 col-md-6" style="flex: 0 0 auto; scroll-snap-align: start;">
         <div class="card rounded shadow border-0">
           <div class="card-body p-4">
             <div class="text-center mb-3">
               <img src="<?= base_url('assets/') ?>images/project/bcstep.webp" alt="CodeIgniter" class="thumb-md" style="width:150px;height:50px;" />
             </div>
             <h5 class="text-dark fs-18 fw-bold">BCSTEP - Construction Industry ERP</h5>
             <p class="text-muted fs-14 colorSub">A user-friendly ERP platform that simplifies construction management and teamwork.</p>
             <div class="mt-3">
               <h6 class="text-dark fw-bold keyPoint">Key Contributions:</h6>
               <ul class="text-muted fs-14">
                 <li>Developed and implemented front-end and back-end solutions.</li>
                 <li>Optimized database queries, improving performance by 40%.</li>
                 <li>Integrated real-time data tracking for reporting and decision-making.</li>
                 <li>Developed automated alert systems for scheduling and quality control.</li>
                 <li>Integrated APIs for Android APK synchronization.</li>
               </ul>
             </div>
             <p class="fs-14 text-primary"><a href="https://www.bcstep.com/" target="_blank">View Project <i class="ti ti-external-link fs-18"></i></a></p>
             <span class="badge bg-primary">PHP</span>
             <span class="badge bg-secondary">jQuery</span>
             <span class="badge bg-info">Bootstrap</span>
             <span class="badge bg-success">CSS</span>
             <span class="badge bg-warning">HTML</span>
             <span class="badge bg-danger">MySQL</span>
             <span class="badge bg-dark">CodeIgniter</span>
             <span class="badge bg-info">Git</span>
             <span class="badge bg-muted">OOP</span>
             <span class="badge bg-secondary">API</span>
             <span class="badge bg-info">Database Design</span>
           </div>
         </div>
       </div>

       <!-- Project 2 -->
       <div class="col-lg-6 col-md-6" style="flex: 0 0 auto; scroll-snap-align: start;">
         <div class="card rounded shadow border-0">
           <div class="card-body p-4">
             <div class="text-center mb-3">
               <img src="<?= base_url('assets/') ?>images/project/amrold.png" alt="E-Commerce" class="thumb-md" style="width:150px;height:50px;" />
             </div>
             <h5 class="text-dark fs-18 fw-bold">AMGOLD Bullion Platform</h5>
             <p class="text-muted fs-14 colorSub">A secure platform for purchasing gold, managing transactions efficiently.</p>
             <div class="mt-3">
               <h6 class="text-dark fw-bold keyPoint">Key Contributions:</h6>
               <ul class="text-muted fs-14">
                 <li>Developed a user-friendly interface for managing B2B and B2C transactions.</li>
                 <li>Designed a scalable platform handling 1000+ transactions daily.</li>
                 <li>Integrated payment systems with SSL encryption for security.</li>
               </ul>
             </div>
             <p class="fs-14 text-primary"><a href="https://amgold.in/" target="_blank">View Project <i class="ti ti-external-link fs-18"></i></a></p>
             <span class="badge bg-primary">PHP</span>
             <span class="badge bg-secondary">Bootstrap</span>
             <span class="badge bg-dark">CodeIgniter</span>
             <span class="badge bg-info">MySQL</span>
           </div>
         </div>
       </div>

       <!-- Project 3 -->
       <div class="col-lg-6 col-md-6" style="flex: 0 0 auto; scroll-snap-align: start;">
         <div class="card rounded shadow border-0">
           <div class="card-body p-4">
             <div class="text-center mb-3">
               <img src="<?= base_url('assets/') ?>images/project/womder.png" alt="Education" class="thumb-md" style="width:150px;height:50px;" />
             </div>
             <h5 class="text-dark fs-18 fw-bold">Wonder Learning - Education ERP</h5>
             <p class="text-muted fs-14 colorSub">An ERP system for schools with attendance tracking and timetable generation.</p>
             <div class="mt-3">
               <h6 class="text-dark fw-bold keyPoint">Key Contributions:</h6>
               <ul class="text-muted fs-14">
                 <li>Optimized attendance tracking and timetable generation features.</li>
                 <li>Streamlined student and staff management for operational efficiency.</li>
                 <li>Automated attendance tracking, saving 2+ hours of admin work weekly.</li>
                 <li>Improved data accuracy by 95% through robust validation systems.</li>
               </ul>
             </div>
             <p class="fs-14 text-primary"><a href="https://wonderlearning.in/" target="_blank">View Project <i class="ti ti-external-link fs-18"></i></a></p>
             <span class="badge bg-primary">PHP</span>
             <span class="badge bg-secondary">jQuery</span>
             <span class="badge bg-info">Bootstrap</span>
             <span class="badge bg-success">CSS</span>
             <span class="badge bg-warning">HTML</span>
             <span class="badge bg-danger">MySQL</span>
             <span class="badge bg-dark">CodeIgniter</span>
             <span class="badge bg-info">Git</span>
             <span class="badge bg-muted">OOP</span>
           </div>
         </div>
       </div>
       <!-- Project 3 -->

       <!-- Add more projects here -->
     </div>
   </div>
 </section>

 <script>
   //  const getFromObject = new ProfileSiteGlobalFunction();
   const profileSiteGlobalFunction = new ProfileSiteGlobalFunction();


   async function sendData(param) {
     // Use $(this) to refer to the clicked button
     let $this = $(param);

     let closerFrom = $this.closest('form');
     let name = closerFrom.find('#name').val();
     let email = closerFrom.find('#email').val();
     let message = closerFrom.find('#message').val();

     // Validate the form fields
     if (name == '' || email == '' || message == '') {
       profileSiteGlobalFunction.showAlert('error', 'Please fill all the fields');
       return false;
     }

     // Prepare the data
     let data = {
       name: name,
       email: email,
       message: message,
     };

     // Send the data to the server
     try {
       const response = await profileSiteGlobalFunction.sendPostRequest('sendMessage', data);

       if (response.status === 'success') {

       } else {
         profileSiteGlobalFunction.showAlert('error', response.message);
       }
     } catch (error) {
       console.error("Error:", error);
       profileSiteGlobalFunction.showAlert('error', 'An error occurred. Please try again.');
     }
   }
 </script>

 <!-- end contact us -->
 <?php $this->endSection(); ?>