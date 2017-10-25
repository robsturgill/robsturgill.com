<?php
  $title = 'Pixel Geek • Logo Design';
  $description = 'A graphic for the pixel workers and geeks.';
?>
<?php include_once('inc/header.php'); ?>

<body class="hidden">
  <main>
    <div class="cd-index cd-main-content">

      <!-- Page Content -->
      <div id="page-content" class="light-content" data-bgcolor="#7d42c1" data-textcolor="#fff">

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
                  <h1 class="hero-title">Pixel Geek</h1>
                  <div class="hero-subtitle">Logo Design</div>
                </div>
              </div>
            </div>
          </div>
          <div id="hero-height" class="hidden"></div>
          <!--/Hero Section -->

          <div id="hero-image" class="hidden" style="background-image:url(/assets/img/projects/pixel-geek/pixel-geek-bg-pattern.png); background-repeat: repeat;">
            <div id="image-border-left"></div>
            <div id="image-border-right"></div>
          </div>

          <!-- Main Content -->
          <div id="main-content">

            <!-- Row -->
            <div class="vc_row text-align-center row_padding_top has-animation" data-delay="10">
              <div class="container">

                <div class="one_half has-animation" data-delay="100">
                  <a href="/assets/img/projects/pixel-geek/pixel-geek-white.png" class="image-link"><img src="/assets/img/projects/pixel-geek/pixel-geek-white.png" alt="Pixel Geek Logo Variation"></a>
                </div>

                <div class="one_half last has-animation" data-delay="200">
                  <a href="/assets/img/projects/pixel-geek/pixel-geek-color.png" class="image-link"><img src="/assets/img/projects/pixel-geek/pixel-geek-color.png" alt="Pixel Geek Logo Variation"></a>
                </div>
              </div>
            </div>

            <!-- Row -->
            <div class="vc_row text-align-center has-animation" data-delay="10">
              <div class="container">
                <div class="has-animation" data-delay="100">
                  <a href="/assets/img/projects/pixel-geek/pixel-geek-black.png" class="image-link"><img src="/assets/img/projects/pixel-geek/pixel-geek-black.png" alt="Pixel Geek Logo Variation"></a>
                </div>

              </div>
            </div>
            <!--/Row -->

            <div id="project-nav" class="has-animation" data-delay="100">
              <div class="nav-title">
                <a class="ajax-link project-next" data-type="page-transition" href="/product-color-changer.php">next</a>
              </div>
              <div class="nav-project-title"><span>View portfolio</span></div>
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