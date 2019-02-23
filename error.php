<?php
  $current = 'error';
  $title = 'Error';
  $description = 'This is an error page and not something you shoud be seeing.';

  switch(getenv("REDIRECT_STATUS"))
  {
    # "400 - Bad Request"
    case 400:
    $error_code = "400 - Bad Request";
    $explanation = "The syntax of the URL submitted by your browser could not be understood. Please verify the address and try again.";
    break;

    # "401 - Unauthorized"
    case 401:
    $error_code = "401 - Unauthorized";
    $explanation = "This section requires a password or is otherwise protected. If you feel you have reached this page in error, please return to the login page and try again, or contact the webmaster if you continue to have problems.";
    break;

    # "403 - Forbidden"
    case 403:
    $error_code = "403 - Forbidden";
    $explanation = "This section requires a password or is otherwise protected. If you feel you have reached this page in error, please return to the login page and try again, or contact the webmaster if you continue to have problems.";
    break;

    # "404 - Not Found"
    case 404:
    $error_code = "404 - Not Found";
    $explanation = "The requested resource could not be found on this server. Please verify the address and try again.";
    break;

    # "500 - Internal Server Error"
    case 500:
    $error_code = "500 - Internal Server Error";
    $explanation = "The server experienced an unexpected error. Please verify the address and try again.";
    break;
  }
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
              <h1 class="hero-title"><?php print ($error_code); ?></h1>
              <div class="hero-subtitle">Try using the menu to visit another page. <?php echo($explanation); ?></div>
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