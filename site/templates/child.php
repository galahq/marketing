<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">
  <?php if($page->pagetagline()->isEmpty()) { ?>
    <div class="blog site">
    <h1 class="subpage-title">
      <?php echo $page->title(); ?>
    </h1>
    </div>
  <?php } ?>

  <?php if($page->otherpartners()->isNotEmpty()) { ?>
    <div class="partners blog site">
      <h2>Beyond UM</h2>
    </div>
    <div class="beyond-um-logos flex-container site blog">
      <?php foreach($page->otherpartners()->toStructure() as $otherpartner): ?>
        <Figure>
          <a href="<?php echo $otherpartner->link() ?>"><?php echo str_replace('(\\', '(', kirbytext($otherpartner->logo())) ?></a>
        </Figure>
      <?php endforeach ?>
    </div>
  <?php } ?>

  <?php if($page->umunits()->isNotEmpty()) { ?>
    <div class="partners blog site">
      <h2>UM Campus</h2>
    </div>
    <div class="um-logos flex-container site blog">
      <?php foreach($page->umunits()->toStructure() as $umunit): ?>
        <Figure>
          <a href="<?php echo $umunit->link() ?>"><?php echo str_replace('(\\', '(', kirbytext($umunit->logo())) ?></a>
        </Figure>
      <?php endforeach ?>
    </div>
  <?php } ?>

  <?php if($page->umschools()->isNotEmpty()) { ?>
    <div class="partners blog site">
      <h2>UM Units</h2>
    </div>
    <div class="um-logos flex-container site blog">
      <?php foreach($page->umschools()->toStructure() as $umschool): ?>
        <Figure>
          <a href="<?php echo $umschool->link() ?>"><?php echo str_replace('(\\', '(', kirbytext($umschool->logo())) ?></a>
        </Figure>
      <?php endforeach ?>
    </div>
  <?php } ?>

  <?php if($page->text()->isNotEmpty()) { ?>
    <section class="site blog cf">
      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>
      <?php if($page->feature()->isNotEmpty()) { ?>
        <div class="flex-container keyfeature-container">
          <div class="keyfeature">
            <?php echo str_replace('(\\', '(', kirbytext($page->feature())) ?>
          </div>
          <figure class="keyfeature-img">
            <?php echo str_replace('(\\', '(', kirbytext($page->featureimg())) ?>
          </figure>
        </div>
      <?php } ?>
    </section>
  <?php } ?>

  <?php if($page->wbg()->isNotEmpty()) { ?>
    <section class="child-background">
      <div class="site blog">
        <?php echo $page->wbg()->kirbytext(); ?>
        <?php if($page->elementexamples()->isNotEmpty()) { ?>
          <div class="flex-container element-examples">
          <?php foreach($page->elementexamples()->toStructure() as $elementexample): ?>
            <div class="flex-container">
              <div class="figures"
                style="background-image: url(<?php echo $elementexample->background();?>)"
              >
                <?php echo str_replace('(\\', '(', kirbytext($elementexample->foreground())) ?>
              </div>
              <div class="description">
              <?php echo str_replace('(\\', '(', kirbytext($elementexample->description())) ?>
              </div>
            </div>
          <?php endforeach ?>
          </div>
        <?php } ?>
      </div>
    </section>
    <?php echo js('assets/js/edgenote.bundle.js'); ?>
  <?php } ?>

  <?php if($page->timeline()->isNotEmpty()) { ?>
    <section id="timeline" class="timeline-container site">
      <?php foreach($page->timeline()->toStructure() as $timelineitem): ?>
        <div class="timeline-block">
    			<div class="timeline-img">
    			</div> <!-- timeline-img -->

    			<div class="timeline-content">
            <span class="timeline-date"><?php echo $timelineitem->dateofevent() ?></span>
            <?php echo str_replace('(\\', '(', kirbytext($timelineitem->content())) ?>
            <?php if($timelineitem->newslink()->isNotEmpty()) { ?>
              <a href="<?php echo $timelineitem->newslink() ?>" class="timeline-read-more">Read more ›</a>
            <?php } ?>
    			</div> <!-- timeline-content -->
    		</div> <!-- timeline-block -->
      <?php endforeach ?>
    </section>
  <?php } ?>

</main>

<?php snippet('footer') ?>
