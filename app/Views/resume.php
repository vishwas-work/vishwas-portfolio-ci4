<?php
$this->extend('./layouts/layout.php');


$this->section('content'); ?>

<style>
    .resume-page {
        /* width: 763px; */
        margin: 20px;
    }

    .clearfix::after {
        display: block;
        clear: both;
        content: "";
    }

    #stellar-eastern-blue {
        background-color: #effcff;
        color: #000;
        font-size: 13px;
        font-family: "Inter", sans-serif;
        line-height: 1.3;
        padding: 10px;
    }

    #stellar-eastern-blue * {
        margin: 0;
        padding: 0;
    }

    #stellar-eastern-blue p:empty {
        height: 14px;
    }

    #stellar-eastern-blue a {
        color: #000;
    }

    #stellar-eastern-blue ul {
        margin: 0;
        margin-left: 15px;
        padding: 0;
    }

    #stellar-eastern-blue ul {
        list-style-type: disc;
    }

    #stellar-eastern-blue .summary-column {
        float: right;
        width: 250px;
        padding-left: 16px;
        margin-left: 16px;
        background-color: #effcff;
    }

    #stellar-eastern-blue .shifted-inside-list {
        margin-left: 20px;
    }

    #stellar-eastern-blue .list-style-none {
        list-style: none;
    }

    #stellar-eastern-blue .header-info {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 0 10px 0;
    }

    #stellar-eastern-blue .header-info .name-pic {
        display: flex;
        align-items: center;
        max-width: 80%;
        gap: 10px;
    }

    #stellar-eastern-blue .header-info .name-role {
        text-align: left;
    }

    #stellar-eastern-blue .header-info .name {
        font-size: 28px;
        line-height: 28px;
        font-weight: 700;
    }

    #stellar-eastern-blue .header-info .role {
        font-weight: 300;
        color: #21a199;
        font-size: 18px;
        text-align: left;
    }

    #stellar-eastern-blue .header-info .contact-info {
        max-width: 50%;
        text-align: right;
        display: flex;
    }

    #stellar-eastern-blue .header-info .contact-info ul {
        list-style-type: none;
    }

    #stellar-eastern-blue .header-info .contact-info ul li {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        margin-bottom: 5px;
    }

    #stellar-eastern-blue .header-info .contact-info img {
        background-color: #21a199;
        margin-left: 10px;
        padding: 2px;
        border-radius: 5px;
    }

    #stellar-eastern-blue .header-info .contact-info .email,
    #stellar-eastern-blue .header-info .contact-info .mobile {
        text-decoration: none;
    }

    #stellar-eastern-blue .prof-summary {
        margin: 10px 0;
        text-align: justify;
    }

    #stellar-eastern-blue .contact-info a {
        color: #000;
    }

    #stellar-eastern-blue section:not(:last-child) {
        margin-bottom: 20px;
    }

    #stellar-eastern-blue .work-exp .sidebar-line:last-child .work-experience-content .work-experience-set {
        padding-bottom: 0;
    }

    #stellar-eastern-blue .work-exp .job-role {
        font-size: 16px;
        font-weight: 700;
    }

    #stellar-eastern-blue .work-exp .company {
        font-size: 14px;
        font-weight: 600;
    }

    #stellar-eastern-blue .work-exp .duration {
        background-color: #21a199;
        padding: 5px 13px;
        color: #fff;
        font-size: 12px;
        margin-left: 30px;
    }

    #stellar-eastern-blue .career-timeline .job-role {
        font-size: 14px;
        font-weight: 500;
    }

    #stellar-eastern-blue .career-timeline .company {
        font-size: 12px;
    }

    #stellar-eastern-blue .section-title {
        text-transform: capitalize;
        border-bottom: 1px solid;
        margin-bottom: 10px;
        font-size: 18px;
        font-weight: 700;
        color: #21a199;
    }

    #stellar-eastern-blue .soft-skills-badge {
        list-style-type: none;
        margin: 0;
        display: flex;
        flex-wrap: wrap;
        row-gap: 2px;
        column-gap: 2px;
    }

    #stellar-eastern-blue .soft-skills-badge li {
        display: inline-block;
        background-color: #21a199;
        color: white;
        padding: 3px 5px;
        border-radius: 5px;
        margin-right: 3px;
    }

    #stellar-eastern-blue .skill-with-rating {
        display: flex;
        justify-content: space-between;
        gap: 5px;
    }

    #stellar-eastern-blue .skill-with-rating .name {
        display: inline-block;
    }

    #stellar-eastern-blue .skill-with-rating .stars {
        text-wrap: nowrap;
        white-space: nowrap;
        display: flex;
        column-gap: 2px;
    }

    #stellar-eastern-blue .skill-with-rating .stars img {
        width: 9px;
        height: 16px;
    }

    #stellar-eastern-blue .tech-skill ul {
        margin: 0;
        display: flex;
        flex-direction: column;
        row-gap: 2px;
    }

    #stellar-eastern-blue .edu .course,
    #stellar-eastern-blue .edu .inst,
    #stellar-eastern-blue .edu .duration {
        display: block;
    }

    #stellar-eastern-blue .edu .inst {
        color: #333333;
    }

    #stellar-eastern-blue .edu .course {
        font-weight: 700;
    }

    #stellar-eastern-blue .edu ul li {
        margin-bottom: 10px;
    }

    #stellar-eastern-blue .lang ul,
    #stellar-eastern-blue .hobbies ul {
        margin-left: 0;
        display: flex;
        flex-wrap: wrap;
        row-gap: 2px;
        column-gap: 2px;
    }

    #stellar-eastern-blue .lang ul li,
    #stellar-eastern-blue .hobbies ul li {
        display: inline-block;
        background-color: #21a199;
        color: #fff;
        padding: 3px 5px;
        border-radius: 5px;
    }

    #stellar-eastern-blue .project ul {
        margin-bottom: 10px;
    }

    #stellar-eastern-blue .project h3.title {
        font-weight: 600;
        font-size: 14px;
        text-align: left;
        color: #000;
    }

    #stellar-eastern-blue .project .item {
        display: block;
    }

    #stellar-eastern-blue .project .item:not(:last-child) {
        margin-bottom: 10px;
    }

    #stellar-eastern-blue .career-timeline-content {
        margin-bottom: 6px;
        position: relative;
    }

    #stellar-eastern-blue .career-timeline-content:last-child {
        margin-bottom: 0;
    }

    #stellar-eastern-blue .career-timeline-set {
        display: flex;
        align-items: center;
    }

    #stellar-eastern-blue .career-timeline-left,
    #stellar-eastern-blue .work-experience-date {
        display: flex;
        align-items: center;
        position: relative;
    }

    #stellar-eastern-blue .career-timeline-left::before,
    #stellar-eastern-blue .work-experience-date::before {
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

    #stellar-eastern-blue .career-sidebar {
        position: relative;
    }

    #stellar-eastern-blue .career-timeline-content::before,
    #stellar-eastern-blue .work-experience-set::before {
        content: "";
        width: 1px;
        height: 100%;
        position: absolute;
        left: 5px;
        top: 0;
        border-left: 2px dashed #21a199;
    }

    #stellar-eastern-blue .career-timeline-right {
        width: 65%;
        margin-left: 20px;
    }

    #stellar-eastern-blue .career-date {
        background-color: #21a199;
        padding: 5px;
        color: #fff;
        font-size: 12px;
        display: flex;
        justify-content: center;
        text-wrap: nowrap;
        width: 135px;
        margin-left: 30px;
    }

    #stellar-eastern-blue .career-timeline-right h6,
    #stellar-eastern-blue .work-experience-data h4 {
        font-size: 14px;
        margin: 0;
    }

    #stellar-eastern-blue .career-timeline-right p {
        font-size: 11px;
        color: #5c5c5c;
    }

    #stellar-eastern-blue .work-experience-set {
        position: relative;
        padding-bottom: 10px;
    }

    #stellar-eastern-blue .work-experience-data {
        padding-left: 30px;
        margin-top: 5px;
    }

    #stellar-eastern-blue .work-experience-data h4 {
        font-size: 18px;
    }

    #stellar-eastern-blue .work-experience-data h6 {
        font-size: 14px;
    }

    @media print {
        body {
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }
    }

    /*! CSS Used fontfaces */
    @font-face {
        font-family: "Inter";
        font-style: italic;
        font-weight: 100 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/inter/v18/UcCm3FwrK3iLTcvnUwkT9mI1F55MKw.woff2) format("woff2");
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F,
            U+FE2E-FE2F;
    }

    @font-face {
        font-family: "Inter";
        font-style: italic;
        font-weight: 100 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/inter/v18/UcCm3FwrK3iLTcvnUwAT9mI1F55MKw.woff2) format("woff2");
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: "Inter";
        font-style: italic;
        font-weight: 100 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/inter/v18/UcCm3FwrK3iLTcvnUwgT9mI1F55MKw.woff2) format("woff2");
        unicode-range: U+1F00-1FFF;
    }

    @font-face {
        font-family: "Inter";
        font-style: italic;
        font-weight: 100 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/inter/v18/UcCm3FwrK3iLTcvnUwcT9mI1F55MKw.woff2) format("woff2");
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1,
            U+03A3-03FF;
    }

    @font-face {
        font-family: "Inter";
        font-style: italic;
        font-weight: 100 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/inter/v18/UcCm3FwrK3iLTcvnUwsT9mI1F55MKw.woff2) format("woff2");
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1,
            U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329,
            U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: "Inter";
        font-style: italic;
        font-weight: 100 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/inter/v18/UcCm3FwrK3iLTcvnUwoT9mI1F55MKw.woff2) format("woff2");
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF,
            U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020,
            U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: "Inter";
        font-style: italic;
        font-weight: 100 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/inter/v18/UcCm3FwrK3iLTcvnUwQT9mI1F54.woff2) format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA,
            U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193,
            U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: "Inter";
        font-style: normal;
        font-weight: 100 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/inter/v18/UcCo3FwrK3iLTcvvYwYZ8UA3J58.woff2) format("woff2");
        unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F,
            U+FE2E-FE2F;
    }

    @font-face {
        font-family: "Inter";
        font-style: normal;
        font-weight: 100 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/inter/v18/UcCo3FwrK3iLTcvmYwYZ8UA3J58.woff2) format("woff2");
        unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
        font-family: "Inter";
        font-style: normal;
        font-weight: 100 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/inter/v18/UcCo3FwrK3iLTcvuYwYZ8UA3J58.woff2) format("woff2");
        unicode-range: U+1F00-1FFF;
    }

    @font-face {
        font-family: "Inter";
        font-style: normal;
        font-weight: 100 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/inter/v18/UcCo3FwrK3iLTcvhYwYZ8UA3J58.woff2) format("woff2");
        unicode-range: U+0370-0377, U+037A-037F, U+0384-038A, U+038C, U+038E-03A1,
            U+03A3-03FF;
    }

    @font-face {
        font-family: "Inter";
        font-style: normal;
        font-weight: 100 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/inter/v18/UcCo3FwrK3iLTcvtYwYZ8UA3J58.woff2) format("woff2");
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1,
            U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329,
            U+1EA0-1EF9, U+20AB;
    }

    @font-face {
        font-family: "Inter";
        font-style: normal;
        font-weight: 100 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/inter/v18/UcCo3FwrK3iLTcvsYwYZ8UA3J58.woff2) format("woff2");
        unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF,
            U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020,
            U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: "Inter";
        font-style: normal;
        font-weight: 100 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/inter/v18/UcCo3FwrK3iLTcviYwYZ8UA3.woff2) format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA,
            U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193,
            U+2212, U+2215, U+FEFF, U+FFFD;
    }

    .core-competencies-section {
        margin: 2rem 0;
        padding: 1.5rem;
        border-radius: 8px;
    }

    .competency-list {
        list-style-type: none;
        /* Remove default bullet points */
        padding: 0;
        margin: 0;
    }

    .competency-list li {
        margin: 0.5rem 0;
        color: #555;
        display: flex;
        align-items: center;
    }

    .competency-list li::before {
        content: "✓";
        /* Add a checkmark as a custom bullet */
        color: #007bff;
        /* Use a primary color for the bullet */
        margin-right: 0.5rem;
        font-weight: bold;
    }

    .uiBorder {
        margin-bottom: 1px !important;
    }

    /* General styling */
    .project {
        position: relative;
        padding-left: 20px;
    }

    /* Vertical dotted line */
    .project::before {
        content: "";
        position: absolute;
        left: 0;
        top: 40px;
        width: 2px;
        height: 100%;
        background: repeating-linear-gradient(to bottom,
                #6a11cb,
                #6a11cb 2px,
                transparent 2px,
                transparent 6px);
    }

    /* Dot at the start of each project */
    .item h3 {
        position: relative;
        padding-left: 20px;
    }

    .item h3::before {
        content: "";
        position: absolute !important;
        left: -24px !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
        width: 10px !important;
        height: 10px !important;
        background-color: #3573ff !important;
        border-radius: 50% !important;
    }

    /* Remove default list styling */
    .uiBorder {
        list-style-type: none;
        padding-left: 0;
    }

    .uiBorder li {
        margin-bottom: 10px;
    }

    .mr_item {
        margin-left: 20px !important;
    }
