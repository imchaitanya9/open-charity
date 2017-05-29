
<header>
    <div class="header-wrapper max-width-1107 flex-items-space-between ">
        <div class="logo-box"><?php print '<a href="javascript:;"><img src="'.$logo.'" alt="'.variable_get('site_name','').'"</a>'; ?></div><div class="main-navigation-container"><div class="show-767 mobi-menu"></div><div class="top-navigation"><?php print theme('links', array('links' => $main_menu)) ?></div>
        </div>
        <h1 class="hide">hidden h1 for SEO point of view</h1>
    </div>
</header>
<section class="banner-container gradient-banner-bg flex-items-center-vh">
    <div class="banner-wrapper">
        <div class="banner-text-wrapper max-width-835">
            <?php print render($page['banner']); ?>
        </div>
    </div>
</section>
<section class="event-container grey-bg">
    <div class="event-wrapper max-width-1107 "><?php print render($page['upcoming_event']); ?></div>
</section>
<section class="get-involved-container">
    <div class="get-involved-wrapper max-width-1107 ">
      <?php print render($page['get_involved']); ?>
    </div>
</section>
<section class="main-content-container grey-bg">
    <div class="main-content-wrapper max-width-1107 ">
        <div class="our-mission-wrapper">
            <?php print render($page['our_mission']); ?>
        </div>
        <div class="our-members-wrapper">
            <?php print render($page['our_members']); ?>
        </div>
        
    </div>
</section>
<section class="blog-container">
    <div class="blog-wrapper max-width-1262 ">
      <?php print render($page['blogs']); ?>
    </div>
</section>
<footer class="light-black-bg">
    <div class="footer-wrapper max-width-1107 ">
        <?php print render($page['footer']); ?>
    </div>
</footer>