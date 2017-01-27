<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">
  <nav class="c-conference__menu t-site">
    <div class="c-conference__logo">
      <img srcset="http://msc-public.imgix.net/msc_logo_vertical.png?w=100&amp; 1x,http://msc-public.imgix.net/msc_logo_vertical.png?w=200&amp; 2x,http://msc-public.imgix.net/msc_logo_vertical.png?w=300&amp; 3x," src="http://msc-public.imgix.net/msc_logo_vertical.png?w=100&amp;" alt="icon for search">
      <h1>CaseConf<br><span>Global</span></h1>
    </div>
    <ul>
      <li><a href="#">Overview</a></li>
      <li><a href="#">Timeline</a></li>
      <li><a href="#">Partners</a></li>
      <li><a href="#">Competition</a></li>
      <li><a href="#">Webinars</a></li>
      <li><a href="#">Logistics</a></li>
      <li><a href="#">Register Now</a></li>
    </ul>
  </nav>
  <div class="t-site t-blog">
    <p><?php echo str_replace('(\\', '(', kirbytext($page->text())) ?></p>
  </div>

</main>

<?php snippet('footer') ?>
