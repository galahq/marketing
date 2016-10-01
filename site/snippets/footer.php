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

      <div class="footerflexitem">
        <h4>Resources</h4>
        <nav>
          <ul class="footermenu">
            <li><a href="<?php echo $pages->find('action')->find('teach')->find('evaluation')->url() ?>"><?php echo $pages->find('action')->find('teach')->find('evaluation')->title() ?></a></li>
            <li><a href="<?php echo $pages->find('action')->find('make')->find('production-guide')->url() ?>"><?php echo $pages->find('action')->find('make')->find('production-guide')->title() ?></a></li>
            <li><a href="<?php echo $pages->find('action')->find('make')->find('proposal')->url() ?>"><?php echo $pages->find('action')->find('make')->find('proposal')->title() ?></a></li>
            <li><a href="home/contact">Contact Us</a></li>
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
</body>
</html>
