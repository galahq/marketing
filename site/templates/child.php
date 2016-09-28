<?php snippet('head') ?>
<?php snippet('header') ?>

<main class="main" role="main">
  <?php if($page->text()->isNotEmpty()) { ?>
    <section class="site blog cf">
      <?php echo str_replace('(\\', '(', kirbytext($page->text())) ?>
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
            <a href="<?php echo $timelineitem->newslink() ?>" class="timeline-read-more">Read More ›</a>
    				<span class="timeline-date"><?php echo $timelineitem->dateofevent() ?></span>
    			</div> <!-- timeline-content -->
    		</div> <!-- timeline-block -->
      <?php endforeach ?>
    </section>
  <?php } ?>

</main>

<?php snippet('footer') ?>
