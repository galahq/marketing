<?php if($page->feature()->isNotEmpty()) { ?>
  <div class="o-flex-container c-keyfeature__container">
    <div class="c-keyfeature">
      <?php echo str_replace('(\\', '(', kirbytext($page->feature())) ?>
    </div>
    <figure class="c-keyfeature__img">
      <?php echo str_replace('(\\', '(', kirbytext($page->featureimg())) ?>
    </figure>
  </div>
<?php } ?>
