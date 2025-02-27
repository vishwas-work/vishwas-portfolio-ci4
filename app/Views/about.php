<?php $this->extend('./layouts/layout.php');

$this->section('content');  ?>

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

    .about-container {
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        font-size: 36px;
        color: #007BFF;
    }

    p {
        font-size: 18px;
        line-height: 1.6;
        color: #555;
    }

    .highlight {
        font-weight: bold;
        color: #007BFF;
    }

    .skills {
        margin-top: 20px;
        list-style: none;
        padding: 0;
    }

    .skills li {
        margin-bottom: 10px;
        font-size: 18px;
    }

    .projects-link {
        color: #007BFF;
        text-decoration: none;
    }

    .projects-link:hover {
        text-decoration: underline;
    }
</style>


<div class="about-container" style="
    margin-top: 100px;
">
    <!-- <h1></h1> -->

    <h5 class="section-title">
        <iconify-icon icon="solar:plain-line-duotone" width="20" height="20" style="color: #db1c90"></iconify-icon> <mark>
            About Me</mark>
    </h5>


    <p>Hello! I’m <span class="highlight">Shivsamb Vishwas</span>, a passionate and experienced <span class="highlight">Full Stack Web Developer</span> with over 3.2 + years of hands-on experience in building dynamic, user-centric web applications. I specialize in creating scalable and efficient software solutions using technologies like <span class="highlight">PHP, JavaScript (ES6+), React, Node.js, MySQL</span>, and <span class="highlight">CodeIgniter 4</span>.</p>

    <p>Throughout my career, I’ve successfully developed and deployed <span class="highlight">6+ custom ERP systems</span> and <span class="highlight">e-commerce platforms</span>, working closely with clients to understand their needs and translating them into high-quality solutions. My primary goal is to deliver robust web applications that help businesses streamline operations, enhance user experiences, and drive growth.</p>

    <p>In my previous role at <span class="highlight">Comzent Technologies Pvt. Ltd.</span>, I collaborated with cross-functional teams, optimized back-end architecture, and integrated secure APIs, significantly improving performance and scalability. I have also built and maintained multiple websites and ERP solutions for various industries, including construction, education, and e-commerce.</p>

    <p>When I’m not coding, I enjoy <span class="highlight">learning new technologies</span> and staying up-to-date with industry trends. I believe in the power of <span class="highlight">continuous learning</span> and always strive to improve my skills and adapt to new challenges.</p>

    <p>Feel free to explore my <a href="#projects" class="projects-link">projects</a> below and get in touch if you’d like to collaborate or learn more about how I can help you bring your ideas to life!</p>


    <h5 class="section-title" style="margin-top: 20px;">
        <iconify-icon icon="solar:plain-line-duotone" width="20" height="20" style="color: #db1c90"></iconify-icon> <mark>
            Skills & Competencies</mark>
    </h5>

    <!-- <h2></h2> -->
    <ul class="skills">
        <li><span class="highlight">Full Stack Development</span></li>
        <li><span class="highlight">API Development & Integration</span></li>
        <li><span class="highlight">Database Management & Optimization (MySQL)</span></li>
        <li><span class="highlight">Scalable Architecture Design</span></li>
        <li><span class="highlight">Responsive UI/UX Design</span></li>
        <li><span class="highlight">Problem Solving & Debugging</span></li>
    </ul>
</div>




<?php

$this->endSection();
?>