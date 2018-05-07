<footer class="footer u-clearfix" role="contentinfo">
  <?php $items = [
    $pages->find('action'),
    $pages->find('element'),
    $pages->find('msc')
  ];?>

  <div class="t-site">
    <div class="footer__heading">
      <h4>Start learning with MSC. </h4>
      <button class="c-button c-button-t-dark" onclick="window.location.href='http://www.learngala.com'">Case Gallery</button>
    </div> <!--footerheading-->
    <nav class="footer__flexcontainer o-flex-container">
      <?php foreach($items as $item): ?>

      <div class="footer__flexitem u-hide">
        <h4><?php echo $item->title()->html() ?></h4>
          <ul class="footer__menu">
            <?php foreach($item->children() as $child): ?>
              <li><a href="<?php echo $child->url() ?>"><?php echo $child->title()?></a></li>
            <?php endforeach ?>
          </ul>
        </div><!--footerflexitem-->
      <?php endforeach ?>

      <div class="footer__flexitem u-hide">
        <h4>Resources</h4>
        <nav>
          <ul class="footer__menu">
            <li><a href="<?php echo $pages->find('action')->find('make')->find('production-guide')->url() ?>">Production Guide</a></li>
            <li><a href="<?php echo $pages->find('action')->find('make')->find('proposal')->url() ?>"><?php echo $pages->find('action')->find('make')->find('proposal')->title() ?></a></li>
            <li><a href="<?php echo $pages->find('action')->find('teach')->find('evaluation')->url() ?>"><?php echo $pages->find('action')->find('teach')->find('evaluation')->title() ?></a></li>
            <li><a href="<?php echo $pages->find('events')->url() ?>"><?php echo $pages->find('events')->title() ?></a></li>
            <li><a href="<?php echo $pages->find('contact')->url() ?>">Contact Us</a></li>
          </ul>
        </nav>
      </div><!--footerflexitem-->
    </nav><!--footerflex-->

    <div class="o-flex-container footer__bottom">
      <div class="o-flex-item-growing footer__copyright">
        <?php echo $site->copyright()->kirbytext() ?>
      </div><!--copyright-->
      <ul class="o-flex-item-growing o-flex-container footer__socialmedia">
        <li><a href="<?php echo $site->twitter() ?>" target="_blank">
          <img srcset="https://msc-public.imgix.net/twitter_icon.png?w=30&amp; 1x,https://msc-public.imgix.net/twitter_icon.png?w=60&amp; 2x,https://msc-public.imgix.net/twitter_icon.png?w=90&amp; 3x," src="https://msc-public.imgix.net/twitter_icon.png?w=30&amp;" alt="twitter">
        </a></li>
        <li><a href="<?php echo $site->facebook() ?>" target="_blank">
          <img srcset="https://msc-public.imgix.net/facebook_icon.png?w=16&amp; 1x,https://msc-public.imgix.net/facebook_icon.png?w=32&amp; 2x,https://msc-public.imgix.net/facebook_icon.png?w=48&amp; 3x," src="https://msc-public.imgix.net/facebook_icon.png?w=16&amp;" alt="facebook">
        </a></li>
      </ul><!--socialmedia-->
    </div><!--footerbottom-->
  </div><!--site-->
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85341915-1', 'auto');
  ga('send', 'pageview');
</script>
<?php echo js(array(
                      'assets/js/utilities.js',
                      'assets/js/jquery-3.1.0.js',
                      'assets/js/vendor/jquery.easing.min.js',
                      'assets/js/menu-mobile.js',
                      'assets/js/sort_events.js',
                      'assets/js/print.js'
                    )) ?>

</body>
</html>
