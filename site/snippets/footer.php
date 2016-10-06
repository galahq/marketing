<footer class="footer cf" role="contentinfo">
  <?php
  // nested menu
  $items = $pages->visible();
  ?>
  <div class="site">
    <div class="footerheading">
      <h4>Start learning with MSC. </h4>
      <button class="button buttonondark" onclick="window.location.href='http://www.learnmsc.org'">Case Gallery</button>
    </div> <!--footerheading-->
    <nav class="footerflex flex-container">
      <?php foreach($items as $item): ?>

      <div class="footerflexitem hide">
        <h4><?php echo $item->title()->html() ?></h4>
          <ul class="footermenu">
            <?php foreach($item->children() as $child): ?>
              <li><a href="<?php echo $child->url() ?>"><?php echo $child->title()?></a></li>
            <?php endforeach ?>
          </ul>
        </div><!--footerflexitem-->
      <?php endforeach ?>

      <div class="footerflexitem hide">
        <h4>Resources</h4>
        <nav>
          <ul class="footermenu">
            <li><a href="<?php echo $pages->find('action')->find('teach')->find('evaluation')->url() ?>"><?php echo $pages->find('action')->find('teach')->find('evaluation')->title() ?></a></li>
            <li><a href="<?php echo $pages->find('action')->find('make')->url() ?>"><?php echo $pages->find('action')->find('make')->find('production-guide')->title() ?></a></li>
            <li><a href="<?php echo $pages->find('action')->find('make')->find('proposal')->url() ?>"><?php echo $pages->find('action')->find('make')->find('proposal')->title() ?></a></li>
            <li><a href="<?php echo $pages->find('contact')->url() ?>">Contact Us</a></li>
          </ul>
        </nav>
      </div><!--footerflexitem-->
    </nav><!--footerflex-->

    <div class="flex-container footerbottom">
      <div class="flex-growing copyright">
        <?php echo $site->copyright()->kirbytext() ?>
      </div><!--copyright-->
    </div><!--footerbottom-->
  </div><!--site-->
</footer>

<?php echo js('assets/js/main.js') ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85341915-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
