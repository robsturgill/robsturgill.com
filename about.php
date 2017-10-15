<?php
  $current = 'about';
  $title = 'About';
  $description = 'I believe in finding simplicity in complexity.';
?>
<?php include_once('inc/header.php'); ?>

<body>
	<main>
   <div class="cd-index cd-main-content">

     <!-- Page Content -->
     <div id="page-content" class="light-content" data-bgcolor="#111" data-textcolor="#dd6d28">

      <div class="page-overlay from-bottom">
        <div class="animate-box-bottom"></div>
      </div>

      <?php include_once('inc/navigation.php'); ?>

      <!-- Main -->
      <div id="main">

        <!-- Hero Section -->
        <div id="hero">
          <div id="hero-styles" class="parallax-onscroll opacity-onscroll">
            <div id="hero-caption">
              <div class="inner text-align-center">
                <h1 class="hero-title">I believe in finding simplicity in complexity</h1>
                <div class="hero-subtitle">Great experiences should not be difficult.</div>
              </div>
            </div>
          </div>
        </div>
        <div id="hero-height" class="hidden"></div>
        <!--/Hero Section -->


        <div id="hero-image" class="hidden" style="background-image:url(/assets/img/about.jpg)">
         <div id="image-border-left"></div>
         <div id="image-border-right"></div>
       </div>


       <!-- Main Content -->
       <div id="main-content">


         <!-- Row -->
         <div class="vc_row small row_padding_top row_padding_bottom">
          <div class="container">
            <hr><hr><hr>

            <h2>My Story</h2>
            <p>Over 10 years of experience producing digital media, project management, and team management. UX design, front-end development, and cyber security allows me to bring unique perspectives. I'm a leader and a collaborator, adaptable with technology to new software and tools. I love what I do and lend my expertise to help build stronger teams, solutions and networks.</p>
            <hr><hr>

<?php /*
            <h3>As a UX / Information Architect</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis voluptatum, voluptatibus accusamus illum laborum. Facere veniam, dolor culpa fugiat odit perferendis veritatis fugit soluta asperiores, provident quisquam illum rem vero.</p>

            <h3>As a Web Designer / Developer</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis voluptatibus ad voluptas dolore obcaecati doloribus nam enim architecto libero ut rem tenetur, rerum iusto. Numquam voluptas, aperiam sit culpa excepturi.</p>

            <h3>As a Leader</h3>
            <p>Not everyone understand the difference between leadership and management but good leadership provides individuals with trust, empathy and support.</p>
            <hr><hr><hr>
*/?>

            <h3>Services</h3>
            <p>As a UX professional, skills and methods much like software change with time. I have used a range of tools over my career to complete tasks and have adapted with the environments. Here is my toolbox. <!-- Here’s a list of apps, services, tools, and methodologies I have used over time. --></p>
            <br>

            <h4>Toolbox</h4>
            <ul>
              <li>Affinity Diagrams, Card Sorting</li>
              <li>Empathy Maps, User Flows, Journey Maps</li>
              <li>HTML, CSS, Javascript</li>
              <li>Information Architecture</li>
              <li>Persona Development</li>
              <li>Photoshop/Illustrator/Sketch</li>
              <li>UX &amp; UI Design</li>
              <li>Usability &amp; Accessibility Protocols</li>
              <li>User Interviews, A/B Test, Click Tracking</li>
              <li>Web Analytics</li>
              <li>Wireframing, Prototyping</li>
            </ul>

<?php /*
            <div class="one_third">
              <div class="clapat-icon">
                <i class="fa fa-desktop" aria-hidden="true"></i>
              </div>

              <h6>Web Design</h6>
            </div>

            <div class="one_third">
              <div class="clapat-icon">
                <i class="fa fa-pencil" aria-hidden="true"></i>
              </div>

              <h6>Development</h6>
            </div>

            <div class=" one_third last">
              <div class="clapat-icon">
                <i class="fa fa-camera" aria-hidden="true"></i>
              </div>

              <h6>Photography</h6>
            </div>

            <div class="one_third">
              <div class="clapat-icon">
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
              </div>

              <h6>Marketing</h6>
            </div>

            <div class="one_third">
              <div class="clapat-icon">
                <i class="fa fa-bell-o" aria-hidden="true"></i>
              </div>

              <h6>Digital Strategy</h6>
            </div>

            <div class=" one_third last">
              <div class="clapat-icon">
                <i class="fa fa-cog" aria-hidden="true"></i>
              </div>

              <h6>Art Direction</h6>
            </div>
*/ ?>
            <hr><hr>

            <h3>Let's chat</h3>
            <p>If you'd like to talk about a new opportunity or consultation, let me know.</p>
            <a href="contact.php" class="ajax-link link" data-type="page-transition" ><span>Get in touch</span></a>

          </div>
        </div>
        <!--/Row -->

      </div>
      <!--/Main Content -->
    </div>
    <!--/Main -->

    <!-- Footer -->
    <footer class="hidden">
      <a id="page-action-holder" class="ajax-link" href="/" data-type="page-transition" data-tooltip="Back to Works" data-placement="right">
        <div id="backtoworks"><i class="fa fa-times" aria-hidden="true"></i></div>
      </a>

      <?php include_once('inc/footer.php'); ?>