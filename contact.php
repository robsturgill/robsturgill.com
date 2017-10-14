<?php
  $title = 'Let Talk';
  $description = 'Here are a few ways to get in contact with me.';
?>
<?php include_once('inc/header.php'); ?>

<body>
	<main>
   <div class="cd-index cd-main-content">

     <!-- Page Content -->
     <div id="page-content" class="light-content" data-bgcolor="#0091ff" data-textcolor="#ffffff">

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
              <h1 class="hero-title">Contact Me</h1>
              <div class="hero-subtitle">Or follow me on a few social networks</div>
            </div>
          </div>
        </div>
      </div>
      <div id="hero-height" class="hidden"></div>
      <!--/Hero Section -->


      <!-- Main Content -->
      <div id="main-content">

         <!-- Row -->
        <div class="vc_row small text-align-center row_padding_top">
          <div class="container">
            <hr><hr><hr>

            <h2>Let’s talk</h2>
            <p>Tell me about your project ideas, opportunities or just say hello.</p>

            <!-- Contact Formular -->
            <div id="contact-formular">

              <div id="message"></div>

              <form method="post" action="contact-form.php" name="contactform" id="contactform">
                <div class="name-box">
                  <input name="name" type="text" id="name" size="30"  onfocus="if(this.value == 'Full Name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Full Name'; }" value="Full Name" ><label class="input_label"></label>
                </div>
                <div class="email-box">
                  <input name="email" type="text" id="email" size="30" onfocus="if(this.value == 'E-mail') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'E-mail'; }" value="E-mail" ><label class="input_label"></label>
                </div>
                <div class="message-box">
                  <textarea name="comments" cols="40" rows="4" id="comments" onfocus="if(this.value == 'Your Message') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Your Message'; }" >Your Message</textarea><label class="input_label slow"></label>
                </div>
                <div class="submit-box">
                  <input type="submit" class="send_message cillar-button" id="submit" value="Submit" />
                </div>
              </form>
            </div>
            <!--/Contact Formular -->

            <hr><hr>
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