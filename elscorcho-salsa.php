<?php
  $title = 'El Scorcho Salsa • Motion Graphics';
  $description = 'Motion graphics piece created for a class project.';
?>
<?php include_once('inc/header.php'); ?>

<body class="hidden">
  <main>
    <div class="cd-index cd-main-content">

      <!-- Page Content -->
      <div id="page-content" class="light-content" data-bgcolor="#151515" data-textcolor="#fff">

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
                  <h1 class="hero-title">El Scorcho Salsa</h1>
                  <div class="hero-subtitle">Motion Graphics</div>
                </div>
              </div>
            </div>
          </div>
          <div id="hero-height" class="hidden"></div>
          <!--/Hero Section -->

          <div id="hero-image" class="hidden" style="background-image:url(/assets/img/projects/elscorcho-salsa/elscorcho-salsa-hero.jpg)">
            <div id="image-border-left"></div>
            <div id="image-border-right"></div>
          </div>

          <!-- Main Content -->
          <div id="main-content">
            <!-- Row -->
            <div class="vc_row has-animation row_padding_top row_padding_bottom animate-in" data-delay="10">
              <div class="container">
                <div class=" one_third"><h2>After Effects Experiment</h2></div>
                <div class=" two_third last">
                  <p>This was one of my first experimental shorts created in After Effects back in 2006. Entire video was made from a series of still images and particle systems.</p>
                </div>
              </div>

              <div class="container">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-4by3">
                  <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/8791391" width="640" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
              </div>
            </div>


            <div id="project-nav" class="has-animation" data-delay="100">
              <div class="nav-title">
                <a  class="ajax-link project-next" data-type="page-transition" href="/hitman.php">next</a>
              </div>
              <div class="nav-project-title"><span>Hitman Poster</span></div>
            </div>



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