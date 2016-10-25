<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">
  <?php if($page->pagetagline()->isEmpty()) { ?>
    <div class="t-site t-blog">
    <h1 class="o-page-title">
      <?php echo $page->title(); ?>
    </h1>
    </div>
  <?php } ?>

  <?php if($page->otherpartners()->isNotEmpty()) { ?>
    <div class="u-partners t-blog t-site">
      <h2>Beyond UM</h2>
    </div>
    <div class="u-beyond-um-logos o-flex-container t-site t-blog">
      <?php foreach($page->otherpartners()->toStructure() as $otherpartner): ?>
        <Figure>
          <a href="<?php echo $otherpartner->link() ?>"><?php echo str_replace('(\\', '(', kirbytext($otherpartner->logo())) ?></a>
        </Figure>
      <?php endforeach ?>
    </div>
  <?php } ?>

  <?php if($page->umunits()->isNotEmpty()) { ?>
    <div class="u-partners t-blog t-site">
      <h2>UM Campus</h2>
    </div>
    <div class="u-um-logos o-flex-container t-site t-blog">
      <?php foreach($page->umunits()->toStructure() as $umunit): ?>
        <Figure>
          <a href="<?php echo $umunit->link() ?>"><?php echo str_replace('(\\', '(', kirbytext($umunit->logo())) ?></a>
        </Figure>
      <?php endforeach ?>
    </div>
  <?php } ?>

  <?php if($page->umschools()->isNotEmpty()) { ?>
    <div class="u-partners t-blog t-site">
      <h2>UM Units</h2>
    </div>
    <div class="u-um-logos o-flex-container t-site t-blog">
      <?php foreach($page->umschools()->toStructure() as $umschool): ?>
        <Figure>
          <a href="<?php echo $umschool->link() ?>"><?php echo str_replace('(\\', '(', kirbytext($umschool->logo())) ?></a>
        </Figure>
      <?php endforeach ?>
    </div>
  <?php } ?>

  <?php if($page->text()->isNotEmpty()) { ?>
    <section class="t-site t-blog u-clearfix">
      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>
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
    </section>
  <?php } ?>

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
    <?php echo js('assets/js/edgenote.bundle.js'); ?>
  <?php } ?>

  <?php if($page->timeline()->isNotEmpty()) { ?>
    <section id="c-timeline" class="c-timeline__container t-site">
      <?php foreach($page->timeline()->toStructure() as $timelineitem): ?>
        <div class="c-timeline__block">
    			<div class="c-timeline__img">
    			</div> <!-- timeline-img -->

    			<div class="c-timeline__content">
            <span class="c-timeline__date"><?php echo $timelineitem->dateofevent() ?></span>
            <?php echo str_replace('(\\', '(', kirbytext($timelineitem->content())) ?>
            <?php if($timelineitem->newslink()->isNotEmpty()) { ?>
              <a href="<?php echo $timelineitem->newslink() ?>" class="c-timeline__readmore">Read more ›</a>
            <?php } ?>
    			</div> <!-- timeline-content -->
    		</div> <!-- timeline-block -->
      <?php endforeach ?>
    </section>
  <?php } ?>

</main>

<?php snippet('footer') ?>