</style>
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- <button class="ph-eye">Print Resume</button> -->
<div class="border w-auto" id="previewContainer" style="padding: 10px;margin-top:100px;margin-bottom:50px;">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stellar Eastern Blue</title>

    <div id="stellar-eastern-blue" class="resume-page">
        <div class="header-info">
            <div class="name-pic">

                <div class="name-role">
                    <h2 class="name">SHIVSAMB VISHWAS</h2>
                    <h3 class="role">Sr. Full Stack Web Developer</h3>
                </div>
            </div>
            <div class="contact-info">
                <ul>

                    <li>
                        <a href="tel:9309125030" class="mobile">
                            9309125030
                        </a>
                        <img src="https://st-content.myoutspark.com/OUTSPARK_HTMLS/static/203/img/mobile.svg" alt="">
                    </li>

                    <li>
                        <a href="mailto:vishwas.dev.work@gmail.com" class="email">vishwas.dev.work@gmail.com</a>
                        <img src="https://st-content.myoutspark.com/OUTSPARK_HTMLS/static/203/img/email.svg" alt="">
                    </li>

                    <li>
                        <span>Pune, MH, India</span>
                        <img src="https://st-content.myoutspark.com/OUTSPARK_HTMLS/static/203/img/location.svg" alt="">
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/vishwas-shiv" style="text-decoration: none;">Linkedin</a>

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256" style="margin-left:5px;">
                            <g fill="none">
                                <rect width="256" height="256" fill="#fff" rx="60" />
                                <rect width="256" height="256" fill="#21a199" rx="60" />
                                <path fill="#fff" d="M184.715 217.685h29.27a4 4 0 0 0 4-3.999l.015-61.842c0-32.323-6.965-57.168-44.738-57.168c-14.359-.534-27.9 6.868-35.207 19.228a.32.32 0 0 1-.595-.161V101.66a4 4 0 0 0-4-4h-27.777a4 4 0 0 0-4 4v112.02a4 4 0 0 0 4 4h29.268a4 4 0 0 0 4-4v-55.373c0-15.657 2.97-30.82 22.381-30.82c19.135 0 19.383 17.916 19.383 31.834v54.364a4 4 0 0 0 4 4M38 59.628c0 11.864 9.767 21.626 21.632 21.626c11.862-.001 21.623-9.769 21.623-21.631C81.253 47.761 71.491 38 59.628 38C47.762 38 38 47.763 38 59.627m6.959 158.058h29.307a4 4 0 0 0 4-4V101.66a4 4 0 0 0-4-4H44.959a4 4 0 0 0-4 4v112.025a4 4 0 0 0 4 4" />
                            </g>
                        </svg>
                    </li>
                    <li>
                        <a href="https://github.com/vishwas-work" class="email">GitHub</a>
                        <i class="fa fa-github" aria-hidden="true" style="color: #21a199; margin-left: 10px; padding: 2px; border-radius: 5px; font-size: x-large;"></i>
                        <!--             <img src="https://st-content.myoutspark.com/OUTSPARK_HTMLS/static/203/img/git.svg" alt=""> -->
                    </li>
                </ul>
            </div>
        </div>

        <div class="summary-column">

            <section class="tech-skill">
                <h2 class="section-title">Technical Skills</h2>
                <ul class="skills-list">
                    <li><strong>Programming Languages:</strong> PHP,OOP, JavaScript (ES6+), HTML, CSS</li>
                    <li><strong>Frameworks & Tools:</strong> CodeIgniter 4, React, Node.js, Express.js, Redux Toolkit, jQuery, Bootstrap, Tailwind CSS</li>
                    <li><strong>Version Control:</strong> Git, GitHub</li>
                    <li><strong>Database Management:</strong> MySQL (Optimized Queries, Complex Joins)</li>
                    <li><strong>APIs:</strong> RESTful API design and implementation</li>
                    <li><strong>Testing:</strong> Unit Testing, Debugging, Integration Testing</li>
                    <li><strong>Deployment:</strong> Server Configuration, Application Hosting</li>
                </ul>
            </section>

            <section class="core-competencies-section">
                <h2 class="section-title">Core Competencies</h2>
                <ul class="competency-list">
                    <li>Full Stack Development</li>
                    <li>API Development & Integration</li>
                    <li>Database Management & Optimization (MySQL)</li>
                    <li>Scalable Architecture Design</li>
                    <li>Cross-Functional Collaboration</li>
                    <li>Responsive UI/UX Design</li>
                    <li>Problem Solving & Debugging</li>
                    <li>Continuous Learning & Adaptation</li>
                    <li>Client Interaction & Technical Support</li>
                </ul>
            </section>

            <section class="education-section">
                <h2 class="section-title">Education</h2>
                <ul class="education-list">
                    <li>
                        <strong>Bachelor of Engineering (BE) in Electronics and Telecommunication (E&TC)</strong><br>
                        JSPM Imperial College of Engineering and Research, Pune<br>
                        Savitribai Phule Pune University<br>
                        <span class="year">Graduated: November 2015</span>
                    </li>
                </ul>
            </section>

            <section class="certifications-section">
                <h2 class="section-title">Certifications</h2>
                <ul class="certifications-list">

                    <li>Object Oriented PHP & MVC <span>(Udemy)</span></li>
                    <li>Make a Spotify Clone from Scratch: JavaScript PHP and MySQL <span>(Udemy)</span></li>
                    <li>The Complete 2024 Web Development Bootcamp <span>(Udemy)</span></li>
                    <li>The Ultimate React Course 2024: React, Next.js, Redux & More<span>(Udemy)</span></li>
                </ul>
            </section>
            <br /><br />

        </div>
        <div class="detail-column">

            <section>
                <h2 class="section-title">Professional Summary</h2>
                <p>
                    Experienced Full Stack Web Developer with <strong>3.2 years</strong> of hands-on expertise in creating dynamic, user-friendly web applications. Highly skilled in <strong>PHP</strong>, <strong>JavaScript</strong>, <strong>React</strong>, <strong>Node.js</strong>, <strong>jQuery</strong>, and <strong>MySQL</strong>, with a strong focus on developing scalable architectures and integrating robust APIs.
                </p>

                <ul>
                    <li>Successfully developed and deployed <strong>6+ custom ERP systems</strong> and <strong>e-commerce platforms</strong>, driving business growth and improving operational efficiency for clients.</li>

                </ul>

            </section>

            <section class="work-exp">
                <h2 class="section-title">Work Experience</h2>

                <div class="sidebar-line">
                    <div class="work-experience-content">
                        <div class="work-experience-set">
                            <div class="work-experience-date">
                                <p class="duration">July 2021 - October 2024</p>
                            </div>

                            <div class="work-experience-data">
                                <h4 class="job-role">Full Stack Web Developer</h4>
                                <h6 class="company">Comzent Technologies Pvt. Ltd., Mumbai</h6>
                                <p style="color: darkkhaki;"><strong>Responsibilities:</strong></p>
                                <ul>
                                    <li>Collaborated with <b>designers, front-end developers, and project managers </b>to gather and translate functional requirements into technical 6+ web and ERP projects</li>
                                    <!--                   <li>Managed client communication, ensuring all deliverables met standards, guidelines, and deadlines with a 98% success rate.</li> -->
                                    <li>Building PHP <b>Websites And ERP </b> using PHP-based frameworks.</li>

                                    <li>Conducted rigorous testing and validation for <b>100% bug-free deployment,</b> ensuring high-quality deliverables..</li>
                                    <!--                   <li>Developing advanced database-driven websites and systems, including eCommerce platforms.</li> -->
                                    <li>Maintained and optimized back-end architecture using PHP and MySQL, achieving <b>20%</b> faster server response times.</li>
                                    <!--                   <li>Developing compatible user interface functionality using jQuery and other libraries.</li> -->
                                    <li>Building websites using <b> MySQL, PHP, Jquery, Javascript </b> and other programming tools.</li>

                                    <!--                   <li>Documenting features, technical specifications, and infrastructure requirements.</li> -->
                                    <!--                   <li>Collaborating with a multi-disciplinary team to convert business needs into technical specifications.</li> -->
                                </ul>

                                <p style="color: darkkhaki;"><strong>Key Skills and Competencies :</strong></p>
                                <ul>
                                    <li>Demonstrated ability to multi-task and prioritize effectively, ensuring timely project delivery.</li>
                                    <li>Proactive, confident, and with a <b>positive "can-do" attitude</b>.</li>
                                    <!--                   <li>Able to clearly communicate technical data to non-technical colleagues and clients.</li> -->
                                    <li>Continuously monitored industry trends to incorporate cutting-edge technologies and best practices.</li>

                                    <li>Excellent attention to detail in <b>both front-end and back-end development.</b></li>
                                    <li>Solid experience in Object-Oriented Programming (OOP), PHP, AJAX, MySQL, JavaScript, Node.js, React, HTML, and CSS.
                                    </li>
                                </ul>
                                <p style="color: darkkhaki;"><strong> Key Achievements :</strong></p>
                                <ul>
                                    <li>Successfully implemented secure API integrations for <b>5+ mobile apps,</b> ensuring seamless data synchronization.</li>
                                    <!--                   <li>Reduced website loading times by <b>30%</b> through front-end optimization and CDN integration.</li> -->
                                    <!--                   <li>Trained and mentored a team of <b>3 junior developers</b>, improving team productivity by 20%.</li> -->
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
                                <h6 class="company">HealthATM India Pvt. Ltd., Pune</h6>
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

            <section class="project">
                <h2 class="section-title" style="width: 500px;">Key Projects</h2>

                <span class="item mr_item">
                    <h3 style="font-size: larger;font-size: large; color: #0d6efd; font-weight: 600;">BCSTEP (Construction Industry ERP)</h3>
                    <p><strong>Purpose:</strong>A user-friendly ERP platform that simplifies construction management and improves teamwork among all project participants.</p>
                    <p><strong>Technologies Used:</strong> HTML, CSS, Bootstrap, JavaScript, jQuery, PHP, MySQL, CodeIgniter</p>
                    <p><strong>Action:</strong></p>
                    <ul>
                        <li>Developed and implemented front-end and back-end solutions to enhance usability and performance for the BCSTEP ERP platform.</li>
                        <li>Optimized database queries, improving data retrieval speed and reducing server load, resulting in higher system efficiency.</li>
                        <li>Integrated real-time data tracking for enhanced reporting and decision-making.</li>
                        <li>Developed automated alert systems to improve scheduling and quality control.</li>
                        <li>Led the integration of ProChat and ProCom for seamless communication among project stakeholders.</li>
                        <li>Integrated APIs for Android APK, enabling real-time data synchronization between the mobile app and ERP platform.</li>
                    </ul>
                    <p><strong>Result:</strong></p>
                    <ul>
                        <li>Increased system performance by <b>40%</b>, leading to faster data processing and better project tracking.</li>
                        <li>Enhanced communication and task management, reducing delays and improving coordination.</li>
                        <li>Improved real-time reporting, contributing to higher-quality project deliveries.</li>
                        <li>API integration enhanced the mobile user experience and data synchronization.</li>
                    </ul>
                    <p><strong>Project Link:</strong> <a href="https://www.bcstep.com" target="_blank">BCSTEP</a></p>
                </span>

                <span class="item mr_item">
                    <h3 style="font-size: larger;font-size: large; color: #0d6efd; font-weight: 600;">AMGOLD Bullion Platform (E-commerce Website)</h3>
                    <p><b>Purpose:</b> AMGOLD is a trusted and secure platform for purchasing gold. It offers a variety of gold-related products and services, both online and in physical stores, to ensure a seamless and joyful gold shopping experience.</p>
                    <p><b>Contributions:</b></p>
                    <ul>
                        <li>Integrated a user-friendly interface for managing B2B, B2C gold transactions.</li>
                        <li>Designed a secure and scalable platform for managing <b>1000+ daily</b> transactions, maintaining 99.9% uptime.</li>
                        <li>Integrated payment systems with SSL encryption, ensuring compliance and customer trust.</li>
                    </ul>
                    <p><b>Project Link:</b> <a href="https://amgold.in" target="_blank">AMGOLD</a></p>
                </span>

                <span class="item mr_item">
                    <h3 style="font-size: larger;font-size: large; color: #0d6efd; font-weight: 600;">Wonder Learning (Education ERP)</h3>
                    <p><b>Purpose:</b> Streamlined student management and administrative processes for educational institutions by Implementing scalable features like attendance tracking, timetable generation, and efficient record management using PHP, MySQL, Bootstrap, and jQuery.</p>
                    <p><b>Contributions:</b></p>
                    <ul>
                        <li>Optimized and maintained key features like attendance tracking and timetable generation.</li>
                        <li>Streamlined student and staff management processes for enhanced operational efficiency.</li>
                        <li>Improved data accuracy and reduced administrative overhead through automated record management systems.</li>
                        <li>Automated attendance tracking for<b> 1000+ students </b>across 5+ institutions, saving 2+ hours of administrative work weekly.</li>
                        <li>Improved data accuracy by <b>95%</b> through robust validation systems.</li>
                    </ul>
                    <p><b>Project Link:</b> <a href="https://wonderlearning.in" target="_blank">Wonder Learning</a></p>
                </span>

            </section>

        </div>
        <div class="clearfix"></div>
    </div>
    <span style="opacity: 0.01; position: absolute; pointer-events: none; font-size: 0px;">#CreatedByOutspark#</span>

</div>

<?php

$this->endSection();
?>