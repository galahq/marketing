<?php if($page->wbg()->isNotEmpty()) { ?>
  <section class="o-child-background">
    <div class="t-site t-blog">
      <?php echo $page->wbg()->kirbytext(); ?>
      <?php if($page->elementexamples()->isNotEmpty()) { ?>
        <div class="o-flex-container u-element-examples">
        <?php foreach($page->elementexamples()->toStructure() as $elementexample): ?>
          <div class="o-flex-container">
            <div class="u-element-examples__figures"
              style="background-image: url(<?php echo $elementexample->background();?>)"
            >
              <?php echo str_replace('(\\', '(', kirbytext($elementexample->foreground())) ?>
            </div>
            <div class="u-element-examples__description">
            <?php echo str_replace('(\\', '(', kirbytext($elementexample->description())) ?>
            </div>
          </div>
        <?php endforeach ?>
        </div>
      <?php } ?>
    </div>
  </section>
<?php } ?>
