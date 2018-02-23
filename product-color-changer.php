<?php
  $title = 'Product Color Changer • Development';
  $description = 'Simple product colorizer using only 2 images and a canvas element.';
  $header_assets = '
    <link rel="stylesheet" href="/assets/src/colorizer/css/jquery.minicolors.css">
    <style>
      .canvas-wrap { position: relative;}
      #img1 {visibility: hidden;}
      #img1, #img2 { position: absolute; top: 0; left: 0; max-width: none; height: 500px !important;}
      #hue-change { display: none;}
      #color, input { visibility: hidden; }
      #browser-error { display: none;}
      #demo-container {position: relative; height: 500px;}
    </style>
    ';

  $footer_assets = '
    <!-- <script type="text/javascript" src="/assets/src/colorizer/js/jquery.minicolors.min.js"></script>
    <script type="text/javascript" src="/assets/src/colorizer/js/pixastic.custom.js"></script>
    <script type="text/javascript" src="/assets/src/colorizer/js/colorizer.js"></script> -->
  ';
?>
<?php include_once('inc/header.php'); ?>

<body class="hidden">
  <main>
    <div class="cd-index cd-main-content">

      <!-- Page Content -->
      <div id="page-content" class="dark-content" data-bgcolor="#fff" data-textcolor="#000">

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
                  <h1 class="hero-title">Simple Product Colorizer</h1>
                  <div class="hero-subtitle">Development</div>
                </div>
              </div>
            </div>
          </div>
          <div id="hero-height" class="hidden"></div>
          <!--/Hero Section -->

          <div id="hero-image" class="hidden" style="background-image:url(/assets/img/projects/product-color-changer/product-color-changer-hero.jpg);">
            <div id="image-border-left"></div>
            <div id="image-border-right"></div>
          </div>

          <!-- Main Content -->
          <div id="main-content">

            <!-- Row -->
            <div class="vc_row row_padding_top has-animation" data-delay="10">
              <div class="container">

                <div class="one_half has-animation" data-delay="100">
                  <h2>Two images, millions of color variations</h2>
                  <p>This color customizer uses a minimal amount of resources to generate color variations for a product image. My method generates images client-side resulting in fewer http requests and can cover most of the visible color spectrum using only 2 images. I developed this prototype to handle color customization only but more features could be added.</p>

                  <ol>
                    <li>Photo with the product in a gray tone.</li>
                    <li>Single color mask of the product</li>
                  </ol>

                  <a href="https://github.com/robsturgill/product-color-changer" rel="noopener noreferrer" class="link"><span>View the GitHub Repo <i class="fa fa-code-fork" aria-hidden="true"></i></span></a>
                </div>

                <div class="one_half last has-animation" data-delay="200">
                  <img src="/assets/img/projects/product-color-changer/product-color-changer-assets.jpg" alt="Product Customizer Assets">
                </div>
              </div>
            </div>

            <!-- Row -->
            <div class="vc_row text-align-center row_padding_top has-animation" data-delay="10">
              <div class="container">
                <div class="has-animation" data-delay="100">
                  <a href="/assets/src/colorizer/" target="_blank"><h2>Try the Demo</h2></a>
                  <!-- <div id="demo-container">
                    <div class="canvas-wrap">
                      <img id="img1" src="/assets/src/colorizer/img/product-mask.png" alt="product mask">
                      <img id="img2" src="/assets/src/colorizer/img/product-color.jpg" alt="product image">
                    </div>

                    <div>
                      <input id="hue-change" type="text" value="#ffffff">
                      <input id="color" type="text" value="#ffffff">
                      <input id="applyColor" type="button" value="Update Color">
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
            <!--/Row -->

            <div id="project-nav" class="has-animation" data-delay="100">
              <div class="nav-title">
                <a  class="ajax-link project-next" data-type="page-transition" href="/jhsm.php">next</a>
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
