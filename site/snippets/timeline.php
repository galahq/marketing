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
