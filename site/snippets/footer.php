<footer class="footer cf" role="contentinfo">
  <div class="site">
    <div class="footerheading">
      <h4>Start learning with MSC. </h4>
      <button class="button buttonondark" onclick="window.location.href='http://www.learnmsc.org'"><h5>Case Gallery</h5></button>
    </div> <!--footerheading-->
    <nav class="footerflex flex-container">
      <div class="footerflexitem hide">
        <h4>Actions</h4>
        <?php foreach($pages->find('action')->children() as $action): ?>
        <nav>
          <ul class="footermenu">
            <li><a href="<?php echo $action->url() ?>"><?php echo $action->title()->html() ?></a></li>
            <?php endforeach ?>
          </ul>
        </nav>
      </div><!--footerflexitem-->
      <div class="footerflexitem hide">
        <h4>Elements</h4>
        <?php foreach($pages->find('element')->children() as $element): ?>
        <nav>
          <ul class="footermenu">
            <li><a href="<?php echo $element->url() ?>"><?php echo $element->title()->html() ?></a></li>
            <?php endforeach ?>
          </ul>
        </nav>
      </div><!--footerflexitem-->
      <div class="footerflexitem hide">
        <h4>Vision</h4>
        <?php foreach($pages->find('vision')->children() as $vision): ?>
        <nav>
          <ul class="footermenu">
            <li><a href="<?php echo $vision->url() ?>"><?php echo $vision->title()->html() ?></a></li>
            <?php endforeach ?>
          </ul>
        </nav>
      </div><!--footerflexitem-->
      <div class="footerflexitem">
        <h4>Resources</h4>
        <nav>
          <ul class="footermenu">
            <li><a href="<?php echo $pages->find('action')->find('teach')->find('evaluation')->url() ?>"><?php echo $pages->find('action')->find('teach')->find('evaluation')->title() ?></a></li>
            <li><a href="<?php echo $pages->find('action')->find('teach')->find('teaching-guide')->url() ?>"><?php echo $pages->find('action')->find('teach')->find('teaching-guide')->title() ?></a></li>
            <li><a href="<?php echo $pages->find('action')->find('make')->find('production-guide')->url() ?>"><?php echo $pages->find('action')->find('make')->find('production-guide')->title() ?></a></li>
            <li><a href="<?php echo $pages->find('action')->find('make')->find('proposal')->url() ?>"><?php echo $pages->find('action')->find('make')->find('proposal')->title() ?></a></li>
          </ul>
        </nav>
      </div><!--footerflexitem-->
    </nav><!--footerflex-->

    <div class="flex-container footerbottom">
      <div class="flex-growing copyright">
        <?php echo $site->copyright()->kirbytext() ?>
      </div><!--copyright-->
      <div class="flex-growing colophon">
        <a href="contact"> Contact Us </a>
      </div><!--colophon-->
    </div><!--footerbottom-->
  </div><!--site-->
</footer>

<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>
