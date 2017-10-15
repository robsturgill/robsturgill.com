<?php
  $title = 'Marker Renders • Art Composition';
  $description = 'Created from markers, color pencils, and reference photography';
?>
<?php include_once('inc/header.php'); ?>

<body class="hidden">
  <main>
    <div class="cd-index cd-main-content">

      <!-- Page Content -->
      <div id="page-content" class="light-content" data-bgcolor="#9992ad" data-textcolor="#000000">

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
                  <h1 class="hero-title">Marker Renders</h1>
                  <div class="hero-subtitle">Art Composition</div>
                </div>
              </div>
            </div>
          </div>
          <div id="hero-height" class="hidden"></div>
          <!--/Hero Section -->

          <div id="hero-image" class="hidden" style="background-image:url(/assets/img/projects/marker-renders/marker-render-hero.jpg);">
            <div id="image-border-left"></div>
            <div id="image-border-right"></div>
          </div>

          <!-- Main Content -->
          <div id="main-content">

            <!-- Row -->
            <div class="vc_row text-align-center has-animation row_padding_top" data-delay="10">
              <div class="container">
                <div class="has-animation" data-delay="100">
                  <p>College project created using markers, colored pencils and reference photography.</p>
                </div>
              </div>
            </div>
            <!--/Row -->
            <!-- Row -->
            <div class="vc_row text-align-center row_padding_top has-animation" data-delay="10">
              <div class="container">
                <div class="has-animation" data-delay="100">
                  <a href="/assets/img/projects/marker-renders/marker-render.jpg" class="image-link"><img src="/assets/img/projects/marker-renders/marker-render.jpg" alt="Marker Renders"/></a>
                </div>
              </div>
            </div>

            <div id="project-nav" class="has-animation" data-delay="100">
              <div class="nav-title">
                <a  class="ajax-link project-next" data-type="page-transition" href="elscorcho-salsa.php">next</a>
              </div>
              <div class="nav-project-title"><span>El Scorcho Salsa</span></div>
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