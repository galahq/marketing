<?php if($page->timeline()->isNotEmpty()) { ?>
  <section id="c-timeline" class="c-timeline__container t-site">
    <?php foreach($page->timeline()->toStructure() as $timelineitem): ?>
      <div class="c-timeline__block">
        <div class="c-timeline__img">
        </div> <!-- timeline-img -->

        <div class="c-timeline__content">
          <?php if($timelineitem->picture()->isNotEmpty()) { ?>
            <?php echo str_replace('(\\', '(', kirbytext($timelineitem->sortBy($sort='dateofevent', $direction='desc')->picture())) ?>
          <?php } ?>
          <span class="c-timeline__date"><?php echo $timelineitem->sortBy($sort='dateofevent', $direction='desc')->dateofevent() ?></span>
          <?php echo str_replace('(\\', '(', kirbytext($timelineitem->sortBy($sort='dateofevent', $direction='desc')->content())) ?>
          <?php if($timelineitem->newslink()->isNotEmpty()) { ?>
            <a href="<?php echo $timelineitem->sortBy($sort='dateofevent', $direction='desc')->newslink() ?>" class="c-timeline__readmore">Read more ›</a>
          <?php } ?>
        </div> <!-- timeline-content -->
      </div> <!-- timeline-block -->
    <?php endforeach ?>
  </section>
<?php } ?>
