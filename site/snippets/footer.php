<footer class="footer cf" role="contentinfo">
  <div class="site">
    <div class="footerheading">
      <h4>Start learning with MSC. </h4>
      <button class="buttonondark" onclick="window.location.href='http://www.learnmsc.org'"><h5>Case Gallery</h5></button>
    </div> <!--footerheading-->
    <nav class="footerflex">
      <div class="footerflexitem">
        <h4>Actions</h4>
        <?php foreach($pages->find('action')->children() as $action): ?>
        <nav>
          <ul class="footermenu">
            <li><a href="<?php echo $action->url() ?>"><?php echo $action->title()->html() ?></a></li>
            <?php endforeach ?>
          </ul>
        </nav>
      </div><!--footerflexitem-->
      <div class="footerflexitem">
        <h4>Elements</h4>
        <?php foreach($pages->find('element')->children() as $element): ?>
        <nav>
          <ul class="footermenu">
            <li><a href="<?php echo $element->url() ?>"><?php echo $element->title()->html() ?></a></li>
            <?php endforeach ?>
          </ul>
        </nav>
      </div><!--footerflexitem-->
      <div class="footerflexitem">
        <h4>Vision</h4>
        <?php foreach($pages->find('vision')->children() as $vision): ?>
        <nav>
          <ul class="footermenu">
            <li><a href="<?php echo $vision->url() ?>"><?php echo $vision->title()->html() ?></a></li>
            <?php endforeach ?>
          </ul>
        </nav>
      </div><!--footerflexitem-->
    </nav><!--footerflex-->

    <div class="footerbottom">
      <div class="copyright">
        <?php echo $site->copyright()->kirbytext() ?>
      </div><!--copyright-->
      <div class="colophon">
        <a href="contact"> Contact Us </a>
      </div><!--colophon-->
    </div><!--footerbottom-->
  </div><!--site-->
</footer>

<a href="#top" class="to-top">Top</a>

</body>
</html>
