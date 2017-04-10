<?php if($page->is($pages->find('events')->find('case-competition'))) { ?>
  <section class="hero">
  <nav class="o-flex-growing c-conference__menu o-flex-container t-site">
    <div class="c-conference__logo o-flex-container o-flex-growing">
      <img srcset="http://msc-public.imgix.net/msc_logo_vertical.png?w=100&amp; 1x,http://msc-public.imgix.net/msc_logo_vertical.png?w=200&amp; 2x,http://msc-public.imgix.net/msc_logo_vertical.png?w=300&amp; 3x," src="http://msc-public.imgix.net/msc_logo_vertical.png?w=100&amp;" alt="icon for search">
      <h1>CaseConf<br><span>Global</span></h1>
    </div>
    <ul class="o-flex-growing">
      <li><a href="#">Overview</a></li>
      <li><a href="#">Timeline</a></li>
      <li><a href="#">Partners</a></li>
      <li><a href="#">Competition</a></li>
      <li><a href="#">Webinars</a></li>
      <li><a href="#">Logistics</a></li>
      <li><a href="#">Register Now</a></li>
    </ul>
  </nav>
  <div class="o-flex-growing o-flex-container c-conference__hero t-site">
    <div class="o-flex-growing c-conference__hero__tagline">
      <h1><?php echo $page->tagline() ?></h1>
    </div>
    <div class="o-flex-growing">
      <p><?php echo $page->details() ?></p>
    </div>
    <div class="o-flex-growing">
      <button class="c-button" onclick="window.location.href='https://www.facebook.com/events/1377575905626948/'">register now</button>
    </div>
  </div>
<?php } ?>
