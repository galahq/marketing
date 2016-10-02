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
      </div>
    </section>
  <?php } ?>

  <?php if($page->timeline()->isNotEmpty()) { ?>
    <section id="timeline" class="timeline-container site">
      <?php foreach($page->timeline()->toStructure() as $timelineitem): ?>
        <div class="timeline-block">
    			<div class="timeline-img">
    				<img src="<?php echo $timelineitem->icon() ?>" alt="icon">
    			</div> <!-- timeline-img -->

    			<div class="timeline-content">
            <?php echo str_replace('(\\', '(', kirbytext($timelineitem->content())) ?>
            <?php if($timelineitem->newslink()->isNotEmpty()) { ?>
              <a href="<?php echo $timelineitem->newslink() ?>" class="timeline-read-more">Read More ›</a>
            <?php } ?>
    				<span class="timeline-date"><?php echo $timelineitem->dateofevent() ?></span>
    			</div> <!-- timeline-content -->
    		</div> <!-- timeline-block -->
      <?php endforeach ?>
    </section>
  <?php } ?>

</main>

<?php snippet('footer') ?>
