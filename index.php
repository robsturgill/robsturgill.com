<?php
$current = 'home';
$title = 'Rob Sturgill - UX Director • Strategy • Design • Development';
$description = 'Creating lasting impressions though inspiration so people together, can create better experiences.';
?>
<?php include_once('inc/header.php'); ?>







<body class="hidden">

  <main>
    <div class="cd-index cd-main-content">

      <!-- Page Content -->
      <div id="page-content" class="" data-bgcolor="#fff" data-textcolor="#000" data-portfoliocolor="#ccc">
        <div class="page-overlay from-bottom">
          <div class="animate-box-bottom"></div>
        </div>


        <?php include_once('inc/navigation.php'); ?>


        <!-- Portfolio Filters -->
        <div class="page-action-overlay">
          <div class="outer">
            <div class="inner">
              <div class="close-page-action"></div>
              <ul id="filters">
                <li><a id="all" href="#" data-filter="*" class="active">All</a><span>05</span></li>
                <li><a href="#" data-filter=".branding">Branding</a><span>01</span></li>
                <li><a href="#" data-filter=".design">Design</a><span>04</span></li>
                <li><a href="#" data-filter=".web">Web</a><span>01</span></li>
              </ul>
            </div>
          </div>
        </div>
        <!--/Portfolio Filters -->


        <!-- Main -->
        <div id="main">
          <!-- Hero Section -->
          <div id="hero">
            <div id="hero-styles" class="scale-onscroll opacity-onscroll">
              <div id="hero-caption">
                <div class="inner text-align-center">
                  <div class="hero-title">Rob Sturgill / UX Professional</div>
                  <div class="hero-subtitle">Inspiring people so together, we can create better experiences.</div>
                </div>
              </div>
            </div>
          </div>
          <div id="hero-height" class="hidden"></div>
          <!--/Hero Section -->

          <!-- Main Content -->
          <div id="main-content">

            <!-- Portfolio Wrap -->
            <div id="portfolio-wrap" class="">

              <!-- Portfolio Columns -->
              <div id="portfolio" data-col="3">

<?php /*
                <div class="item ux">
                  <a href="automobility.php" class="ajax-link" data-type="page-transition">
                    <div class="item-content">
                      <div class="item-image" data-src="/assets/img/projects/automobility/automobility-thumb.jpg"></div>
                      <div class="item-caption">
                        <div class="item-overlay">
                          <div class="item-title">FCA Automobility</div>
                          <div class="item-sub-mask">
                            <div class="item-cat">UX/UI</div>
                            <div class="item-case">See Case Study</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
 */ ?>

                <div class="item wide design">
                  <a href="pixel-geek.php" class="ajax-link" data-type="page-transition">
                    <div class="item-content">
                      <div class="item-image" data-src="/assets/img/projects/pixel-geek/pixel-geek-thumb.jpg"></div>
                      <div class="item-caption">
                        <div class="item-overlay">
                          <div class="item-title">Pixel Geek</div>
                          <div class="item-sub-mask">
                            <div class="item-cat">Logo</div>
                            <div class="item-case">View Detail</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="item design">
                  <a href="reed-modified.php" class="ajax-link" data-type="page-transition">
                    <div class="item-content">
                      <div class="item-image" data-src="/assets/img/projects/reed-modified/reed-modified-thumb.jpg"></div>
                      <div class="item-caption">
                        <div class="item-overlay">
                          <div class="item-title">Reed Modified</div>
                          <div class="item-sub-mask">
                            <div class="item-cat">Logo</div>
                            <div class="item-case">View Detail</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="item wide web branding">
                  <a href="nashsauto.php" class="ajax-link" data-type="page-transition">
                    <div class="item-content">
                      <div class="item-image" data-src="/assets/img/projects/nashs-auto/nash-auto-thumb.jpg"></div>
                      <div class="item-caption">
                        <div class="item-overlay">
                          <div class="item-title">Nash's Auto</div>
                          <div class="item-sub-mask">
                            <div class="item-cat">Web / Branding</div>
                            <div class="item-case">See Case Study</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="item design">
                  <a href="drpepper.php" class="ajax-link" data-type="page-transition">
                    <div class="item-content">
                      <div class="item-image" data-src="/assets/img/projects/drpepper/destiny-drpepper-thumb.jpg"></div>
                      <div class="item-caption">
                        <div class="item-overlay">
                          <div class="item-title">First Sip</div>
                          <div class="item-sub-mask">
                            <div class="item-cat">Art Composition</div>
                            <div class="item-case">View Detail</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="item design">
                  <a href="hitman.php" class="ajax-link" data-type="page-transition">
                    <div class="item-content">
                      <div class="item-image" data-src="/assets/img/projects/hitman/hitman-thumb.jpg"></div>
                      <div class="item-caption">
                        <div class="item-overlay">
                          <div class="item-title">Hitman Poster</div>
                          <div class="item-sub-mask">
                            <div class="item-cat">Art Composition</div>
                            <div class="item-case">View Details</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="item wide motion">
                  <a href="elscorcho-salsa.php" class="ajax-link" data-type="page-transition">
                    <div class="item-content">
                      <div class="item-image" data-src="/assets/img/projects/elscorcho-salsa/elscorcho-salsa-thumb.jpg"></div>
                      <div class="item-caption">
                        <div class="item-overlay">
                          <div class="item-title">Elscorcho Salsa</div>
                          <div class="item-sub-mask">
                            <div class="item-cat">Motion Graphics</div>
                            <div class="item-case"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Watch Video</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <!--/Portfolio -->

            </div>
            <!--/Portfolio Wrap -->
          </div>
        </div>
        <!--/Main -->

        <!-- Footer -->
        <footer class="hidden">
          <div id="page-action-holder" data-tooltip="View Filters" data-placement="right">
            <div id="open-filters"><i class="fa fa-eye" aria-hidden="true"></i></div>
          </div>

          <?php include_once('inc/footer.php'); ?>