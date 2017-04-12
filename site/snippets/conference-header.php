<?php if($page->is($pages->find('events')->find('case-competition'))) { ?>
  <section class="hero">
  <nav class="c-conference__menu o-flex-container t-site">
    <div class="c-conference__logo o-flex-container">
      <img srcset="http://msc-public.imgix.net/msc_logo_vertical.png?w=100&amp; 1x,http://msc-public.imgix.net/msc_logo_vertical.png?w=200&amp; 2x,http://msc-public.imgix.net/msc_logo_vertical.png?w=300&amp; 3x," src="http://msc-public.imgix.net/msc_logo_vertical.png?w=100&amp;" alt="icon for search">
      <h1>CaseConf<br><span>Global</span></h1>
    </div>
    <ul>
      <li><a href="#overview">Overview</a></li>
      <li><a href="#timeline">Timeline</a></li>
      <li><a href="#partners">Partners</a></li>
      <li><a href="#competition">Competition</a></li>
      <li><a href="#webinars">Webinars</a></li>
      <li><a href="#logistics">Logistics</a></li>
      <li><a href="#register">Register Now</a></li>
    </ul>
  </nav>
  <div class="o-flex-container c-conference__hero t-site">
    <div class="c-conference__hero__tagline">
      <h2><?php echo $page->tagline() ?></h2>
    </div>
    <div>
      <p><?php echo $page->details() ?></p>
    </div>
    <div>
      <button class="c-button" onclick="window.location.href='https://www.facebook.com/events/1377575905626948/'">register now</button>
    </div>
  </div>
<?php } ?>
