<?php
  $current = '404';
  $title = '404 • Page Not Found';
  $description = 'This is not the page you are looking for.';
?>
<?php include_once('inc/header.php'); ?>

<body>
	<main>
   <div class="cd-index cd-main-content">

     <!-- Page Content -->
     <div id="page-content" class="light-content" data-bgcolor="#40b5aa" data-textcolor="#ffffff">

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
              <h1 class="hero-title">404 • Page Not Found</h1>
              <div class="hero-subtitle">Try using the menu to visit another page.</div>
            </div>
          </div>
        </div>
      </div>
      <div id="hero-height" class="hidden"></div>
      <!--/Hero Section -->


      <!-- Main Content -->
      <div id="main-content">


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