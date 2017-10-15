
        <!-- Header -->
        <header class="scroll-hide">
          <div id="header-container">

            <!-- Logo -->
            <div id="logo">
              <a class="ajax-link" data-type="page-transition" href="/">
                <img class="black-logo" src="/assets/img/logo.png" alt="Logo Black">
                <img class="white-logo" src="/assets/img/logo-white.png" alt="Logo White">
              </a>
            </div>
            <!--/Logo -->

            <!-- Navigation -->
            <nav>
              <ul data-breakpoint="1024" class="flexnav">
                <li><a class="ajax-link <?php if($current == 'home') {echo 'active';} ?>" href="/">Portfolio</a>
<?php /*
                  <ul>
                    <li><a class="ajax-link active" href="index.html" data-type="page-transition">Brick Wall</a></li>
                    <li><a class="ajax-link" href="portfolio01.html" data-type="page-transition">Half Squares</a></li>
                    <li><a class="ajax-link" href="portfolio02.html" data-type="page-transition">White Canvas</a></li>
                    <li><a class="ajax-link" href="portfolio03.html" data-type="page-transition">Vertical Slides</a></li>
                    <li><a class="ajax-link" href="portfolio04.html" data-type="page-transition">Classic Grid</a></li>
                  </ul>
                </li>
                <li><a class="ajax-link" href="blog.html" data-type="page-transition">Blog</a></li>
*/ ?>
                <li><a class="ajax-link <?php if($current == 'about') {echo 'active';} ?>" href="about.php" data-type="page-transition">About</a></li>
                <li><a class="ajax-link <?php if($current == 'contact') {echo 'active';} ?>" href="contact.php" data-type="page-transition">Contact</a></li>
              </ul>

            </nav>
            <!--/Navigation -->

            <!-- Menu Burger -->
            <div id="menu-burger">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!--/Menu Burger -->

          </div>
        </header>
        <!--/Header -->
