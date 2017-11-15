<?php
  $title = 'Jewish Historical Society of Michigan • IA • Development';
  $description = 'A Community and Historical Society Website';
?>
<?php include_once('inc/header.php'); ?>

<body class="hidden">
  <main>
    <div class="cd-index cd-main-content">

      <!-- Page Content -->
      <div id="page-content" class="dark-content" data-bgcolor="#f7f7f7" data-textcolor="#0677a1">

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
                  <h1 class="hero-title">Jewish Historical Society of Michigan</h1>
                  <div class="hero-subtitle">IA • CMS Integration</div>
                </div>
              </div>
            </div>
          </div>
          <div id="hero-height" class="hidden"></div>
          <!--/Hero Section -->

          <div id="hero-image" class="hidden" style="background-image:url(/assets/img/projects/jhsm/jhsm-ia-cards.jpg)">
            <div id="image-border-left"></div>
            <div id="image-border-right"></div>
          </div>

          <!-- Main Content -->
          <div id="main-content">
            <div class="vc_row has-animation row_padding_top row_padding_bottom" data-delay="10">
              <div class="container">
                <div class="one_half has-animation" data-delay="100">
                  <h2>Challenge</h2>
                  <p>Create a solution for updating the site to a new CMS allowing the client to have more flexibility and control while maintaining brand consistency and expanding features.</p>

                  <p>The site was previously developed on Wordpress was restrictive and difficult for the clients to use. Part of the requirements where to retain features of the old with the new site. Features such as an events calendar, content gallery, blog, and site search.
                </div>

                <div class="one_half last has-animation" data-delay="200">
                  <h2>Solution</h2>
                  <p>I consulted with the clients to understand their needs and  what restrictions were imposed. Our CMS recommendation was MODx as it offers a lot of customization and flexibility. I recommended a other system to handle form creation and payment processing which was all to be managed by the client.<br><br>

                  <a href="https://www.michjewishhistory.org/" class="link" target="_blank" rel="noopener">Visit the site</a></p>
                </div>

                <div class="has-animation text-align-center" data-delay="300">
                  <a href="https://www.michjewishhistory.org/" class="link" target="_blank" rel="noopener"><img src="/assets/img/projects/jhsm/jhsm-intro-section.jpg" alt="Jewish Historical Society Information Architecture"></a>
                </div>
              </div>
            </div>
            <!--/Row -->

            <div class="vc_row has-animation row_padding_bottom" data-delay="10">
              <div class="container">
                <div class="one_half last has-animation" data-delay="200">
                  <h3>Responsibilities</h3>
                  <p>My primary responsibility was project lead for architecture and CMS development. I handled most of the initial research/documentation of the old site to develop the new site architecture. Once the visual design and static HTML was completed by other team members I migrated everything to work within the MODx CMS for clients to manage.</p>

                  <ul>
                    <li>Audit and document old site structure</li>
                    <li>Information Architecture (IA)</li>
                    <li>Developing an SEO plan</li>
                    <li>MODx CMS development</li>
                    <li>CMS training for clients</li>
                  </ul>
                </div>

              </div>
            </div>
            <!--/Row -->

            <div class="vc_row has-animation" data-delay="10">
              <div class="container">
                <div class="has-animation text-align-center" data-delay="300">
                  <h3>CMS Template Planning</h3>
                  <img src="/assets/img/projects/jhsm/jhsm-ia-cards.jpg" alt="Jewish Historical Society Information Architecture">
                </div>
              </div>
            </div>

            <div class="vc_row row_padding_top has-animation" data-delay="10">
              <div class="container">
                <div class="one_half has-animation" data-delay="100">
                  <h3>Example workflow</h3>
                  <p>I developed example process flow diagrams for the client to illustrate how retargeting users works across the integrated systems.</p>
                </div>

                <div class="one_half last has-animation" data-delay="100">
                  <img src="/assets/img/projects/jhsm/jhsm-workflow-example.jpg" alt="Jewish Historical Society of Michigan - workflow">
                </div>

              </div>
            </div>



            <div id="project-nav" class="has-animation" data-delay="100">
              <div class="nav-title">
                <a  class="ajax-link project-next" data-type="page-transition" href="reed-modified.php">next</a>
              </div>
              <div class="nav-project-title"><span>Reed Modified</span></div>
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