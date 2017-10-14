<?php
  $title = 'First Sip • Art Composition';
  $description = 'Vector illustration created from a photo.';
?>
<?php include_once('inc/header.php'); ?>

<body class="hidden">
  <main>
    <div class="cd-index cd-main-content">

      <!-- Page Content -->
      <div id="page-content" class="dark-content" data-bgcolor="#e1c8b4" data-textcolor="#701715">

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
                  <div class="hero-title">First Sip</div>
                  <div class="hero-subtitle">Art Composition</div>
                </div>
              </div>
            </div>
          </div>
          <div id="hero-height" class="hidden"></div>
          <!--/Hero Section -->

          <div id="hero-image" class="hidden" style="background-image:url(/assets/img/projects/drpepper/destiny-drpepper-thumb.jpg)">
            <div id="image-border-left"></div>
            <div id="image-border-right"></div>
          </div>

          <!-- Main Content -->
          <div id="main-content">
            <!-- Row -->
            <div class="vc_row has-animation text-align-center row_padding_top row_padding_bottom animate-in" data-delay="10">

              <div class="container">
                <h2>Vector Illustration</h2>
                <img src="/assets/img/projects/drpepper/destiny-drpepper-vector-illustration.jpg" alt="Dr. Pepper First Sip">
                <img src="/assets/img/projects/drpepper/destiny-drpepper-progress-wireframe.jpg" alt="Art Wireframe">
              </div>
            </div>
            <!--/Row -->


            <div id="project-nav" class="has-animation" data-delay="100">
              <div class="nav-title">
                <a  class="ajax-link project-next" data-type="page-transition" href="nashsauto.php">next</a>
              </div>
              <div class="nav-project-title"><span>Nash's Auto</span></div>
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